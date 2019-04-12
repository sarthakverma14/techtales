<?php
	$msg = "Something went wrong.";
	if(isset($_GET['o']) && filter_var($_GET['o'], FILTER_VALIDATE_INT))
		$msg = "Your Payment has been confirmed.  <br> A copy of confirmation has been sent to your email address. <br> You will recieve an email soon on how to redeem your Bitcoins.";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<title>Techtales &bull; Payment Success</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#3F51B5">
	<meta name="msapplication-navbutton-color" content="#3F51B5">
	<meta name="apple-mobile-web-app-status-bar-style" content="#3F51B5">
	<style type="text/css">.error-page{padding: 15% 15px;text-align:center}h2{font-size:100px!important}@media (max-width:680px){.error-page{margin-top:20%}h2{font-size:50px!important}}</style>
</head>
<body>
	<div class="error-page">
	    <h2>Payment Success</h2>
	    <div class="error-details">
	        <h3><?php echo $msg; ?></h3>
	    </div>
	</div>
</body>
</html>