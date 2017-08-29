<?php
    require_once 'html_parser.php';

    function validator($input, $flag){
        if($flag === 1){
            if(strlen($input) === 9){
                return filter_var($input, FILTER_VALIDATE_INT);
            }
        }
        elseif ($flag === 2){
            if(strlen($input) === 1){
                return filter_var($input, FILTER_VALIDATE_INT);
            }
        }
        return false;
    }

    function url_request($url, $data){
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_html($url, false, $context) or false;
        return $result;
    }

    function fetch_data($enrolment, $program){
        $url = 'https://webservices.ignou.ac.in/GradecardM/result.asp';
        $data_array = array('eno' => $enrolment, 'program' => $program, 'HIDDEN_submit' => 'OK');
        $data = url_request($url, $data_array);
        if($data === false){
            return null;
        }
        $marks = array();
        $name[0] = $data->find('b', 4)->plaintext;
        if($name[0] === null){
            die("<script>alert('Oops!! Looks like you entered an invalid enrolment number, please try again');</script>");
        }
        $marks[] = $name;
        foreach ($data->find('tr') as $element) {
            for($i=0; $i<8; $i++){
                $temp_array[$i] = $element->find('td', $i)->plaintext;
            }
            $marks[] = $temp_array;
        }
        return $marks;
    }

    function calculate_result($marks){
        $len = count($marks);
        $assignment_marks[0] = "Assignment";
        $theory_marks[0] = "Marks";
        $total[0] = "Total";
        for($i=1; $i<$len; $i++){
            $temp_assignment_marks = round(($marks[$i][1]) * 0.25);
            $assignment_marks[] = $temp_assignment_marks;
            $temp_marks = 0;
            $subject_count = 0;
            for($j=2; $j<count($marks[$i]); $j++){
                if(is_numeric($marks[$i][$j])){
                    $temp_marks += $marks[$i][$j];
                    $subject_count += 1;
                }
            }
            if(!empty($subject_count)){
                $temp_marks = round(($temp_marks * 0.75) / $subject_count);
            }
            $theory_marks[] = $temp_marks;
            $total[] = $temp_assignment_marks + $temp_marks;
        }
        return array($assignment_marks, $theory_marks, $total);
    }

    function print_final_marks($total_marks){
        $len = count($total_marks);
        $final = 0;
        for($i=0; $i<$len; $i++){
            $final += $total_marks[$i];
        }
        return array($final);
    }

    function marks_response($marks){
        if($marks === null){
            return null;
        }
        $total_marks = calculate_result($marks);
        for($i=0; $i<count($marks); $i++){
            $marks[$i][8] = $total_marks[0][$i];
            $marks[$i][9] = $total_marks[1][$i];
            $marks[$i][10] = $total_marks[2][$i];            
        }
        $marks[] = print_final_marks($total_marks[2]);
        return $marks;
    }

    function fetch_marks_cache($enrolment, $program){
        $db = new Db();
        $query = "SELECT datadump FROM marks WHERE eno=".$enrolment." AND program='".$program."';";
        $result = $db->select($query);
        if(empty($result)){
            return false;
        }
        $result = unserialize($result[0]["datadump"]);
        return $result;
    }

    function update_marks_cache($enrolment, $marks, $program){
        $db = new Db();
        $query = "SELECT eno FROM marks WHERE eno=".$enrolment." AND program='".$program."';";
        $result = $db->select($query);
        $marks = serialize($marks);
        if(empty($result)){
            $query = "INSERT INTO marks(eno, datadump, program) VALUES(".$enrolment.",'".$marks."', '".$program."');";
            $db->query($query);
        }
        else{
            $query = "UPDATE marks SET datadump='".$marks."', timing=NOW() WHERE eno=".$enrolment." AND program='".$program."';";
            $db->query($query);
        }
    }

    function students_list_response($ccode, $batch){
        $url = "https://avserver.ignou.ac.in/HallTicket/Hall_".$batch."/Attendence/EXM/E".$ccode.".txt";
        $error = "                INDIRA GANDHI NATIONAL OPEN UNIVERSITY                 PAGE :    *
--------------------------------------------------------------------- -----------------------------------
        S.NO  ENR.NO.         CENTRE      NAME                           COURSES OPTED
--------------------------------------------------------------------- -----------------------------------";
        $error .= "<script>alert('Oops!! Something went wrong, unable to fetch records. Please try again in sometime');</script>";
        $student_list = file($url) or die($error);
        return $student_list;
    }

    function feedback_response($username, $email, $msg){
        $db = new Db();
        $username = $db->escape($username);
        $email = $db->escape($email);
        $msg = $db->escape($msg);
        $conn = $db->connect();
        $query = "INSERT INTO feedback(username, email, msg) VALUES(?, ?, ?);";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $email, $msg);
        $result = $stmt->execute();
        return $result;
    }

    function fetch_student_details($data){
        $table = $data->find('table', 0);
        $table_rows = $table->find("tr");
        $rows_len = count($table_rows);
        for($i=1; $i<$rows_len; $i++){
            $temp = $table_rows[$i];
            $t1 = $temp->find("td", 0)->plaintext;
            $t2 = $temp->find("td", 1)->plaintext;
            $student_details[$t1] = $t2;
        }
        $details = "<img src='static/image/user-info.png' alt='user-info' class='img-rounded img-responsive' style='margin: auto;'/>";
        $details .= "<table class='table table-striped table-bordered' style='border-left: 4px solid #1e8bc3;'>";
        foreach($student_details as $key => $value){
            $details .= "<tr><td><strong>".$key."</strong></td><td>".$value."</td></tr>";
        }
        $details = $details."</table>";
        return $details;
    }

    function student_details_response($enrolment, $program){
        $url = "http://admission.ignou.ac.in/changeElective/StudentRegStatus.asp";
        $data_array = array('EnrNo' => $enrolment, 'Program' => $program, 'Submit' => 'Submit');
        $data = url_request($url, $data_array);
        $student_details = fetch_student_details($data);
        echo $student_details;
    }
    
    function subscription_response($email){
        $db = new Db();
        $email = $db->escape($email);
        $query = "SELECT email FROM subscription WHERE email='".$email."'";
        $result = $db->select($query);
        if(empty($result)){
            $conn = $db->connect();
            $query = "INSERT INTO subscription(email) VALUES(?);";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $email);
            $result = $stmt->execute();
            return "<script>alert('You\'ve been successfully subscribed..!!');</script>";
        }
        else{
            return "<script>alert('E-mail is already subscribed..!!');</script>";
        }
    }
    
    function project_response($project_type, $p_type){
        $db = new Db();
        $project_type = $db->escape($project_type);
        if($p_type === '0'){
            $query = "SELECT * FROM projects WHERE language LIKE '%".$project_type."%';";
        }
        elseif($p_type === '1'){
            $query = "SELECT * FROM projects;";
        }
        $result = $db->select($query);
        if(empty($result)){
            return "<script>alert('Oops..!! Something went wrong, try again'); $('#project_tagline').show(); $('#projects_info').show();</script>";
        }
        $response = "";
        foreach($result as $r){
            $name = substr($r["name"], 1, -1);
            $filename = substr($r["filename"], 1, -1);
            $description = substr($r["description"], 1, -1);
            $language = substr($r["language"], 1, -1);
            $response .= '<div class="col-md-10 pull-right"> <div class="panel panel-primary"> <div class="panel-heading">'.$name.'</strong></div><div class="panel-body"> <div class="row"> <div class="col-md-2"><strong>Description:</strong></div><div class="col-md-10 text-justify"> <p>'.$description.'</p></div></div><div class="row" style="padding: 10px 0 10px 0;"> <div class="col-md-2"><strong>Downloads:</strong></div><div class="col-md-10">'.$r["counter"].'</div></div><div class="row"> <div class="col-md-2"><strong>Technology:</strong></div><div class="col-md-8">'.$language.'</div><div class="col-md-2"> <button href="'.$filename.'" id="download" value="'.$r["id"].'" class="btn btn-primary btn-outline pull-right">Download&nbsp;<i class="fa fa-download"></i></button> </div></div></div></div></div>';
        }
        return $response;
    }
    
    function update_projects_count($project_id){
        $db = new Db();
        $project_id = $db->escape($project_id);
        $query = "UPDATE projects SET counter=counter+1 WHERE id='".$project_id."';";
        $db->query($query);
        return;
    }
?>