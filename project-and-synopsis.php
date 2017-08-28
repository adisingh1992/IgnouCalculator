<?php
    session_start();
    $form_id = md5(rand());
    $_SESSION["form_id"] = $form_id;
?>
<?php include_once 'includes/header.php'; ?>
            <br/>
            <div class="row" id="project_tagline">
                <div class="col-md-2">
                    <ul class="list-group text-center">
                        <li class="list-group-item active cursor_pointer"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Latest</li>
                        <li class="list-group-item"><a href="http://www.ignou.ac.in/result.html" rel="nofollow" target="_blank">Term-End Result</a></li>
                        <li class="list-group-item"><a href="http://ignou.ac.in/userfiles/MCSP-060%202013%20Project%20Guidelines.pdf" rel="nofollow" target="_blank">Project Guidelines</a></li>
                    </ul>
                </div>
                <div class="col-md-5 text-justify">
                    <i class="fa fa-gears fa-3x pull-right"></i>
                    <blockquote class="text-muted">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <text>Stuck with a project assignment..!! IgnouCalculator provides you with a diverse range of projects in various technologies</text>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </blockquote>
                </div>
                <div class="col-md-4 text-justify">
                    <i class="fa fa-handshake-o fa-3x pull-right"></i>
                    <blockquote style="border: 0;" class="text-muted">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <text>Browse our library to download or make a request for a unique one, by filling the form below</text>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </blockquote>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-2">
                    <ul class="list-group text-center text-muted cursor_pointer">
                        <li class="list-group-item active" data-toggle="collapse" data-target="#projects_collapse">
                            <i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;Project Categories
                        </li>
                        <div id="projects_collapse" class="collapse in">
                            <li class="list-group-item" p_type="0" value="android" form_id="<?php echo $form_id; ?>">Android Projects</li>
                            <li class="list-group-item" p_type="0" value="asp" form_id="<?php echo $form_id; ?>">Asp.Net Projects</li>
                            <li class="list-group-item" p_type="0" value="c#" form_id="<?php echo $form_id; ?>">C# Projects</li>
                            <li class="list-group-item" p_type="0" value="c++" form_id="<?php echo $form_id; ?>">C/C++ Projects</li>
                            <li class="list-group-item" p_type="0" value="java" form_id="<?php echo $form_id; ?>">Java Projects</li>
                            <li class="list-group-item" p_type="0" value="php" form_id="<?php echo $form_id; ?>">PHP Projects</li>
                            <li class="list-group-item" p_type="0" value="vb" form_id="<?php echo $form_id; ?>">VB Projects</li>
                            <li class="list-group-item well" p_type="1" value="more" form_id="<?php echo $form_id; ?>">More Projects..</li>
                        </div>
                    </ul>
                </div>
                <div id="projects_info">
                    <div class="col-md-5 zoomin banner">
                        <img src="static/image/projects.png" alt="projects-image" class="img-responsive center-block" width="80%" height="80%">
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <blockquote class="text-justify text-muted">
                            Have a unique idea for a project which you want implemented?
                            IgnouCalculator team would be happy to assist you,
                            fill out the form and we will contact you in no time.
                        </blockquote>
                        <h3 class="text-center text-muted">Request a project&nbsp;<img src="static/image/pointer.gif" height="30px" alt="pointer"/></h3>
                        <form id="feedback_form" method="POST" autocomplete="off">
                            <div class="form-group feed_form">
                                <input type="text" id="username" class="form-control form_input" placeholder="Enter your name"/>
                            </div>
                            <div class="form-group feed_form">
                                <input type="email" id="email" class="form-control form_input" placeholder="Enter your e-mail address"/>
                            </div>
                            <div class="form-group feed_form">
                                <textarea class="form-control form_input" id="msg" rows="2" style="resize: none;" placeholder="Enter your project requirement"></textarea>
                            </div>
                            <div class="form-group feed_form form-inline text-center">
                                <img src="includes/captcha.php" id="img_captcha" alt="captcha"/>
                                <input type="text" placeholder="Enter the captcha code" id="captcha" class="form-control text-center form_input" style="margin-top: 5px;" size="25"/>
                            </div>
                            <div class="form-group feed_form text-center">
                                <span><strong id="feedback_result"></strong></span><br/>
                                <input type="text" id="form_id" value="<?php echo $form_id; ?>" hidden/>
                                <button type="submit" class="form-control form_input btn btn-primary btn-outline" style="line-height: 0; margin-top: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="projects_list"></div>
            </div>
<?php include_once 'includes/footer.php'; ?>