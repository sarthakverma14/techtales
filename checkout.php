<?php

$oid = filter_var(@$_GET['oid'],FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[a-zA-Z0-9]+/")));

if(!$oid) die("Something went wrong.");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://techtales.xyz/api/THEwsRzrqlUaWBDw/".$oid,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET"
));

$response = json_decode(curl_exec($curl),true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  print_r($err);
  echo "Some Error Has Occured. Please Try Again.";
  exit;
}
if ($response['status'] == 200 && $response['data']['id']){
	if ($response['data']['amount'] == 0){
		require __DIR__.'/api/src/autoload.php';
		(new register())->updatePaymentStatus($response['data']['id'],"FREE EVENT");
    	echo "<script>window.location = 'https://techtales.xyz/success?o=" . $response['data']['id'] . "';</script>";
    	exit;
	}
  	header("Location: https://atlaslabs.xyz/techtales/checkout?oid=" . $oid);
  	exit;
} 

echo "Some Error Has Occured. Please Try Again.";
exit;
