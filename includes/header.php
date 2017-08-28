<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IGNOU CALCULATOR</title>
        <!--base href="http://www.ignoucalculator.com/"-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IgnouCalculator -- an information resource designed to help you get a more comprehensive analysis of your grades.">
        <meta name="keywords" content="IGNOU, BCA, MCA, calculator, grade card">
        <meta name="author" content="Scorpion">
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="76x76" href="static/image/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="static/image/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="static/image/favicon/favicon-16x16.png">
        <link rel="manifest" href="static/image/favicon/manifest.json">
        <link rel="mask-icon" href="static/image/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="static/image/favicon/favicon.ico">
        <meta name="msapplication-config" content="static/image/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!-- css links -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all"/>
        <link rel="stylesheet" href="static/css/style.css" type="text/css" media="all"/>
    </head>
    <body>
        <div class="loading" id="loading"></div>
        <div itemscope itemtype="https://schema.org/SoftwareApplication" class="container-fluid">
            <nav class="mynavbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">IgnouCalculator</a>
                        <div class="navbar-header">
                            <button type="button" data-target="#mynav" data-toggle="collapse" class="navbar-toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                    <div id="mynav" class="collapse navbar-collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Percentage Calculator<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li ><a href="bca-grade-card.php"><span class="fa fa-graduation-cap" aria-hidden="true"></span>&nbsp;&nbsp;BCA</a></li>
                                    <li ><a href="mca-grade-card.php"><span class="fa fa-mortar-board" aria-hidden="true"></span>&nbsp;&nbsp;MCA</a></li>
                                </ul>
                            </li>
                            <li><a href="http://ibcasolvedassignment.blogspot.com/" rel="nofollow" target="_blank">Solved Assignments</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student Zone<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li ><a href="student-details.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;&nbsp;Student Details</a></li>
                                    <li ><a href="student-list.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Student List</a></li>
                                    <li ><a href="question-papers.php"><span class="fa fa-question-circle-o" aria-hidden="true"></span>&nbsp;&nbsp;Question Papers</a></li>   
                                    <li ><a href="books.php"><span class="fa fa-book" aria-hidden="true"></span>&nbsp;&nbsp;Ignou Books</a></li>
                                    <li ><a href="https://webservices.ignou.ac.in/assignments/" rel="nofollow" target="_blank"><span class="fa fa-download" aria-hidden="true"></span>&nbsp;&nbsp;Assignments</a></li>
                                </ul>
                            </li>
                            <li><a href="project-and-synopsis.php">Project Report & Synopsis</a></li>
                        </ul>
                    </div>
                </div>
            </nav>