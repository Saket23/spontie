<?php  
require 'dbconnect.php';
$stmt = mysql_query("SELECT product_id, title,sale_price,purchase_price FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
$row = mysql_fetch_array($stmt);
$var1='http://spontieapp.com/partners/uploads/product_image/product_'.$_GET['id'].'_2.jpg';
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $row['title'];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/framework.css">
  <link rel="stylesheet" type="text/css" href="css/washington.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script src="js/webfont.js"></script>
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
          <div class="navbar-title">Spontie</div>
		  <?php
		  //$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		  $stmt = mysql_query("SELECT city FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
			$row = mysql_fetch_array($stmt);
          echo '<a class="w-inline-block navbar-button" href="product.php?city='.$row[city].'" data-load="1">'
		  ?>
            <div><i class="fa fa-angle-left" style="font-size:24px"></i></div>
          </a>
		     <a class="w-inline-block navbar-button right" href="City.php" data-load="1">FAQ
          </a>
        </div>
      </div>
	  <section>
      <div class="body">
	  <?php  
require 'dbconnect.php';
$stmt = mysql_query("SELECT product_id,description,duration,discount,title,highlights,city,inclusions,exclusions,your_tickets,additional_information,location,purchase_price,sale_price,discount,
time,Longitude,Latitude
FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
$row = mysql_fetch_array($stmt);
$var1='http://spontieapp.com/partners/uploads/product_image/product_'.$_GET['id'].'_2.jpg';
$var2='http://spontieapp.com/partners/uploads/product_image/product_'.$_GET['id'].'_3.jpg';
$var3='http://spontieapp.com/partners/uploads/product_image/product_'.$_GET['id'].'_4.jpg';
$time1 = json_decode($row['time']);
$time1name = json_decode($time1->{'name'})
?>
            <div class="w-slider hero-slider" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="5" data-delay="4000" data-autoplay="1">
              <div class="w-slider-mask">
                <div class="w-slide" style="background-image: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),url(<?php echo $var1;?>);background-size: cover;background-repeat:no-repeat;"></div>				
                <div class="w-slide" style="background-image: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),url(<?php echo $var2;?>);background-size: cover;background-repeat:no-repeat;"></div>
                <div class="w-slide" style="background-image: linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)),url(<?php echo $var3;?>);background-size: cover;background-repeat:no-repeat;">
				</div>
				<div class="textx"><?php echo $row['title'];?></div>
				<?php
				if($row['city']=="Goa")
				{
				echo '<div class="text2"><strike style="color:yellow;"><i class="fa fa-inr" style="font-size:10px;color:white"></i>'.$row['sale_price'].'</strike></div>';
				echo '<div class="text3"><i class="fa fa-inr" style="font-size:20px;color:white"></i>'.$row['purchase_price'].'</div>';
				}
				else
				{
					echo '<div class="text2"><strike style="color:yellow;"><i class="fa fa-usd" style="font-size:10px;color:white"></i>'.$row['sale_price'].'</strike></div>';
					echo '<div class="text3"><i class="fa fa-usd" style="font-size:20px;color:white"></i>'.$row['purchase_price'].'</div>';
				}
			  ?>
			  <div class="text4">Save upto <?php echo $row['discount'];?>%</div>
			  <!--<div class="text6"><//?php echo rand(1, 29);?> tickets booked in last 12 hours</div>-->
			  <div class="text5"><?php echo $row['location'];?></div>
              </div>
              <div class="w-slider-nav w-round slider-bullets"></div>
            </div>
			<div class="page-content" id="main-stack">
			</div>
			</div>
			</section>
    <div class="text-new">
			<div class="grey-header">
              <p style="text-align:center">Duration : <?php echo $row['duration'];?></p>
            </div>
			<?php
			if($row['description'])
			{
				?>
              <div class="separator-fields"></div>
              <h2 class="title-new">Summary</h2>
              <div class="separator-fields"></div>		 
			  <?php echo $row['description'];?>
               <div class="separator-button"></div>
			   <?php
			}
			?>
			<?php
			if($time1name)
			{
				?>
			
			   <div class="grey-header">
              <p style="text-align:left;">Schedule:<br>
			  <?php	
			   //echo sizeof($time1name);
			   
function gettimez($tim)
{
	if($tim=='7')
	{
		return '7 AM';
	}
	if($tim=='8')
	{
		return '8 AM';
	}
	if($tim=='9')
	{
		return '9 AM';
	}
	if($tim=='10')
	{
		return '10 AM';
	}
	if($tim=='11')
	{
		return '11 AM';
	}
	if($tim=='12')
	{
		return '12 PM';
	}
	if($tim=='13')
	{
		return '1 PM';
	}
	if($tim=='14')
	{
		return '2 PM';
	}
	if($tim=='15')
	{
		return '3 PM';
	}
	if($tim=='16')
	{
		return '4 PM';
	}
	if($tim=='17')
	{
		return '5 PM';
	}
	if($tim=='18')
	{
		return '6 PM';
	}
	if($tim=='19')
	{
		return '7 PM';
	}
	if($tim=='20')
	{
		return '8 PM';
	}
	if($tim=='21')
	{
		return '9 PM';
	}
	if($tim=='22')
	{
		return '10 PM';
	}
	if($tim=='23')
	{
		return '11 PM';
	}
	if($tim=='0')
	{
		return '12 AM';
	}
}

			  for($i=0;$i<sizeof($time1name);$i++)
				  {
					  echo '<span style="margin-right:1em;">';
					  echo gettimez($time1name[$i]);
					  echo '</span>';
					  /*if($time1->{'name'}[$i]!=',' && $time1->{'name'}[$i]!='"')
						  {
							  if($time1->{'name'}[$i]=='M'){
							 echo '<span style="margin-right:1em;">';
							 echo $time1->{'name'}[$i] ;
							 echo '</span>';
							  }
							  else
							  {
								   echo $time1->{'name'}[$i] ;
							  }
						  }*/
				  }
			  ?> </p>
			     <?php
			}
			?>
            </div>
			<?php
			if($row['highlights']!='                                        <p><br></p>')
			{
				?>
              <h2 class="title-new">Highlights</h2>
              <p class="description-new">
			  <?php echo $row['highlights'];?>
			  </p>
              <div class="separator-button"></div>
              <div class="separator-button"></div>
			  <?php
			}
			?>
			<?php
			if($row['inclusions']!='                                        <p><br></p>')
			{
				?>
			  <h2 class="title-new">Inclusions</h2>
               <p class="description-new"><?php echo $row['inclusions'];?> </p>
			     <?php
			}
			?>
			<?php
			if($row['exclusions']!='                                        <p><br></p>')
			{
				?>			
			  <h2 class="title-new">Exclusions</h2>
               <p class="description-new"><?php echo $row['exclusions'];?> </p>
			      <?php
			}
			?>
			  <h2 class="title-new">Your Ticket</h2>
               <div>Your tickets will be emailed to you within 20 minutes of your purchase. You must carry a printed copy of the tickets to the venue along with valid photo ID.</div>
			   <?php
			if($row['additional_information']!='                                        <p><br></p>')
			{
				?>	
			   <h2 class="title-new">Additional Information</h2>
               <p class="description-new"><?php echo $row['additional_information'];?> </p>
			         <?php
			}
			?>
			  <h2 class="title-new">Where</h2>
               <p class="description-new"><?php echo $row['location'];?> </p>
			  <br>
			  <div class="w-widget w-widget-map hero-map" data-widget-latlng="<?php echo $row['Latitude'];?> ,<?php echo $row['Longitude'];?> " data-widget-style="roadmap" data-widget-zoom="12" data-widget-tooltip="We are here!"></div>
			             </div>
						 <footer><a class="w-button action-button" href="booking.php?id=<?php echo $row['product_id'];?>">Lets Go</a></footer>
  </section>
			
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/framework.js"></script>
  <!--[if lte IE 9]><script src="js/placeholders.min.js"></script><![endif]-->
</body>
</html>