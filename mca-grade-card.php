<?php
    session_start();
    $form_id = md5(rand());
    $_SESSION["form_id"] = $form_id;
?>
<?php include_once 'includes/header.php'; ?>
            <div class="row mca_row">
                <div class="col-md-8 col-md-offset-1">
                    <form class="form-inline text-center myform form-inline" role="search" autocomplete="off" id="grade_form" method="POST">
                        <div class="form-group col-md-8 col-md-offset-1">
                            <input type="text" class="form-control text-center" placeholder="Enter Enrolment Number" name="eno" id="eno" required="true" size="40" style="border:1px solid gray !important;border-radius: 5px;font-family: cusive !important;margin-top: 14px;"/>
                            <input type="text" id="form_id" value="<?php echo $form_id; ?>" hidden/>
                            <input type="text" id="program" value="MCA" hidden/>
                            <button type="submit" class="btn btn-success form-control my-button" style="margin-top: 14px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <h4 id="name" style="font-weight: bold;">Name: </h4>
                    <h4 id="enum" style="font-weight: bold;">Enrolment Number: </h4>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12" id="data_table">
                    <table class='table table-striped table-bordered text-center' style='font-size: 14px;'>
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Course Title</th>
                                <th>Assignment</th>
                                <th>Lab 1</th>
                                <th>Lab 2</th>
                                <th>Lab 3</th>
                                <th>Lab 4</th>
                                <th>Term End Theory</th>
                                <th>Status</th>
                                <th>Assignment(@25%)</th>
                                <th>Marks(@75%)</th>
                                <th>Total</th>
                                <th>Progress Bar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan=13><strong>Semester 1</strong></td>
                            </tr>
                            <tr>
                                <td>MCS011</td>
                                <td>Problem Solving and Programming</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS012</td>
                                <td>Computer Organization and Assembly language Programming</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='2' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS013</td>
                                <td>Discrete Mathematics</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='3' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS014</td>
                                <td>Systems Analysis and Design</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='4' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS015</td>
                                <td>Communication Skills</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='5' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSL016</td>
                                <td>Internet Concepts and Web Design</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='6' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSL017</td>
                                <td>C and Assembly Language Programming Lab</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='7' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=13><strong>Semester 2</strong></td>
                            </tr>
                            <tr>
                                <td>MCS021</td>
                                <td>Data and File Structures</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='8' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS022</td>
                                <td>Operating System Concepts and Networking Management</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='9' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS023</td>
                                <td>Introduction to Database Management Systems</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='10' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS024</td>
                                <td>Object Oriented Technologies and Java Programming</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='11' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSL025</td>
                                <td>Lab (based on MCS-021, 022, 023 & 024)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='12' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=13><strong>Semester 3</strong></td>
                            </tr>
                            <tr>
                                <td>MCS031</td>
                                <td>Design and Analysis of Algorithms</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='13' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS032</td>
                                <td>Object Oriented Analysis and Design</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='14' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS033</td>
                                <td>Advanced Discrete Mathematics</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='15' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS034</td>
                                <td>Software Engineering </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='16' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS035</td>
                                <td>Accountancy and Financial Management</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='17' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSL036</td>
                                <td>Lab(based on MCS-032, 034 and 035)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='18' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=13><strong>Semester 4</strong></td>
                            </tr>
                            <tr>
                                <td>MCS041</td>
                                <td>Operating Systems</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='19' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS042</td>
                                <td>Data Communication and Computer Networks</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='20' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS043</td>
                                <td>Advanced Database Management Systems</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='21' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS044</td>
                                <td>Mini Project</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='22' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSL045</td>
                                <td>Lab(UNIX & Oracle)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='23' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=13><strong>Semester 5</strong></td>
                            </tr>
                            <tr>
                                <td>MCS051</td>
                                <td>Advanced Internet Technologies</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='24' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS052</td>
                                <td>Principles of Management and Information Sytems</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='25' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS053</td>
                                <td>Computer Graphics and Multimedia</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='26' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSL054</td>
                                <td>Lab( based on MCS-051 & 053)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='27' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSE003</td>
                                <td>Artificial Intelligence and Knowledge Management</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='28' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSE004</td>
                                <td>Numerical and Statistical Computing</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='29' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCSE011</td>
                                <td>Parallel Computing</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='30' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=13><strong>Semester 6</strong></td>
                            </tr>
                            <tr>
                                <td>MCSP060</td>
                                <td>Project</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped active' id='31' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=6><strong>Final Marks:</strong></td>
                                <td colspan='4'><strong>Final Percentage:</strong></td>
                                <td colspan='3'>
                                    <div class='progress'>
                                        <div class='progress-bar progress-bar-striped progress-bar-success active' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<?php include_once 'includes/footer.php'; ?>