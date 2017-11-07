<?php
    function counter(){
        include_once "analytics/analytics-api.php";
        return str_split($pageviews);
    }
?>
            <div class="clearfix"></div>
            <footer class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default footer_panel">
                            <p class="text-center text-justify text-muted">
                                Want updates, wanna know what your very own university's been upto, right in your inbox? Hop on the list!
                            </p>
                            <form method="POST" id="subscribe_form" autocomplete="off" class="form-inline">
                                <div class="form-group">
                                    <input type="email" id="email_id" class="form-control form_input" size="50" placeholder="Enter your e-mail address"/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control form_input btn btn-primary btn-outline" style="line-height: 0; margin-top: 10px;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top: 5%;">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul class="social-network social-circle">
                                    <li>
                                        <a href="https://www.facebook.com/ignoucalculator" class="icoFacebook" title="Facebook" rel="nofollow" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/IgnouCalculator" class="icoTwitter" title="Twitter" rel="nofollow" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/ignoucalculator/" class="icoInstagram" title="Instagram" rel="nofollow" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/+AdityaSingh1992" class="icoGoogle" title="Google +" rel="nofollow" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/aditya-singh-a4a1889a" class="icoLinkedin" title="Linkedin" rel="nofollow" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-md-12 text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="index.php"><span class="fa fa-home" aria-hidden="true"></span>  Home</a></li>
                                    <li class="list-inline-item"><a href="team.php"><span class="fa fa-users" aria-hidden="true"></span>  Team</a></li>
                                    <li class="list-inline-item"><a href="disclaimer.php"><span class="fa fa-pencil-square-o" aria-hidden="true"></span>  Disclaimer</a></li>
                                    <li class="list-inline-item"><a href="faq.php"><span class="fa fa-question-circle-o" aria-hidden="true"></span>  FAQ</a></li>
                                    <li class="list-inline-item"><a href="terms-and-conditions.php"><span class="fa fa-cog" aria-hidden="true"></span> T&C </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center footer-logo zoomin banner text-muted">
                        <a href="http://www.ignou.ac.in" rel="nofollow" target="_blank">
                            <h4 style="margin: 30px 0 20px 0;">Official Resource <span class="glyphicon glyphicon-new-window"></span></h4>
                        </a>
                        <div class="well" style="width: 90%; margin: auto;">
                            <h4>Share with your friends</h4>
                            <div class="fb-share-button" data-href="https://www.facebook.com/ignoucalculator/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fignoucalculator%2F&amp;src=sdkpreparse">Share</a></div>
                        </div>
                        <h4>Unique Visitors</h4>
                        <div>
                            <?php
                                $count = counter();
                                foreach($count as $c){
                                    echo "<span id='counter' class='animated cursor_pointer'>$c</span>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row footer-row">
                    <div class="col-md-12 text-center">
                        <strong onclick="location.href='team.php';" style="cursor: pointer;">Developed By <span class="fa fa-spinner fa-spin"></span><cite class="text-danger"> Team SCORPION</cite></strong>
                        <br/>
                        <small class="text-muted">Copyright &copy; <?php echo date("Y"); ?> IgnouCalculator</small>
                    </div>
                </div>
                <div class="clearfix"></div>
            </footer>
            <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
            <meta itemprop="name" content="Team Scorpion"></span>
            <meta itemprop="name" content="IgnouCalculator">
            <meta itemprop="applicationCategory" content="Education Software">
            <meta itemprop="url" content="https://www.ignoucalculator.com/">
            <span itemprop="author" itemscope itemtype="http://schema.org/Person">
            <meta itemprop="name" content="Team Scorpion"></span>
            <meta itemprop="datePublished" content="2017-08-17">
        </div>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="static/js/functions.js"></script>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>