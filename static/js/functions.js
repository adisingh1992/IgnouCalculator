$(document).ajaxStart(function() {
    $('#loading').show();
});

$(document).ajaxStop(function() {
    $('#loading').hide();
});

$(document).ready(function(){
    get_data();
    get_student_list();
    get_student_data();
    feedback();
    subscribe();
    get_projects();
    set_projects_counter();
});

function get_data(){
    $("#grade_form").submit(function(event){
        event.preventDefault();
        var eno = $("#eno").val();
        var form_id = $("#form_id").val();
        var program = $("#program").val();
        var id = '1';
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {eno : eno, id : id, form_id : form_id, program : program},
            success: function(data){
                generate_table(program);
                validate_marks_data(data, eno);
            },
            error: function(){
                alert("Oops!! Something went wrong, Please try again.");
            }
        });
        $('#grade_form')[0].reset();
    });
}

function generate_table(program){
    $("#instructions").hide();
    $("#name").html("Name: ");
    $("#enum").html("Enrolment Number: ");
    if(program === "MCA"){
        var content = "<table class='table table-striped table-bordered text-center' style='font-size: 14px;'> <thead> <tr> <th>Code</th> <th>Course Title</th> <th>Assignment</th> <th>Lab 1</th> <th>Lab 2</th> <th>Lab 3</th> <th>Lab 4</th> <th>Term End Theory</th> <th>Status</th> <th>Assignment(@25%)</th> <th>Marks(@75%)</th> <th>Total</th> <th>Progress Bar</th> </tr></thead> <tbody> <tr> <td colspan=13><strong>Semester 1</strong></td></tr><tr> <td>MCS011</td><td>Problem Solving and Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS012</td><td>Computer Organization and Assembly language Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='2' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS013</td><td>Discrete Mathematics</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='3' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS014</td><td>Systems Analysis and Design</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='4' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS015</td><td>Communication Skills</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='5' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSL016</td><td>Internet Concepts and Web Design</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='6' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSL017</td><td>C and Assembly Language Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='7' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 2</strong></td></tr><tr> <td>MCS021</td><td>Data and File Structures</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='8' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS022</td><td>Operating System Concepts and Networking Management</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='9' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS023</td><td>Introduction to Database Management Systems</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='10' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS024</td><td>Object Oriented Technologies and Java Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='11' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSL025</td><td>Lab (based on MCS-021, 022, 023 & 024)</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='12' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 3</strong></td></tr><tr> <td>MCS031</td><td>Design and Analysis of Algorithms</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='13' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS032</td><td>Object Oriented Analysis and Design</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='14' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></td></tr><tr> <td>MCS033</td><td>Advanced Discrete Mathematics</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='15' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></td></tr><tr> <td>MCS034</td><td>Software Engineering </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='16' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></td></tr><tr> <td>MCS035</td><td>Accountancy and Financial Management</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='17' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></td></tr><tr> <td>MCSL036</td><td>Lab(based on MCS-032, 034 and 035)</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='18' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></td></tr><tr> <td colspan=13><strong>Semester 4</strong></td></tr><tr> <td>MCS041</td><td>Operating Systems</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='19' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS042</td><td>Data Communication and Computer Networks</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='20' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS043</td><td>Advanced Database Management Systems</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='21' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS044</td><td>Mini Project</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='22' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSL045</td><td>Lab(UNIX & Oracle)</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='23' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 5</strong></td></tr><tr> <td>MCS051</td><td>Advanced Internet Technologies</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='24' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS052</td><td>Principles of Management and Information Sytems</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='25' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS053</td><td>Computer Graphics and Multimedia</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='26' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSL054</td><td>Lab( based on MCS-051 & 053)</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='27' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSE003</td><td>Artificial Intelligence and Knowledge Management</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='28' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSE004</td><td>Numerical and Statistical Computing</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='29' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSE011</td><td>Parallel Computing</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='30' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 6</strong></td></tr><tr> <td>MCSP060</td><td>Project</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class='progress'> <div class='progress-bar progress-bar-striped active' id='31' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr><td colspan=6><strong>Final Marks:</strong></td><td colspan='4'><strong>Final Percentage:</strong></td><td colspan='3'><div class='progress'><div class='progress-bar progress-bar-striped progress-bar-success active' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr></tbody></table>";
        $("#data_table").html(content);
    }
    else if(program === "BCA"){
        var content = "<table class='table table-striped table-bordered text-center' style='font-size: 14px;'> <thead> <tr> <th>Code</th> <th>Course Title</th> <th>Asgn1</th> <th>Asgn2</th> <th>Asgn3</th> <th>Asgn4</th> <th>Term End Theory</th> <th>Term End Practical</th> <th>Status</th> <th>Assignment(@25%)</th> <th>Marks(@75%)</th> <th>Total</th> <th>Progress Bar</th> </tr></thead> <tbody> <tr> <td colspan=13><strong>Semester 1</strong></td></tr><tr> <td>FEG02</td><td>Foundation Course in English 2</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>ECO01</td><td>Business Organization</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS011</td><td>Computer Basics and PC Software</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS012</td><td>Basic Mathematics</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL013</td><td>Computer Basics and PC S/w Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 2</strong></td></tr><tr> <td>ECO02</td><td>Accountancy 1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS011</td><td>Problem Solving and Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS012</td><td>CO &amp; Assembly Lang Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS013</td><td>Discrete Mathematics</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS015</td><td>Communication Skills</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL021</td><td>C Language Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL022</td><td>Assembly Lang Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 3</strong></td></tr><tr> <td>MCS021</td><td>Data and File Structures</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS023</td><td>Introduction to Database Management System</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS014</td><td>System Analysis and Design</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS031</td><td>Programming in C++</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL032</td><td>C++ Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL033</td><td>Data and File Structure Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL034</td><td>DBMS Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 4</strong></td></tr><tr> <td>BCS040</td><td>Statistical Techniques</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS024</td><td>OO Techs and Java Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS041</td><td>Fundaments of Computer Networks</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS042</td><td>Intro to Algorithm Design</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCSL016</td><td>Internet Concepts &amp; Web Design</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL043</td><td>Java Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL044</td><td>Statistical Techniques Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL045</td><td>Algorithm Design Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 5</strong></td></tr><tr> <td>BCS051</td><td>Intro to S/w Engineering</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS052</td><td>Network Programming &amp; Administration</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS053</td><td>Web Programming</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS054</td><td>Numerical Techniques</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCS055</td><td>Business Communication</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL056</td><td>Network Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL057</td><td>Web Programming Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL058</td><td>Numerical Techniques Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=13><strong>Semester 6</strong></td></tr><tr> <td>BCS062</td><td>E-Commerce</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>MCS022</td><td>OS Concepts &amp; Networking Mgmt</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSL063</td><td>OS Concepts &amp; Networking Management Lab</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td>BCSP064</td><td>Project</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td> <div class='progress'> <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr><tr> <td colspan=6><strong>Final Marks:</strong></td><td colspan='4'><strong>Final Percentage:</strong></td><td colspan='3'> <div class='progress'> <div class='progress-bar progress-bar-striped progress-bar-success active' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div></div></td></tr></tbody> </table>";
        $("#data_table").html(content);
    }
}

function validate_marks_data(marks, eno){
    try{
        $.parseJSON(marks);
    }catch(error){
        $("#instructions").show();
        $("#name").html("");
        $("#enum").html("");
        $("#data_table").html(marks);
        return;
    }
    populate_table(JSON.parse(marks), eno);    
}

function subject_search(subject){
    var trs = $("tr");
    len = trs.length;
    for(x=2; x<len; x++){
        table_subject = trs[x].children[0].innerHTML;
        if(subject === table_subject){
            return x;
        }
    }
}

function populate_table(marks, eno){
    $("#name").html(marks[0][0]);
    $("#enum").html("Enrolment Number: "+eno);
    var trs = $("tr");
    data_rows = marks.length;
    for(i=2; i<data_rows-1; i++){
        key = subject_search((marks[i][0]));
        for(j=1; j<=10; j++){
            trs[key].children[j+1].innerHTML = marks[i][j];
        }
        trs[key].children[j + 1].children[0].children[0].style.width = marks[i][10] + "%";
        if(marks[i][10] > 40){
            trs[key].children[j + 1].children[0].children[0].className += " progress-bar-success";
        }
        else if(marks[i][10] < 35){
            trs[key].children[j + 1].children[0].children[0].className += " progress-bar-danger";
        }
        else if(marks[i][10] >= 35 && parseInt(marks[i][10]) <= 40){
            trs[key].children[j + 1].children[0].children[0].className += " progress-bar-warning";
        }
        if(trs[key].children[8].innerHTML === "Not Completed"){
            trs[key].children[j + 1].children[0].children[0].className = "progress-bar progress-bar-striped active progress-bar-danger";
        }
    }
    trs[trs.length - 1].children[0].innerHTML += marks[data_rows - 1][0];
    trs[trs.length - 1].children[1].innerHTML += (((marks[data_rows - 1][0]) / ((data_rows - 3) * 100) * 100).toFixed(2)+"%");
    trs[trs.length - 1].children[2].children[0].children[0].style.width = (((marks[data_rows - 1][0]) / ((data_rows - 3) * 100) * 100)+"%");
    if(trs[2].children[2].innerHTML === ""){
        for(i=1; i<=14; i++){
            trs[i].style.display = 'none';
        }
    }
}

function get_student_list(){
    $("#list_form").submit(function(event){
        event.preventDefault();
        var ccode = $("#study_center_code").val();
        var batch = $("#batch_year").val();
        var form_id = $("#form_id").val();
        var id = '2';
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {ccode : ccode, batch : batch, id : id, form_id : form_id},
            success: function(data){
                process_student_list(data);
            },
            error: function(){
                alert("Oops!! Something went wrong, Please try again.");
            }
        });
    });
}

function process_student_list(data){
    list = $("#list");
    try{
        $.parseJSON(data);
    }catch(error){
        list.html(data);
        return;
    }
    data = JSON.parse(data);
    list.show();
    list.html(data);
}

function get_student_data(){
    $("#details_form").submit(function(event){
        event.preventDefault();
        var eno = $("#eno").val();
        var program = $("#program").val();
        var form_id = $("#form_id").val();
        var id = '4';
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {eno : eno, program : program, id : id, form_id : form_id},
            success: function(data){
                $("#details").html(data);
            },
            error: function(){
                alert("Oops!! Something went wrong, Please try again.");
            }
        });
        $('#details_form')[0].reset();
    });
}

function feedback(){
    $("#feedback_form").submit(function(event){
        event.preventDefault();
        var username = $("#username").val();
        var email = $("#email").val();
        var msg = $("#msg").val();
        var captcha = $("#captcha").val();
        var form_id = $("#form_id").val();
        var id = '3';
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {username : username, email : email, msg : msg, captcha : captcha, id : id, form_id : form_id},
            success: function(data){
                $("#feedback_result").html(data);
            },
            error: function(){
                alert("Oops!! Something went wrong, Please try again.");
            }
        });
        $('#feedback_form')[0].reset();
    });
}

function subscribe(){
    $("#subscribe_form").submit(function(event){
        event.preventDefault();
        var email = $("#email_id").val();
        var id = '5';
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {email : email, id : id},
            success: function(data){
                $("#subscribe_form").append(data);
            },
            error: function(){
                alert("Oops!! Something went wrong, Please try again.");
            }
        });
        $('#subscribe_form')[0].reset();
    });
}

function get_projects(){
    $("#projects_collapse li").on("click", function(event){
        event.preventDefault();
        var project = $(this).attr("value");
        var form_id = $(this).attr("form_id");
        var p_type = $(this).attr("p_type");
        var id = "6";
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {id : id, project : project, form_id : form_id, p_type : p_type},
            success: function(data){
                $("#project_tagline").hide();
                $("#projects_info").hide();
                $("#projects_list").html(data);
            },
            error: function(){
                alert("Oops!! Something went wrong, Please try again.");
            }
        });
    });
}

function set_projects_counter(){
    $("#projects_list").on("click", "#download", function(event){
        event.preventDefault();
        var project_id = $(this).attr("value");
        var url = $(this).attr("href");
        var id = "7";
        $.ajax({
        type: 'POST',
            url: 'includes/process.php',
            data: {id : id, project_id : project_id},
            success: function(){
                window.location.href = "projects/"+url;
            },
            error: function(){
            }
        });
    });
}