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
                            <input type="text" id="program" value="BCA" hidden/>
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
                                <th>Asgn1</th>
                                <th>Asgn2</th>
                                <th>Asgn3</th>
                                <th>Asgn4</th>
                                <th>Term End Theory</th>
                                <th>Term End Practical</th>
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
                                <td>FEG02</td>
                                <td>Foundation Course in English 2</td>
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
                                <td>ECO01</td>
                                <td>Business Organization</td>
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
                                <td>BCS011</td>
                                <td>Computer Basics and PC Software</td>
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
                                <td>BCS012</td>
                                <td>Basic Mathematics</td>
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
                                <td>BCSL013</td>
                                <td>Computer Basics and PC S/w Lab</td>
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
                                <td colspan=13><strong>Semester 2</strong></td>
                            </tr>
                            <tr>
                                <td>ECO02</td>
                                <td>Accountancy 1</td>
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
                                <td>CO &amp; Assembly Lang Programming</td>
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
                                        <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
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
                                        <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>BCSL021</td>
                                <td>C Language Programming Lab</td>
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
                                <td>BCSL022</td>
                                <td>Assembly Lang Programming Lab</td>
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
                                <td colspan=13><strong>Semester 3</strong></td>
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
                                        <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>MCS023</td>
                                <td>Introduction to Database Management System</td>
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
                                <td>MCS014</td>
                                <td>System Analysis and Design</td>
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
                                <td>BCS031</td>
                                <td>Programming in C++</td>
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
                                <td>BCSL032</td>
                                <td>C++ Programming Lab</td>
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
                                <td>BCSL033</td>
                                <td>Data and File Structure Lab</td>
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
                                <td>BCSL034</td>
                                <td>DBMS Lab</td>
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
                                <td colspan=13><strong>Semester 4</strong></td>
                            </tr>
                            <tr>
                                <td>BCS040</td>
                                <td>Statistical Techniques</td>
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
                                <td>MCS024</td>
                                <td>OO Techs and Java Programming</td>
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
                                <td>BCS041</td>
                                <td>Fundaments of Computer Networks</td>
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
                                <td>BCS042</td>
                                <td>Intro to Algorithm Design</td>
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
                                <td>MCSL016</td>
                                <td>Internet Concepts &amp; Web Design</td>
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
                                <td>BCSL043</td>
                                <td>Java Programming Lab</td>
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
                                <td>BCSL044</td>
                                <td>Statistical Techniques Lab</td>
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
                                <td>BCSL045</td>
                                <td>Algorithm Design Lab</td>
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
                                <td colspan=13><strong>Semester 5</strong></td>
                            </tr>
                            <tr>
                                <td>BCS051</td>
                                <td>Intro to S/w Engineering</td>
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
                                <td>BCS052</td>
                                <td>Network Programming &amp; Administration</td>
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
                                <td>BCS053</td>
                                <td>Web Programming</td>
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
                                <td>BCS054</td>
                                <td>Numerical Techniques</td>
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
                                <td>BCS055</td>
                                <td>Business Communication</td>
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
                                <td>BCSL056</td>
                                <td>Network Programming Lab</td>
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
                                <td>BCSL057</td>
                                <td>Web Programming Lab</td>
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
                                <td>BCSL058</td>
                                <td>Numerical Techniques Lab</td>
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
                                <td colspan=13><strong>Semester 6</strong></td>
                            </tr>
                            <tr>
                                <td>BCS062</td>
                                <td>E-Commerce</td>
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
                                <td>MCS022</td>
                                <td>OS Concepts &amp; Networking Mgmt</td>
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
                                <td>BCSL063</td>
                                <td>OS Concepts &amp; Networking Management Lab</td>
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
                                <td>BCSP064</td>
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
                                        <div class='progress-bar progress-bar-striped active' id='1' role='progressbar' aria-valuemin='0' aria-valuemax='100' style=''></div>
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