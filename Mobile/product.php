<?php
 require 'dbconnect.php';
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Spontie-Last Minute Mobile Market Places For Activities Tours And Events|Experience Goa</title>
   <meta name="Keywords" content="Spontieapp,Spontie,Last Minute Ticket Booking,Discover,Activities,Tours,Events Adventures,Experience,City,Demand,Goa,Cheap,scuba diving,banana ride">
	<meta name="description" content="Discover Get Cheap Activity Tickets at Spontieapp.com - India's only Activity Provider.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/framework.css">
  <link rel="stylesheet" type="text/css" href="css/washington.css">
  <script src="js/webfont.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700"]
      }
    });
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86194769-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
/*$( document ).ready(function() {
var city1=getCity();
alert(city1);
if(city1!="Goa")
{
	$(".currency").removeClass("fa fa-inr");
	$(".currency").addClass("fa fa-usd");
}
});*/

</script>

  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/Favicon.png">
  <link rel="apple-touch-icon" href="images/Favicon.png">

  <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="w-section mobile-wrapper">
   <div class="page-content" id="main-stack">
      <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title">Explore Experiences</div>
          <a class="w-inline-block navbar-button right" href="#" data-ix="search-box">
            <div class="navbar-button-icon icon ion-ios-plus-empty"></div>
          </a>
          <a class="w-inline-block navbar-button" href="city.php" data-load="1">
		  <div><i class="fa fa-angle-left" style="font-size:24px"></i></div>
          </a>
        </div>
      </div>
      <div class="body padding smaller search-fixed" id="search-fixed">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" action="#">
            <div class="separator-fields"></div>
            <div class="separator-fields"></div>
            <div class="background-grey search"></div>
            <div class="row-input-list search">
              <div class="block-input-combined">
                <input class="w-input input-form search-input" id="Search" type="text" placeholder="Search" name="Search" data-name="Search" required="required">
                <a class="w-inline-block right-input-icon search" href="#">
                  <div class="icon ion-ios-search"></div>
                </a>
              </div>
            </div>
          </form>
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form</p>
          </div>
        </div>
      </div>
<section style="padding-top:70px">
 <?php echo '<p style="text-align:center;">Happening Right Now in '.$_GET['city'].'</p>'?>
			</section>
			   <?php
				 			try {
			if($_GET['city']=="Goa"||$_GET['city']=="Bali")
			{
			$stmt = mysql_query("SELECT product_id,location,title,sale_price,purchase_price,discount FROM product where city='".$_GET['city']."'")or die(mysql_error());
			while ($row = mysql_fetch_array($stmt)) {
			$pic1='http://spontieapp.com/partners/uploads/product_image/Product_'.$row['product_id'].'_1.jpg';
			echo '<section>';
            echo'<a class="w-inline-block" href="experience.php?id='.$row['product_id'].'" data-load="1">';?>
              <div class="image-new1" style="background-image:linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url(<?php echo $pic1;?>); background-size: cover;background-repeat:no-repeat;"><div class="text1"><?php echo $row['title'];?></div>
			  <?php
			  if($_GET['city']=="Goa")
			  {
			  echo '<div class="text2"><strike style="color:yellow;"><i class="fa fa-inr" style="font-size:10px;color:white"></i>'.substr($row['sale_price'],0,-3).'</strike></div>';
			  echo '<div class="text3"><i id="currency" class="fa fa-inr" style="font-size:20px;color:white"></i>'.substr($row['purchase_price'],0,-3).'</div>';
			  }
			  else
			  {
				  echo '<div class="text2"><strike style="color:yellow;"><i class="fa fa-usd" style="font-size:10px;color:white"></i>'.substr($row['sale_price'],0,-3).'</strike></div>';
				  echo '<div class="text3"><i id="currency" class="fa fa-usd" style="font-size:20px;color:white"></i>'.substr($row['purchase_price'],0,-3).'</div>';
			  }
			  ?>
			  <div class="text4">Save upto <?php echo $row['discount'];?>%</div>
			  <div class="text8"><?php echo rand(1, 29);?> tickets booked in last 12 hours</div>
			  <div class="text7"><?php echo $row['location'];?></div>
			  
			 </div>
			  <?php
            echo '</a>';
echo '</section>';
			}
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("We are launching soon in your city!! Stay Tuned or visit Goa or Bali to Experience Spontie until 20th April")';
				//echo 'window.location = "/city.php";'
				//redirect("/city.php",303);
				echo '</script>';
			}
							}catch(PDOException $e) {
			    echo $e->getMessage();
			}
			function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
		?>
		<script>
			function getCity()
	{
			var city1 = <?php echo json_encode($_GET['city']); ?>;
			return city1;
	}
		</script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/framework.js"></script>
  <!--[if lte IE 9]><script src="js/placeholders.min.js"></script><![endif]-->
</body>
</html>