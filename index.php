<?php require(__DIR__.'/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TechTales 3.0
    </title>
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
    <div id="preloader">
    </div>
    <section id="hero">
      <div class="hero-container">
        <video autoplay loop muted poster="screenshot.jpg" id="video-container2">
          <source src="<?php echo URL ?>/static/bg.mp4" type="video/mp4">
        </video>
        <div class="hero-logo" style="margin-bottom:-40px;">
          <img class="hero-logo MUJ_BLUE" src="static/img/logo_tech.png" alt="" height="10%" width="10%">
        </div>
        <h1 class="MUJ_BLUE"> TechTALES
        </h1>
        <div class="section-title-divider">
        </div>
        <h2 class="MUJ_BLUE">The Techno-Cultural fest of Manipal  
          <span class="rotating">with coolest events,with 5 days of fun,with amazing Coding and Gaming,providing best Cryptic Challenge,with social performances and much more 
          </span>
        </h2>
        <div class="actions">
          <a href="<?php echo URL ?>/register" class="btn-get-started" style="text-align:center;">Register Now
          </a>
        </div>
      </div>
    </section>
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <a href="#hero">
            <img src="<?php echo URL ?>/static/img/logo.png" alt="" title="" />
            </img>
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
            <a href="<?php echo URL ?>/register">Register Now
            </a>
          </li>
          <?php if(false): ?>
          <li>
            <a href="<?php echo URL ?>/team">Team
            </a>
          </li>
          <?php endif; ?>
          <li>
            <a href="<?php echo URL ?>#contact">Contact Us
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <section id="about">
      <div class="container wow fadeInUp ">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title1 MUJ_BLUE">About TechTales
            </h3>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInRight">
        <div class="row">
          <div class="col-md-6 col-md-push-3 about-content">
            <img src="<?php echo URL ?>/static/img/about-img.jpg" class="img-responsive">
          </div>
        </div>
      </div>
    </section>
    <section id="about_rando">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title MUJ_BLUE" style="padding-top:50px;">About Randomize
            </h3>
            <div class="section-title-divider">
            </div>
            <p class="section-description MUJ_BLUE" style="font-size:17px;">The MUJ SCIT club ‘randomize();’ represents the student branch for our school, SCIT. ‘randomize();’ plans different events and activities for all the Departments in the college. These activities include research panels and discussions, group trips, study breaks, and other exciting events.
            </p>
            <p class="section-description MUJ_BLUE" style="font-size:17px;">First years will have a good time knowing their department, knowing their seniors, their faculty. Most of you might not be from Computer Science background so the club will help you to by solving your doubts outside the class or arranging lectures before sessional(s) and semester exams.
            </p>
            <p class="section-description MUJ_BLUE" style="font-size:17px;">The Second years will have a chance to help their juniors. Second years will have a little more free time than the rest so it will be up to them to help their juniors. We will try to bring in workshops, guest lectures, seminars and all other experiences, both technical and corporate and we expect you to take part in all.
            </p>
            <p class="section-description MUJ_BLUE" style="font-size:17px;">For Third years, we will be organizing some field trips to different companies, their offices their corporate programs their R&amp;D sections and some more, so that you guys have a taste of what to expect through CSE when you go out and face the real scenario. We will also try to conduct some lectures for our juniors. Apart from helping them out in their subjects, it will also help the third years to develop their communication skills, oration skills and other such things that helps out in interviews of internships and placements in next year.
            </p>
            <p class="section-description MUJ_BLUE" style="font-size:17px;">Finally The Fourth years, although they will have very less time to be active in this club, if they can, they take classes of third and second years, not only to build their communication skills but to brush up their skills, review their own concepts and be prepared for their placements in the best way they can.
            </p>
            <p class="section-description MUJ_BLUE" style="font-size:17px;">Apart from this we will have a Research wing in this club as well. All of our faculties who are active in research will let us know their active field and current projects along with students who have undertaken any project. Any student who is interested to take up work can approach them and be a part of their project. It will benefit both not only will the work divide but it’s going to help you build strong foundation and CV as well.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title MUJ_BLUE">Like us on Facebook for Updates
            </h3>
            <p class="subscribe-text MUJ_BLUE">Join us on our other social media handles too
            </p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="https://www.facebook.com/randomizeclub/">Visit Randomize();
            </a>
            <a class="subscribe-btn" href="https://www.facebook.com/TechTales12/">Visit TechTales
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title1 MUJ_BLUE">Events
            </h3>
            <div class="section-title-divider MUJ_BLUE">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <a href="<?php echo URL ?>/events/codemingle" class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/codemingle.jpg);">
              <div class="details">
                <h4>Event 1
                </h4>
                <span>Codemingle
                </span>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/fifa.jpeg);" href="<?php echo URL ?>/events/fifa">
              <div class="details">
                <h4 class="MUJ_BLUE">Event 2
                </h4>
                <span>FIFA
                </span>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/csgo.jpg);" href="<?php echo URL ?>/events/csgo">
              <div class="details">
                <h4>Event 3
                </h4>
                <span>CS:GO
                </span>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/minimilitia.jpg);" href="<?php echo URL ?>/events/minimiltia">
              <div class="details">
                <h4>Event 4
                </h4>
                <span>Mini Militia
                </span>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/roadredemption.jpg);" href="<?php echo URL ?>/events/roadredemption">
              <div class="details">
                <h4>Event 5
                </h4>
                <span>Road Redemption
                </span>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/holdem.jpg);" href="<?php echo URL ?>/events/holdemquiz">
              <div class="details">
                <h4>Event 6
                </h4>
                <span>Hold'em Quiz
                </span>
              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a class="portfolio-item" style="background-image: url(<?php echo URL ?>/static/img/treasurehunt.jpg);" href="<?php echo URL ?>/events/treasurehunt">
              <div class="details">
                <h4>Event 7
                </h4>
                <span>Treasure Hunt
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!--<section id="faq_techtales">
<div class="container wow fadeInUp">
<div class="row">
<div class="col-md-12">
<h3 class="section-title MUJ_BLUE" style="padding:20px;">Frequently Asked Questions</h3>
<div class="section-title-divider"></div>
</div>
</div>
</div>
<div class="container about-container wow fadeInUp">
<button class="accordion MUJ_BLUE">Question 1</button>
<div class="panel">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="accordion">Question 2</button>
<div class="panel">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<button class="accordion">Question 3</button>
<div class="panel">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>
</section>
-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title1 MUJ_BLUE">Contact Us
            </h3>
            <div class="section-title-divider">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-push-2">
            <div class="info">
              <div>
                <i class="fa fa-map-marker">
                </i>
                <p class="MUJ_BLUE">Manipal University Jaipur
                  <br>Dhemi Kalan
                </p>
              </div>
              <div>
                <i class="fa fa-envelope">
                </i>
                <p>jaipur.manipal.edu
                </p>
              </div>
              <div>
                <i class="fa fa-phone">
                </i>
                <p>9582111315
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-md-push-2">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!
              </div>
              <div id="errormessage">
              </div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation">
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">
                  </textarea>
                  <div class="validation">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
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
              <a href="https://jaipur.manipal.edu">  Manipal University Jaipur 
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
