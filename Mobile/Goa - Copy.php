<?php
 require 'dbconnect.php';
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>News</title>
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

  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/logoStandford32.ico">
  <link rel="apple-touch-icon" href="images/logoStandford32.ico">

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
          <a class="w-inline-block navbar-button" href="city.html" data-load="1">
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
 <p style="text-align:center;">Happening Right Now in Goa</p>
			</section>
			   <?php
				 			try {
			$stmt = mysql_query("SELECT product_id, title,sale_price,purchase_price FROM product")or die(mysql_error());
			while ($row = mysql_fetch_array($stmt)) {
			echo '<section>';
            echo'<a class="w-inline-block" href="experience.php?id='.$row['product_id'].'" data-load="1">';
              echo'<div class="image-new g2"><div class="text1">'.$row['title'].'</div>';
			  echo '<div class="text2"><strike style="color:yellow;"><i class="fa fa-inr" style="font-size:10px;color:white"></i>'.substr($row['sale_price'],0,-3).'</strike></div>';
			  echo '<div class="text3"><i class="fa fa-inr" style="font-size:20px;color:white"></i>'.substr($row['purchase_price'],0,-3).'</div>';
			  echo '<div class="text4">Save upto 50%</div>';
			  echo '</div>';
            echo '</a>';
echo '</section>';
			}
							}catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>
  </section>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/framework.js"></script>
  <!--[if lte IE 9]><script src="js/placeholders.min.js"></script><![endif]-->
</body>
</html>