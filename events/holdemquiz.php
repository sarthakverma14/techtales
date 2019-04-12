<?php require(__DIR__.'/../config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TechTales | Hold'em Quiz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo URL ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo URL ?>/safari-pinned-tab.svg" color="#788285">
    <meta name="apple-mobile-web-app-title" content="Tech Tales">
    <meta name="application-name" content="Tech Tales">
    <meta name="theme-color" content="#ffffff">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="<?php echo URL ?>/static/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URL ?>/static/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo URL ?>/static/css/perfect-scrollbar-0.css">
    <link rel="stylesheet" href="<?php echo URL ?>/static/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo URL ?>/static/css/style-events.css">
    <link rel="stylesheet" href="<?php echo URL ?>/static/css/default.css">
</head>
<body>
<div id="wrapper">
    <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>
    <div id="sidebar">
        <div id="main-nav">
            <div id="nav-container">
                <div id="profile" class="clearfix">
                    <a href="">
                        <img src="<?php echo URL ?>/static/img/logo_tech.png" style="width:50px;"/>
                    </a>
                    <div class="title">
                        <h2>Hold'em Quiz</h2>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>">
                            <div class="text">Home</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li class="currentmenu">
                        <a href="<?php echo URL ?>/events/codemingle">
                            <div class="text">Codemingle</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>/events/csgo">
                            <div class="text">CS:GO</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>/events/fifa">
                            <div class="text">FIFA</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>/events/holdemquiz">
                            <div class="text">Hold'em Quiz</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>/events/minimiltia">
                            <div class="text">Mini Militia</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>/events/roadredemption">
                            <div class="text">Road Redemption</div>
                        </a>
                    </li>
                </ul>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo URL ?>/events/treasurehunt">
                            <div class="text">Treasure Hunt</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="main">
        <video autoplay loop muted id="video-container2">
            <source src="<?php echo URL ?>/static/bg.mp4" type="video/mp4">
        </video>
        <div id="radiance" class="page home" data-pos="home">
            <div class="pageheader">
                <div class="section-container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                        </div>
                        <div class="clearfix visible-sm visible-xs"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagecontents">
            <div class="section-container">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <div class="title text-center">
                            <h3>Hold'em Quiz</h3>
                        </div>
                        <ul class="timeline">
                            <li>
                                <div class="date">RULES</div>
                                <div class="circle"></div>
                                <div class="data">
                                    <div class="subject">Following are the rules - </div>
                                    <div class="text row">
                                        <div class="col-md-12">
                                            <ul>
                                                <li>No. of participants: 2-4 in a team.</li>
                                                <li>Number of rounds:  3+tie breakers, if needed.</li>
                                                <li>Number of coins handed over at first: 5000 per team.</li>
                                                <li>Maximum bid allowed per question: 1500 ( all-in for last 3 questions).</li>
                                                <li>The rounds will be as follows:<br>
                                                    1. First round:  1 member from each team has to sit in-front of the rest of them, without the other teammate(s) in sight. The teammate sitting in front would see the question and make a bid on it, guessing if his/her teammates will be able to answer the question or not.
                                                    <br>2. Second round (top 60% teams): All teammates will sit together and make a bid on the question before they see it; they will be informed ONLY about the genre of the question in advance.
                                                    <br>3. Third round (top 5 teams): Open-to-all questions will be presented before all the teams, all the teams will have the option to either bid or not bid at the question. The teams bidding would have to specify their bids before they see the question and then the questions will be revealed. All the teams will have to write their answers on a piece of paper and submit it. The teams who did not bid anything for the question will not get a chance to answer it. The last 3 questions allow the teams to bid till the maximum value they have i.e. all-in.</li>
                                            </ul><br><br>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date">FEES</div>
                                <div class="circle"></div>
                                <div class="data">
                                    <div class="subject">
                                        Registration Fees: Rs 300/team
                                    </div>
                                    <div class="text row">
                                        <div class="col-md-12">
                                            Registration Fees: Rs 300/participant
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date">CO-ORDINATORS</div>
                                <div class="circle"></div>
                                <div class="data">
                                    <div class="subject">The co-ordinators for this event are - </div>
                                    <div class="text row">
                                        <div class="col-md-12">
                                            Coordinators - Anshul Sahu(8377822741)<br>
                                            Kavleen Sabharwal(8582807713)<br>
                                            Muskan Sharma(8017761446)<br>
                                            Siddharth Jain(9312875486)
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date">Time</div>
                                <div class="circle"></div>
                                <div class="data">
                                    <div class="subject">Timing is</div>
                                    <div class="text row">
                                        <div class="col-md-12">
                                            9-12am and 1-3pm on 18th November
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date">Venue</div>
                                <div class="circle"></div>
                                <div class="data">
                                    <div class="subject">Venue is</div>
                                    <div class="text row">
                                        <div class="col-md-12">
                                            Room No. 327 and 328<br>
                                            Academic Block 1
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="pagefooter">
        </div>
    </div>
    <div id="overlay"></div>
</div>
</div>
</body>
<script type="text/javascript" src="<?php echo URL ?>/static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL ?>/static/js/TweenMax.js"></script>
<script type="text/javascript" src="<?php echo URL ?>/static/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo URL ?>/static/js/events.js"></script>
</html>
