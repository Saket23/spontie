<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/Favicon.ico">

    <title>Success</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1><a href="index.php">Spontieapp Payment</a></h1>
        <p class="lead">You will recieve your Ticket by Email</p>
      </div>

      <h3 style="color:#6da552">Payment success!!</h3>
  


  <?php

include 'src/instamojo.php';
require 'dbconnect.php';	

$api = new Instamojo\Instamojo('8adf3276f810b23fb6f6fba756876072', 'ca5b02037da2411575dee6b8b0f37df8','https://www.instamojo.com/api/1.1/');
//$api = new Instamojo\Instamojo('354d0654e32dedc4a9c7da9d772c9362', 'b0dabb0aca4c7a25d8b2730d69e3a5a1','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];


try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
	$buyer_name=$response['payments'][0]['buyer_name'];
	$buyer_email=$response['payments'][0]['buyer_email'];
	$buyer_phone=substr($response['payments'][0]['buyer_phone'],3);
	$purpose=$response['purpose'];
	$amount=$response['amount'];
	$payment_id=$response['payments'][0]['payment_id'];
	echo $payment_id;
	echo $amount;
	echo $purpose;
	echo $buyer_name;
	echo $buyer_email;
	echo $buyer_phone;
	$query = "INSERT INTO apayment(name,email,phone,Product,price,product_id) VALUES('$buyer_name','$buyer_email','$buyer_phone','$purpose','$amount','$payment_id')";
	$res = mysql_query($query);
	echo "<pre>";
	print_r($response);
	echo "</pre>";
    ?>
    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
</div> <!-- /container -->
</body>
</html>
