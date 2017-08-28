<?php
    session_start();
    $form_id = md5(rand());
    $_SESSION["form_id"] = $form_id;
?>
<?php include_once 'includes/header.php'; ?>
        <div class="clearfix"></div>
        <div class="row logo_area">
            <div class="col-md-3 col-md-offset-1">
                <img itemprop="image" src="static/image/logo.png" class="img-rounded img-responsive pull-left" alt="logo image"/>
            </div>
            <div class="col-md-5">
                <h2 class="animated pulse text-primary">Engineered To Perfection!</h2>
                <h4 class="text-justify">
                    Introducing an alternate to the official IGNOU web-portal,
                    with all the useful features you need and without the stuff you don't.
                </h4>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="marquee text-danger">
                    <?php $news = parse_ini_file("news.ini"); ?>
                    <span>
                        <a href="<?php echo $news["news1_link"]; ?>" rel="nofollow" target="_blank">&lt; <?php echo $news["news1"]; ?> &gt;</a>
                        <a href="<?php echo $news["news2_link"]; ?>" rel="nofollow" target="_blank">&lt; <?php echo $news["news2"]; ?> &gt;</a>
                        <a href="<?php echo $news["news3_link"]; ?>" rel="nofollow" target="_blank">&lt; <?php echo $news["news3"]; ?> &gt;</a>
                        <a href="<?php echo $news["news4_link"]; ?>" rel="nofollow" target="_blank">&lt; <?php echo $news["news4"]; ?> &gt;</a>
                    </span>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1 text-center panel panel-default" style="border: 0;">
                <div class="panel-heading" style="padding: 25px; border-radius: 20px 20px 0 0;">
                    <h3><strong><i class="fa fa-calculator "></i> Calculate Your Result</strong></h3>
                </div>
                <div class="panel-body" style="box-shadow: inset 0px 0px 10px #ddd; padding: 10px;">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="form-control form_input btn btn-primary animated rubberBand" style="line-height: 0; margin-top: 5px;" onclick="location.href='bca-grade-card.php';">BCA</button>
                        </div>
                        <div class="col-md-6">
                            <button class="form-control form_input btn btn-info animated rubberBand" style="line-height: 0; margin-top: 5px;" onclick="location.href='mca-grade-card.php';">MCA</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1 about_theory">
                <p class="text-muted text-justify about">&raquo;
                    Welcome to IgnouCalculator -- an information resource designed to help you get a more comprehensive analysis of your
                    grades. Click around and you will find a variety of analysis tools. There are calculators that can help you get a 
                    clearer picture of where you stand and where you're headed.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1 zoomin banner">
                <img src="static/image/quote.png" class="img-responsive" alt="education quote" style="margin: auto;"/>
            </div>
        </div>
        <div class="clearfix"></div>
        <br/>
        <div class="row">
            <div class="col-md-8 col-md-offset-1 about_theory">
                <p class="text-muted text-justify">&raquo;
                    This site also hosts a library from where you can download
                    official course material, assignments, question papers etc. Students can also access guidelines and solutions for
                    assignments and project works required to complete during a programme. And check back often because we're constantly
                    adding new material.
                </p>
                <br/>
                <p class="text-muted text-justify">&raquo;
                    If you have a specific question or want more information on any topic, just fill out the <a href="#feedback_form">feedback form</a> at the bottom
                    of the page and we will get back to you as soon as possible.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <h3 class="text-center text-muted">Dive Right In</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1 why_boxes" onclick="location.href='project-and-synopsis.php';">
                <h2 class="text-center why_box_image"><span class="fa fa-laptop fa-3x"></span></h2>
                <p class="text-center">Download Projects</p>
            </div>
            <div class="col-md-2 why_boxes" onclick="window.open('http://ibcasolvedassignment.blogspot.com/', '_blank');">
                <h2 class="text-center why_box_image"><span class="fa fa-book fa-3x"></span></h2>
                <p class="text-center">Download Solved Assignments</p>
            </div>
            <div class="col-md-2 why_boxes" data-toggle="modal" data-target="#myModal">
                <h2 class="text-center why_box_image"><span class="fa fa-calculator fa-3x"></span></h2>
                <p class="text-center">Percentage Calculator</p>
            </div>
            <div class="col-md-2 why_boxes" onclick="location.href='books.php';">
                <h2 class="text-center why_box_image"><span class="fa fa-download fa-3x"></span></h2>
                <p class="text-center">Course Material</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <!--Calculator Modal-->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center text-muted"><i class="fa fa-calculator"></i> Calculate BCA / MCA Percentage</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="form-control form_input btn btn-primary animated rubberBand" style="line-height: 0; margin-top: 5px;" onclick="location.href='bca-grade-card.php';">BCA</button>
                            </div>
                            <div class="col-md-6">
                                <button class="form-control form_input btn btn-info animated rubberBand" style="line-height: 0; margin-top: 5px;" onclick="location.href='mca-grade-card.php';">MCA</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-outline center-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 feedback_section">
                <h3 class="text-center text-muted">We value your thoughts!<br/>Share them with us</h3>
                <div class="feedback_form">
                    <form id="feedback_form" method="POST" autocomplete="off">
                        <div class="form-group feed_form">
                            <input type="text" id="username" class="form-control feed_input_style form_input" placeholder="Enter your name"/>
                        </div>
                        <div class="form-group feed_form">
                            <input type="email" id="email" class="form-control feed_input_style form_input" placeholder="Enter your e-mail address"/>
                        </div>
                        <div class="form-group feed_form">
                            <textarea class="form-control feed_input_style form_input" id="msg" rows="4" style="resize: none;" placeholder="Enter your feedback"></textarea>
                        </div>
                        <div class="form-group feed_form form-inline text-center">
                            <img src="includes/captcha.php" id="img_captcha" alt="captcha"/>
                            <input type="text" placeholder="Enter the captcha code" id="captcha" class="form-control text-center form_input" style="margin-top: 5px;" size="25"/>
                        </div>
                        <div class="form-group feed_form text-center form-inline">
                            <span><strong id="feedback_result"></strong></span><br/>
                            <input type="text" id="form_id" value="<?php echo $form_id; ?>" hidden/>
                            <button type="submit" class="form-control form_input btn btn-success btn-outline" style="line-height: 0; margin-top: 5px;">Submit</button>
                            <button type="reset" class="form-control form_input btn btn-danger btn-outline" style="line-height: 0; margin-top: 5px;">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
<?php include_once 'includes/footer.php'; ?>