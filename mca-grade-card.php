<?php
    session_start();
    $form_id = md5(rand());
    $_SESSION["form_id"] = $form_id;
?>
<?php include_once 'includes/header.php'; ?>
            <div class="row">
                <div class="col-md-12 text-center text-muted">
                    <h3>MCA Grade Card</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <form class="form-inline text-center myform form-inline" role="search" autocomplete="off" id="grade_form" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control text-center form_input" placeholder="Enter Enrolment Number" name="eno" id="eno" required="true" size="40" style="margin-top: 10px; border:1px solid gray !important;border-radius: 5px;"/>
                            <input type="text" id="form_id" value="<?php echo $form_id; ?>" hidden/>
                            <input type="text" id="program" value="MCA" hidden/>
                            <button type="submit" class="form-control form_input btn btn-primary btn-outline" style="line-height: 0; margin-top: 10px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row" id="instructions" style="margin-top: 30px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">INSTRUCTIONS</div>
                        <div class="panel-body text-justify">
                            <ul class="list-group">
                                <li class="list-group-item">Welcome to MCA grade card and percentage calculator.</li>
                                <li class="list-group-item">It allows you to calculate your percentage in just one easy step.</li>
                                <li class="list-group-item">Enter your enrolment number in the form above and press the 'Submit' button.</li>
                                <li class="list-group-item">In few moments, your percentage and total marks will be displayed here.</li>
                            </ul>
                        </div>
                        <div class="panel-footer text-justify">
                            <strong>Note: </strong>
                            Displaying of results could take some time based on server load and traffic,
                            Do not refresh the page in the meantime.
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 id="name" style="font-weight: bold;"></h4>
                    <h4 id="enum" style="font-weight: bold;"></h4>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12" id="data_table"></div>
            </div>
            <meta itemprop="name" content="MCA Percentage Calculator">
            <meta itemprop="url" content="https://www.ignoucalculator.com/mca-grade-card">
<?php include_once 'includes/footer.php'; ?>