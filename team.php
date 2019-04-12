<?php 
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TechTales 3.0</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo URL ?>/manifest.json">
    <link rel="mask-icon" href="<?php echo URL ?>/safari-pinned-tab.svg" color="#788285">
    <meta name="apple-mobile-web-app-title" content="Tech Tales">
    <meta name="application-name" content="Tech Tales">
    <meta name="theme-color" content="#ffffff">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/style.css" rel="stylesheet">
    <style>
    button.accordion {
        backgrzound-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    button.accordion.active,
    button.accordion:hover {
        background-color: #ccc;
    }

    div.panel {
        padding: 0 18px;
        background-color: #0aa7ce;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    </style>
  </head>
  <body>
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <a href="#hero">
            <img src="<?php echo URL ?>/static/img/logo.png" alt="" title="" />
          </a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active">
              <a href="<?php echo URL ?>#hero">Home
              </a>
            </li>
            <li>
              <a href="<?php echo URL ?>#about">About Us
              </a>
            </li>
            <li>
              <a href="<?php echo URL ?>#about_rando">Randomize
              </a>
            </li>
            <li class="menu-has-children">
              <a href="<?php echo URL ?>#events">Events
              </a>
              <ul>
                <li>
                  <a href="<?php echo URL ?>/events/codemingle">Codemingle
                  </a>
                </li>
                <li>
                  <a href="<?php echo URL ?>/events/fifa">FIFA
                  </a>
                </li>
                <li>
                  <a href="<?php echo URL ?>/events/csgo">CS:GO
                  </a>
                </li>
                <li>
                  <a href="<?php echo URL ?>/events/minimilitia">Mini Militia
                  </a>
                </li>
                <li>
                  <a href="<?php echo URL ?>/events/roadredemption">Road Redemption
                  </a>
                </li>
                <li>
                  <a href="<?php echo URL ?>/events/holdemquiz">Hold'em Quiz
                  </a>
                </li>
                <li>
                  <a href="<?php echo URL ?>/events/treasurehunt">Treasure Hunt
                  </a>
                </li>
              </ul>
            </li>
           
            <li>
              <a href="<?php echo URL ?>/team">Team
              </a>
            </li>
            <li>
              <a href="<?php echo URL ?>#contact">Contact Us
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="container">
      <video autoplay loop muted id="video-container2" style="opacity: 0.7;">
        <source src="<?php echo URL ?>/static/vid_team.mp4" type="video/mp4">
      </video>
      <div class="row">
        <div class="heading-title text-center">
          <h3 class="text-uppercase" style="padding:30px;color:white;">Our TEAM 
          </h3>
          <p class="p-top-30 half-txt">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. 
          </p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="team-member">
            <div class="team-img">
              <img src="<?php echo URL ?>/static/img/abhinav.jpg" alt="team member" class="img-responsive">
            </div>
            <div class="team-hover">
              <div class="desk">
                <h4>Hi There !
                </h4>
                <p>I love to introduce myself as a hardcore Web Designer.
                </p>
              </div>
              <div class="s-link">
                <a href="#">
                  <i class="fa fa-facebook">
                  </i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter">
                  </i>
                </a>
                <a href="#">
                  <i class="fa fa-google-plus">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="team-title">
            <h5>Abhinav Dhiman
            </h5>
            <span>Executive Committee in WEB DEV
            </span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="team-member">
            <div class="team-img">
              <img src="<?php echo URL ?>/static/img/bhushan.jpg" alt="team member" class="img-responsive">
            </div>
            <div class="team-hover">
              <div class="desk">
                <h4>Hello World
                </h4>
                <p>Will add later
                </p>
              </div>
              <div class="s-link">
                <a href="#">
                  <i class="fa fa-facebook">
                  </i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter">
                  </i>
                </a>
                <a href="#">
                  <i class="fa fa-google-plus">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="team-title">
            <h5>Vashisth Bhushan
            </h5>
            <span>Core Committee in Web Dev
            </span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="team-member">
            <div class="team-img">
              <img src="<?php echo URL ?>/static/img/sarthak.jpg" alt="team member" class="img-responsive">
            </div>
            <div class="team-hover">
              <div class="desk">
                <h4>Hello
                </h4>
                <p>I love to introduce myself as a hardcore Web Designer.
                </p>
              </div>
              <div class="s-link">
                <a href="#">
                  <i class="fa fa-facebook">
                  </i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter">
                  </i>
                </a>
                <a href="#">
                  <i class="fa fa-google-plus">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="team-title">
            <h5>Sarthak Verma
            </h5>
            <span>Core Committee in Web Dev
            </span>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright 
              <strong>TechTales
              </strong>
              <I>3.0
              </I>. All Rights Reserved
            </div>
            <div class="credits">
              Manipal University Jaipur 
              <a href="https://jaipur.manipal.edu">MUJ
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top">
      <i class="fa fa-chevron-up">
      </i>
    </a>
    <script src="<?php echo URL ?>/static/js/jquery.min.js">
    </script>
    <script src="<?php echo URL ?>/static/js/bootstrap.min.js">
    </script>
    <script src="<?php echo URL ?>/static/js/hoverIntent.js">
    </script>
    <script src="<?php echo URL ?>/static/js/superfish.min.js">
    </script>
    <script src="<?php echo URL ?>/static/js/morphext.min.js">
    </script>
    <script src="<?php echo URL ?>/static/js/wow.min.js">
    </script>
    <script src="<?php echo URL ?>/static/js/sticky.js">
    </script>
    <script src="<?php echo URL ?>/static/js/easing.min.js">
    </script>
    <script src="<?php echo URL ?>/static/js/custom.js">
    </script>
  </body>
</html>
