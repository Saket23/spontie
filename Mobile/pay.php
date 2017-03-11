<?php 
$name = $_POST["name"];
$date1 = $_POST["date1"];
$adult1 = $_POST["adult1"];
$child1 = $_POST["child1"];
$times = $_POST["times"];
$count1 = $_POST["count1"];
$email = $_POST["email"];
$number = $_POST["number"];
$product = $_POST["product"];
$price = $_POST["price"];
$total = $_POST["total"];
$prod=$_POST["product_id"];


require 'dbconnect.php';
$query = "INSERT INTO booking(name,email,phone,no_of_adult,no_of_child,Date,time,Product,price,product_id) VALUES('$name','$email','$number','$adult1','$child1','$date1','$times','$product','$total',$prod)";
$res = mysql_query($query);  

include 'src/instamojo.php';

//$api = new Instamojo\Instamojo('354d0654e32dedc4a9c7da9d772c9362', 'b0dabb0aca4c7a25d8b2730d69e3a5a1','https://test.instamojo.com/api/1.1/');
$api = new Instamojo\Instamojo('8adf3276f810b23fb6f6fba756876072', 'ca5b02037da2411575dee6b8b0f37df8','https://www.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product,
        "amount" => $total,
        "buyer_name" => $name,
        "phone" => $number,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://spontieapp.com/mobile/thankyou.php",
        "webhook" =>  "http://spontieapp.com/mobile/webhook.php"
        ));
    print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>