<?php 
require(__DIR__."/../config.php");
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => URL."/api/events",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET"
));
$response = json_decode(curl_exec($curl),true);
$response = $response['data'];
curl_close($curl);

if (@$_POST['event']){
  $event = explode("-",$_POST['event']);
  $users = array();
  $users[] =  array("name" => $_POST['name'], "phone" => $_POST['phone'], "email" => $_POST['email'], "college" => $_POST['college']);
  $i = 2;
  while($i != 0){
    if (isset($_POST['part-'.$i.'-name'])){
      $users[] =  array("name" => $_POST['part-'.$i.'-name'], "phone" => $_POST['part-'.$i.'-phone'], "email" => $_POST['part-'.$i.'-email'], "college" => $_POST['college']);
      $i++;
    } else {
      $i = 0;
    }
  }
  $data = array("users" => $users, "leaderphone" => $_POST['phone'], "eventid" => $event[1], "teamname" => $_POST['teamname'] );
  $c = curl_init();
  curl_setopt_array($c, array(
      CURLOPT_URL => URL."/api/register",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($data),
      CURLOPT_HTTPHEADER => array('Content-Type: application/json','Content-Length: '.strlen(json_encode($data)))
  ));
  $result = curl_exec($c);
  $res = json_decode($result,true);
  if ($res['status'] == 200 && $res['data']['redirect_uri']){
    header('Location: '.$res['data']['redirect_uri']);
  } else {
    $err = "Some Error has Occured. Please Retry or Contact Us with error code tt-reg-".$res['status'].".";
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="MUJ_BLUE">Register | Techtales
    </title>
    <link href="<?php echo URL ?>/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo URL ?>/static/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="form-basic.css">
  </head>
  <body style="background: black; min-height: 100vh;">
    <header id="header">
      <div class="container" >
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
              <a href="<?php echo URL ?>#faq_techtales">FAQ
              </a>
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
    <div class="container" style="margin-top: 50px;">
      <form class="form-basic" method="post" action="">
        <div class="form-title-row">
          <h1 class="MUJ_BLUE"> Registration Form 
          </h1>
        </div>
        <?php if (@$err): ?>
        <div class="alert alert-danger">
          <?php echo @$err ?>
        </div>
        <?php endif; ?>
        <div class="form-row MUJ_BLUE">
          <label>
            <span class="MUJ_BLUE">Name*
            </span>
            <input type="text" name="name" required>
          </label>
        </div>
        <div class="form-row MUJ_BLUE">
          <label>
            <span class="MUJ_BLUE">Phone Number*
            </span>
            <input type="number" name="phone" required>
          </label>
        </div>
        <div class="form-row MUJ_BLUE">
          <label>
            <span class="MUJ_BLUE"> Email ID*
            </span>
            <input type="email" name="email" required>
          </label>
        </div>
        <div class="form-row MUJ_BLUE">
          <label>
            <span class="MUJ_BLUE"> College*
            </span>
            <input type="text" name="college" required>
          </label>
        </div>
        <div class="form-row">
          <label>
            <span class="MUJ_BLUE">Select Event*
            </span>
            <select name="event" onchange="setEvent(this.value)">
              <option class="MUJ_BLUE" selected></option>
              <?php foreach ($response as $event): ?>
              <option class="MUJ_BLUE" id="event-<?php echo $event['id']; ?>" value="event-<?php echo $event['id']; ?>" data-type="<?php echo $event['participationtype'] ?>" data-min="<?php echo $event['participationmin'] ?>" data-max="<?php echo $event['participationmax'] ?>">
                <?php echo $event['name'] ?>
              </option>
              <?php endforeach; ?>
            </select>
          </label>
        </div>
        <div class="team" style="display: none;">
        <h4>Team Details
        </h4>
        <div class="form-row">
          <label>
            <span class="MUJ_BLUE">Team Name
            </span>
            <input type="text" name="teamname">
          </label>
        </div>
        <div class="participant">
        </div>
        </div>
        <div class="form-row">
          <button type="submit" name="submit" value="submit" class="MUJ_BLUE">Submit Registration
          </button>
        </div>
      </form>
    </div>
    <script type="text/javascript" src="<?php echo URL ?>/static/js/jquery.min.js"></script>
    <script type="text/javascript">
      function setEvent(value){
        if (value !== "") {
          $(".team").show();
          var min = $("#"+value).attr('data-min');
          var max = $("#"+value).attr('data-max');
          var type = $("#"+value).attr('data-type');
          var html = "";
          var eventid = value.split("-");
          for (var i = 1 ; i < max ; i++){
            if (i < min) required = 'required';
            else required = '';
            html += '<div class="participant"><h4>Participant '+(i + 1)+'</h4><div class="form-row"><label><span class="MUJ_BLUE">Name</span><input type="text" name="part-'+(i+1)+'-name" id="part-'+(i+1)+'-name" '+required+'></label></div><div class="form-row"><label><span class="MUJ_BLUE">Phone</span><input type="number" name="part-'+(i+1)+'-phone" id="part-'+(i+1)+'-phone" '+required+'></label></div><div class="form-row"><label><span class="MUJ_BLUE">Email</span><input type="email" name="part-'+(i+1)+'-email" id="part-'+(i+1)+'-email" '+required+'></label></div></div>';
          }
          $(".participant").html(html);
        } else {
          $(".team").hide();
        }
      }
    </script>
  </body>
</html>
