<?php

require 'dbconnect.php';
 
$error = false;
$name = $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['number'];
$date1 = $_POST['date1'];
$adult1=$_POST['adult1'];
$child1=$_POST['child1'];
$times = $_POST['times'];
 if ( isset($_POST['submit']) ) {
  if( !$error ) {  
$query = "INSERT INTO booking(name,email,phone,no_of_adult,no_of_child,Date,time) VALUES('$name','$email','$phone','$adult1','$child1','$date1','$times')";
   $res = mysql_query($query);    
  } 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/Favicon.png">
<title>Spontie-Last Minute Mobile Market Places For Activities Tours And Events|Experience Goa</title>
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/custom.css" rel="stylesheet" media="screen">
<link href="css/normalize_4.1.1.css" rel="stylesheet" media="screen">
<link href="css/washington.css" rel="stylesheet" media="screen">
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<script src="https://use.fontawesome.com/8e6e607a77.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>



</head>


<script>
var ab;
	$( document ).ready(function() {
			 $('#today').hide();
			 $('#tommorow').hide();
			 $("#Today1").click(function(){
			$('#today').show();
			$('#tommorow').hide();
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			
			document.getElementById("Today1").style.backgroundColor = "#ff4203";
			document.getElementById("Tommorow1").style.backgroundColor = "white";

			if(dd<10) {
			dd='0'+d
			} 

			if(mm<10) {
			mm='0'+mm
			} 
			today = mm+'/'+dd+'/'+yyyy;
			ab=today;
			$("#date1").val(today);
			var todayp=" on "+today;
			$("#date2").html(todayp);
			});
			 $("#Tommorow1").click(function(){
			$('#today').hide();
			$('#tommorow').show();
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			
			document.getElementById("Today1").style.backgroundColor = "white";
			document.getElementById("Tommorow1").style.backgroundColor = "#ff4203";

			if(dd<10) {
			dd='0'+d
			} 

			if(mm<10) {
			mm='0'+mm
			} 
			today = mm+'/'+(dd+1)+'/'+yyyy;
			ab=today;
		   $("#date1").val(today);
		   var todayp=" on "+today;
		   $("#date2").html(todayp);
			});
			$("div.time1").click(function(){
				var textx = $(this).text();
				$("#times").val(textx);
				var timep=" at "+textx;
				$("#timep").html(timep);
			});
			$('.time1').click(function() {
			//$(this).removeClass('time1');
			//$(this).addClass('color');
			$(".color").removeClass("color");
			if($(this).siblings().hasClass('time1')){
			$(this).siblings().removeClass('time1');
}
			if($(this).hasClass('time1')){
	             $(this).siblings().removeClass('time1');
				 $(this).addClass('color');
}
});
				
	});
function decrementValue()
{
	var value = document.getElementById("number").innerHTML;
    //alert(value);
	value--;
	if(value<=0)
	{
		alert("Tickets cannot be negative or zero");
	}
	else if(value>10)
	{
		alert("Maximum 10 tickets are allowed");
	}
	else
	{
    document.getElementById("number").textContent = value;
	document.getElementById("adult1").value = value;
	var valuep="Total Quantity "+value;
	$("#adultp").html(valuep);
	}
	calculate();
}
function incrementValue()
{
	var value = document.getElementById("number").innerHTML;
    //alert(value);
	value++;
	if(value<=0)
	{
		alert("Tickets cannot be zero or negative");
	}
	else if(value>10)
	{
		alert("Maximum 10 tickets are allowed");
	}
	else
	{
    document.getElementById("number").textContent = value;
	document.getElementById("adult1").value = value;
	//document.getElementById("adultp").write("Total Quantity "+value);
	var valuep="Total Quantity "+value;
	$("#adultp").html(valuep);
	}
	calculate();
}
 function calculate() {
    var adult1 = document.getElementById('adult1').value; 
    var price = document.getElementById('price').value;
    var result = adult1*price; 
    document.getElementById("total").value = result;
	result1="Pay | Rs."+result+".00";
	$("#click").html(result1);
	var resultp="Total Price "+result+".00";
	$("#totalp").html(resultp);
}
function colorp()
{
	alert('p');
	if($(this).siblings().hasClass('color')){
	$(this).siblings().removeClass('color');
}
$(this).addClass('color');
}
</script>
<body>
   <section class="w-section mobile-wrapper">
    <div class="page-content" id="main-stack">
      <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title">Spontie</div>
          <a class="w-inline-block navbar-button" href="Goa.php" data-load="1">
            <div><i class="fa fa-angle-left navbar-button left" style="font-size:24px"></i></div>
          </a>
		     <a class="w-inline-block navbar-button right" href="Goa.php" data-load="1">FAQ
          </a>
        </div>
      </div>
	  
	  <div class="date_row" style="padding-top: 2cm;"> <!-- date_row -->
		<div id="Today1"class="time">Today</div>

		<div id="Tommorow1" class="time">Tommorow</div>
	</div> <!-- date_row -->

	  <?php  
require 'dbconnect.php';
$stmt = mysql_query("SELECT product_id,title,description,duration,discount,title,highlights,inclusions,exclusions,your_tickets,location,purchase_price,sale_price,discount,
time 
FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
$row = mysql_fetch_array($stmt);
$time1 = json_decode($row['time']);
$time1name = json_decode($time1->{'name'});
$sql= mysql_query("select sum(no_of_adult) as count1,time from booking where date=DATE_FORMAT(NOW(), '%m/%d/%Y') group by time" )or die(mysql_error());
$sql2= mysql_query("select sum(no_of_adult) as count1,time from booking where date=DATE_FORMAT(NOW()+ INTERVAL 1 DAY, '%m/%d/%Y') group by time" )or die(mysql_error());
$timex=array();
$timeo=array();
	try {
		$i=0;
	while ($row1 = mysql_fetch_array($sql)) {
	if($row1['count1']>=10)
	{
		$timex[$i] = $row1['time'];
		$i++;
	}	
	}
	}
	catch(PDOException $e) {
		echo $e->getMessage();
		}
		try {
		$i=0;
	while ($row2 = mysql_fetch_array($sql2)) {
	if($row2['count1']>=10)
	{
		$timeo[$i] = $row2['time'];
		$i++;
	}	
	}
	}
	catch(PDOException $e) {
		echo $e->getMessage();
		}
?>
	<div id="today" class="time_row"> <!-- time_row -->
	<?php
	$curtime = date('h');	
     for($i=0;$i<sizeof($time1name);$i++)
	 {
		 for($j=0;$j<sizeof($timex);$j++)
	 {

		 if($time1name[$i]==$timex[$j])
		 {
			continue  2;
		 }
		 else if($time1name[$i]<=$curtime)
		 {
			 continue 2;
		 }

	 }
	     echo '<div class="col-xs-4">';
		 echo '<div class="time1">'.$time1name[$i].'</div>';
		 echo '</div>';
	
	 }
	?>
	</div>
	<div id = "tommorow" class="time_row"> 
		
 	<?php	
     for($i=0;$i<sizeof($time1name);$i++)
	 {
		 //echo $timex[0];
		 for($j=0;$j<sizeof($timeo);$j++)
	 {
		 //echo "cd";
		 if($time1name[$i]==$timeo[$j])
		 {
			continue  2;
		 }

	 }
	     echo '<div class="col-xs-4">';
		 echo '<div class="time1">'.$time1name[$i].'</div>';
		 echo '</div>';
	
	 }
	?>
	
	</div> <!-- time_row -->

	
	<div class="qty_row"> <!-- qty_row -->
	<div class="qty_row_row"> <!-- qty_row_row -->
		<div class="col-xs-4">Adult <span class="nl">(13+ years)</span></div>
		<div class="col-xs-4"><?php echo $row['purchase_price'];?><del class="nl"><?php echo $row['sale_price'];?></del></div>
		<div class="col-xs-4"><a style = "cursor: pointer; cursor: hand;" onclick="return decrementValue();">-</a><span id="number">1</span><a style = "cursor: pointer; cursor: hand;" onclick="return incrementValue();">+</a></div>
	</div> <!-- qty_row_row -->
<p>&nbsp;</p>



	<!--<div class="qty_row_row"> 
		<div class="col-xs-4">Child <span class="nl">(3-12 years)</span></div>
		<div class="col-xs-4"><//?php echo 0.8 * $row['purchase_price'];?> <del class="nl"><//?php echo 0.8 * $row['sale_price'];?></del></div>
		<div class="col-xs-4"><a href="#"onclick="return decrementchild();">-</a><span id="number1">1</span><a href="#" onclick="return incrementchild();">+</a></div>
	</div> <!-- qty_row_row -->
	</div> <!-- qty_row -->

	
	  <div class="text-new">
			<div class="grey-header">
              <p style="text-align:left">You want to experiance <?php echo $row['title'];?>
			  <span style="text-align:left" id="date2"></span>
			  <span style="text-align:left" id="timep"></span><br>
			  <span style="text-align:left" id="adultp">Total Quantity 1</span><br>
			  <span style="text-align:left" id="totalp">Total Price <?php echo $row['purchase_price'];?></span></p>
            </div>
	
	<div class="w-form">
            <form id="submit-form" name="email-form" data-name="Email Form" method="post" data-redirect="" action="pay.php" autocomplete="off">
			<div>
                <label class="label-form" for="email-field">Name</label>
                <input class="w-input input-form" id="email-field" type="name" name="name" data-name="name" required="required">
                <div class="separator-fields"></div>
              </div>
			  <input type="text" name="date1" id="date1" hidden />
			  <input type="text" name ="adult1" id="adult1" value="1" hidden />
			  <input type="text" name="child1" id="child1" hidden />
			  <input type="text" name ="times" id="times" hidden />
			  <input type="text" name ="count1" id="count1" hidden />
			  <input type="text" name ="product" id="product" value="<?php echo substr($row['title'],0,30);?>"  hidden />
			  <input type="text" name ="price" id="price" value="<?php echo $row['purchase_price'];?>" hidden />
			  <input type="text" name ="total" id="total" value="<?php echo $row['purchase_price'];?>" hidden />
              <div>
                <label class="label-form" for="email-field">Email</label>
                <input class="w-input input-form" id="email-field" type="email" name="email" data-name="email" required="required">
                <div class="separator-fields"></div>
              </div>
              <div>
                <label class="label-form" for="email-field">Number</label>
                <input class="w-input input-form" id="email-field" type="text" name="number" data-name="number" required="required">
                <div class="separator-fields"></div>
              </div>
                <div class="separator-button-input"></div>
              </div>
			  <button class="w-button action-button" type="submit" id="click" name="submit">Pay | Rs.<?php echo $row['purchase_price'];?></button>
            </form>
          </section>
</body>
</html>