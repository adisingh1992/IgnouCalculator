<?php
    session_start();
    require_once 'functions.php';
    require_once 'database.php';

    if(empty($_POST)){
        header("location:index.php");
    }

    $form_session_id = $_SESSION["form_id"] or "";
    $form_id = htmlspecialchars($_POST["form_id"]);

    if ($_SESSION["form_id"] === $form_id){
        $id = validator(htmlspecialchars($_POST["id"]), 2);

        if($id === 1){
            $enrolment = validator(htmlspecialchars($_POST["eno"]), 1);
            if($enrolment === false){
                echo "<script>alert('Oops!! Looks like you entered an invalid enrolment number, please try again');</script>";
            }
            else{
                $program = htmlspecialchars($_POST["program"]);
                $marks = marks_response(fetch_data($enrolment, $program));
                if($marks === null){
                    $marks = fetch_marks_cache($enrolment, $program);
                    if($marks === false){
                        die("<script>alert('Oops, IGNOU\'s servers are down currently, try again later..!!');</script>");
                    }
                    else{
                        echo json_encode($marks);
                    }
                }
                else{
                    echo json_encode($marks);
                    flush();
                    update_marks_cache($enrolment, $marks, $program);
                }
            }
        }
        elseif($id === 2){
            $ccode = htmlspecialchars($_POST["ccode"]);
            $batch = htmlspecialchars($_POST["batch"]);
            echo json_encode(students_list_response($ccode, $batch));
        }
        elseif($id === 3){
            if(htmlspecialchars($_POST["captcha"]) === htmlspecialchars($_SESSION["captcha"])){
                $email = htmlspecialchars($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    die("<script>alert('Invalid E-mail address, try again..!!');</script>");
                }
                $result = feedback_response(($_POST["username"]), ($email), ($_POST["msg"]));
            }
            else{
                echo "<script>$('#img_captcha').attr('src', 'includes/captcha.php?id=".rand(9, true)."');</script>";
                die("<script>alert('Invalid Captcha Code');</script>");
            }
            if($result === false){
                echo "Oops!! Something went wrong, Please try again.";
            }
            else{
                echo "THANK YOU FOR YOUR FEEDBACK..!!";
            }
        }
        elseif($id === 4){
            $enrolment = validator(htmlspecialchars($_POST["eno"]), 1);
            $program = htmlspecialchars($_POST["program"]);
            if($enrolment === false){
                $error = "<img src='static/image/user-info.png' alt='user-info' class='img-rounded img-responsive' style='margin: auto;'> <table class='table table-striped table-bordered' style='border-left: 4px solid #1e8bc3;'> <tbody> <tr> <td><strong>Enrollment No.</strong></td><td></td></tr><tr> <td><strong>Program</strong></td><td></td></tr><tr> <td><strong>Name</strong></td><td></td></tr><tr> <td><strong>Father/Husband/Mother's Name</strong></td><td></td></tr><tr> <td><strong>Current Address</strong></td><td></td></tr><tr> <td><strong>Reg.Centre Code</strong></td><td></td></tr><tr> <td><strong>Study Code</strong></td><td></td></tr><tr> <td><strong>Mobile No.</strong></td><td></td></tr><tr> <td><strong>Email-ID</strong></td><td></td></tr></tbody> </table>";
                $error .= "<script>alert('Oops!! Looks like you entered an invalid enrolment number, please try again');</script>";
                die($error);
            }
            else{
                student_details_response($enrolment, $program);
            }
        }
        elseif($id === 6){
            $project_type = htmlspecialchars($_POST["project"]);
            $p_type = htmlspecialchars($_POST["p_type"]);
            echo project_response($project_type, $p_type);
        }
        elseif($id === 8){
            $enrolment = validator(htmlspecialchars($_POST["eno"]), 1);
            $program = htmlspecialchars($_POST["program"]);
            if($enrolment === false){
                $error .= "<script>alert('Oops!! Looks like you entered an invalid enrolment number, please try again');</script>";
                die($error);
            }
            echo assignment_status_response($enrolment, $program);
        }
    }
    elseif(validator(htmlspecialchars($_POST["id"]), 2) === 5){
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            die("<script>alert('Invalid E-mail address, try again..!!');</script>");
        }
        echo subscription_response($email);
    }
    elseif(validator(htmlspecialchars($_POST["id"]), 2) === 7){
        update_projects_count(htmlspecialchars($_POST["project_id"]));
    }
    else{
        echo "<script>alert('Oops..!! Something went wrong, try again');</script>";
    }
?>