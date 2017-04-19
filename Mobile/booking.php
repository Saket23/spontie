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
$prod=$_GET['id'];
 if ( isset($_POST['submit']) ) {
  if( !$error ) {  
$query = "INSERT INTO booking(name,email,phone,no_of_adult,no_of_child,Date,time,product_id) VALUES('$name','$email','$phone','$adult1','$child1','$date1','$times','$prod')";
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
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://use.fontawesome.com/8e6e607a77.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>



</head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86194769-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
function getSalePackage(id,pname) {
  var response;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert('1');
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
				//alert(this.responseText);
				response=this.responseText;
                 //document.getElementById("txtHint").innerHTML = this.responseText;
				//alert('2');
            }
        };
        xmlhttp.open("GET","getSale.php?id="+id+"&pname="+pname,false);
        xmlhttp.send();
		return response;
    }
function getPurchasePackage(id,pname) {
  var response;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert('1');
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
				//alert(this.responseText);
				response=this.responseText;
                 //document.getElementById("txtHint").innerHTML = this.responseText;
				//alert('2');
            }
        };
        xmlhttp.open("GET","getPurchase.php?id="+id+"&pname="+pname,false);
        xmlhttp.send();
		return response;
    }
	
function getChildSalePackage(id,pname) {
  var response;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert('1');
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
				//alert(this.responseText);
				response=this.responseText;
                 //document.getElementById("txtHint").innerHTML = this.responseText;
				//alert('2');
            }
        };
        xmlhttp.open("GET","getChildSale.php?id="+id+"&pname="+pname,false);
        xmlhttp.send();
		return response;
    }
function getChildPurchasePackage(id,pname) {
  var response;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert('1');
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
				//alert(this.responseText);
				response=this.responseText;
                 //document.getElementById("txtHint").innerHTML = this.responseText;
				//alert('2');
            }
        };
        xmlhttp.open("GET","getChildPurchase.php?id="+id+"&pname="+pname,false);
        xmlhttp.send();
		return response;
    }
		
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						var package1=obj.val.substring(obj.val.indexOf("<")+3,obj.val.indexOf("-"));
						//alert("p"+package1+"x");
						document.getElementById("title1").innerHTML = package1;
						var id1=getParameterByName("id");
						//alert(getSalePackage(id1,obj.val));
						var saleprice=getSalePackage(id1,package1)+".00";
						var purprice=getPurchasePackage(id1,package1)+".00";
						var csaleprice=getChildSalePackage(id1,package1)+".00";
						var cpurprice=getChildPurchasePackage(id1,package1)+".00";
						document.getElementById("sale1").innerHTML =saleprice;
						document.getElementById("pur1").innerHTML =purprice;
						//document.getElementById("totalp").innerHTML ="Total Price "+purprice;
						
						document.getElementById("csale1").innerHTML =csaleprice;
						document.getElementById("cpur1").innerHTML =cpurprice;
						
						document.getElementById("price").value =purprice;
						document.getElementById("price").value =cpurprice;
						calculate();
						document.getElementById("click").innerHTML ="Pay | $"+purprice;
						obj.placeholder.text('Package: ' + package1);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {
				//alert(1);
				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					//alert(2);
					$('.wrapper-dropdown-1').removeClass('active');
				});

			});
			
</script>

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
			
			document.getElementById("Today1").style.backgroundColor = "#C40323";
			document.getElementById("Tommorow1").style.backgroundColor = "white";
			document.getElementById("Today1").style.color = "#ffffff";
			document.getElementById("Tommorow1").style.color = "#000000";
			
			document.getElementById("number").textContent = 0;
			document.getElementById("adult1").value = 0;

			if(dd<10) {
			dd='0'+dd;
			} 

			if(mm<10) {
			mm='0'+mm;
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
			var dd = today.getDate()+1;
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			
			document.getElementById("Today1").style.backgroundColor = "white";
			document.getElementById("Tommorow1").style.backgroundColor = "#C40323";
			document.getElementById("Today1").style.color = "#000000";
			document.getElementById("Tommorow1").style.color = "#ffffff";
			
			document.getElementById("number").textContent = 0;
			document.getElementById("adult1").value = 0;

			if(dd<10) {
			dd='0'+dd;
			} 

			if(mm<10) {
			mm='0'+mm;
			} 
			today = mm+'/'+(dd)+'/'+yyyy;
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

function showTicket(time,date,prod) {
  var response;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert('1');
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
				//alert(this.responseText);
				response=this.responseText;
                 //document.getElementById("txtHint").innerHTML = this.responseText;
				//alert('2');
            }
        };
        xmlhttp.open("GET","getime.php?time="+time+"&date="+date+"&prod="+prod,false);
        xmlhttp.send();
		return response;
    }
	function showChildTicket(time,date,prod) {
  var response;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			//alert('1');
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				
				//alert(this.responseText);
				response=this.responseText;
                 //document.getElementById("txtHint").innerHTML = this.responseText;
				//alert('2');
            }
        };
        xmlhttp.open("GET","getChildTime.php?time="+time+"&date="+date+"&prod="+prod,false);
        xmlhttp.send();
		return response;
    }
function decrementchild()
{
	var value = document.getElementById("number1").innerHTML;
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
    document.getElementById("number1").textContent = value;
	document.getElementById("child1").value = value;
	var valuep="Total Child Quantity "+value;
	$("#childp").html(valuep);
	}
	calculate();
}
function incrementchild()
{
	//alert(b);
var city1=getCity();
//alert("city"+city1);
	var time =document.getElementById("times").value;//times
	//alert(time);
	if(time == "time" && city1!='Bali')
	{
		alert('Please select time');
	}
	else
	{
	var value = document.getElementById("number1").innerHTML;
    //alert(value);
	//var kp=10-'<?php echo $row['count1'];?>';
	var date =document.getElementById("date1").value;
	//alert(date);
	var prod =document.getElementById("product_id").value;
	//alert(prod);
	var abc=showChildTicket(time,date,prod);
	//alert(abc);
	//sleep(10000);
	//var timee=document.getElementById("txtHint").value;
	timel=10-abc;
	//alert("timel "+timel);
	value++;
	if(value<=0)
	{
		alert("Tickets cannot be zero or negative");
	}
	else if(value > timel)
	{
		alert("Only "+timel+" tickets are left");
	}
	else
	{
    document.getElementById("number1").textContent = value;
	document.getElementById("child1").value = value;
	//document.getElementById("adultp").write("Total Quantity "+value);
	var valuep="Total Child Quantity "+value;
	$("#childp").html(valuep);
	}
	calculate();
	}
}
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
	var valuep="Total Adult Quantity "+value;
	$("#adultp").html(valuep);
	}
	calculate();
}
function sleep(miliseconds) {
   var currentTime = new Date().getTime();

   while (currentTime + miliseconds >= new Date().getTime()) {
   }
}
function incrementValue()
{
	//alert(b);
var city1=getCity();
//alert("city"+city1);
	var time =document.getElementById("times").value;//times
	//alert(time);
	if(time == "time" && city1!='Bali')
	{
		alert('Please select time');
	}
	else
	{
	var value = document.getElementById("number").innerHTML;
    //alert(value);
	//var kp=10-'<?php echo $row['count1'];?>';
	var date =document.getElementById("date1").value;
	//alert(date);
	var prod =document.getElementById("product_id").value;
	//alert(prod);
	var abc=showTicket(time,date,prod);
	//alert(abc);
	//sleep(10000);
	//var timee=document.getElementById("txtHint").value;
	timel=10-abc;
	//alert("timel "+timel);
	value++;
	if(value<=0)
	{
		alert("Tickets cannot be zero or negative");
	}
	else if(value > timel)
	{
		alert("Only "+timel+" tickets are left");
	}
	else
	{
    document.getElementById("number").textContent = value;
	document.getElementById("adult1").value = value;
	//document.getElementById("adultp").write("Total Quantity "+value);
	var valuep="Total Adult Quantity "+value;
	$("#adultp").html(valuep);
	}
	calculate();
	}
}
 function calculate() {
    var adult1 = document.getElementById('adult1').value; 
    var price = document.getElementById('price').value;
	 var child1 = document.getElementById('child1').value; 
    var cprice = document.getElementById('cprice').value;
    var resulta = adult1*price; 
	var resultc=child1*cprice;
	var result=resulta+resultc;
	var resultp;
    document.getElementById("total").value = result;
	var id1=getParameterByName("id");
	if(id1=="Goa")
	{
	result1="Pay | Rs."+result+".00";
	resultp="Total Price Rs."+result+".00";
	}
	else{
		result1="Pay | $"+result+".00";
		resultp="Total Price $"+result+".00";
	}
	$("#click").html(result1);
	//resultp="Total Price "+result+".00";
	$("#totalp").html(resultp);
}
function colorp()
{
	//alert('p');
	if($(this).siblings().hasClass('color')){
	$(this).siblings().removeClass('color');
}
$(this).addClass('color');
}
function validateForm() {
    var x = document.forms["email-form"]["times"].value;
    if (x == "") {
        alert("Time must be selected");
        return false;
    }
	var y = document.forms["email-form"]["adult1"].value;
	if (y == 0) {
        alert("Select Tickets");
        return false;
    }
}
</script>
<body>
   <section class="w-section mobile-wrapper">
    <div class="page-content" id="main-stack">
      <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title">Spontie</div>
		   <!--<a class="w-inline-block navbar-button" href=document.referrer data-load="1">-->
		     <?php echo '<a class="w-inline-block navbar-button" href="experience.php?id='.$_GET['id'].'" data-load="1">'?>
            <div><i class="fa fa-angle-left navbar-button left" style="font-size:24px"></i></div>
          </a>
		     <a class="w-inline-block navbar-button right" href="City.php" data-load="1">FAQ
          </a>
        </div>
      </div>
	  
	  
<?php	  
require 'dbconnect.php';
$stmtx = mysql_query("SELECT package1 
FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
$rowx = mysql_fetch_array($stmtx);
$pname = json_decode($rowx['package1']);
$PackageName = json_decode($pname->{'name'});
$PackageCost = json_decode($pname->{'purchase_price'});
if($PackageName[0]){
			echo '<section class="main">';
				echo '<div class="wrapper-demo">';
					echo '<div id="dd" class="wrapper-dropdown-1" tabindex="1">';
						echo '<span> Select Package </span>';
					    echo '<ul class="dropdown" tabindex="1">';					
						for($i=0;$i<sizeof($PackageName);$i++)
						{
						$ABB='<b>> </b>'.$PackageName[$i].'- $'.$PackageCost[$i];
						$ABB='<b>> </b>'.$PackageName[$i].'- $'.$PackageCost[$i];
							//echo '<li><a href="#">'.$ABB.'</a></li>';
							echo '<li><a href="#">'.$ABB.'</a></li>';
						}
					    echo '</ul>';
					echo '</div>';
				echo '</div>';
			echo '</section>';
			echo '<div class="date_row">';
}
else{
echo '<div class="date_row" >'; //<!-- date_row -->
}
?>
		<div id="Today1"class="time">Today</div>

		<div id="Tommorow1" class="time">Tommorow</div>
	</div> <!-- date_row -->

	  <?php  
require 'dbconnect.php';
date_default_timezone_set('Asia/Kolkata'); 
$stmt = mysql_query("SELECT product_id,title,description,duration,discount,title,highlights,inclusions,exclusions,your_tickets,location,purchase_price,city,sale_price,discount,
time,package1,cpurchase,csale 
FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
$row = mysql_fetch_array($stmt);
$time1 = json_decode($row['time']);
$time1name = json_decode($time1->{'name'});
$time2 = json_decode($row['time']);
$time2name = json_decode($time2->{'value'});
$city=$row['city'];
$sql= mysql_query("select sum(no_of_adult) as count1,time from booking where date=DATE_FORMAT(NOW(), '%m/%d/%Y') and product_id='".$_GET['id']."'group by time" )or die(mysql_error());
$sql2= mysql_query("select sum(no_of_adult) as count1,time from booking where date=DATE_FORMAT(NOW()+ INTERVAL 1 DAY, '%m/%d/%Y') and product_id='".$_GET['id']."' group by time" )or die(mysql_error());
$row1 = mysql_fetch_array($sql);
$row2 = mysql_fetch_array($sql2);
$timex=array();
$timeo=array();
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
	$curtime = date("G");	
         for($i=0;$i<sizeof($time1name);$i++)
	 {
		 for($j=0;$j<sizeof($timex);$j++)
	 {

		 if($time1name[$i]==$timex[$j])
		 {
			continue  2;
		 }
	 }
	 if($time2name[$i]<=$curtime)
		 {
			continue;
		 }
	     echo '<div class="col-xs-4">';
		 echo '<div class="time1">'.gettimez($time1name[$i]).'</div>';
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
		 echo '<div class="time1">'.gettimez($time1name[$i]).'</div>';
		 echo '</div>';
	
	 }
	?>
	
	</div> <!-- time_row -->
	<script>
	function getCity()
	{
			var city1 = <?php echo json_encode($city); ?>;
			return city1;
	}
	</script>

	
	<div class="qty_row"> <!-- qty_row -->
	<div class="qty_row_row"> <!-- qty_row_row -->
	<div class="col-xs-4">Adult <span class="nl">(13+ years)</span></div>
		<?php
		if($row['city']=="Goa")
				{
					?>
		<div class="col-xs-4"><i class="fa fa-inr" style="font-size:15px;color:#808080"></i><span id="pur1"><?php echo $row['purchase_price'];?></span><del class="nl" id="sale1"><?php echo $row['sale_price'];?></del></div>		<?php
				}
				else
				{
					?>
		<div class="col-xs-4"><i class="fa fa-usd" style="font-size:15px;color:#808080"></i><span id="pur1"><?php echo $row['purchase_price'];?></span><del class="nl" id="sale1"><?php echo $row['sale_price'];?></del></div>
		<?php
				}
				?>
		<div class="col-xs-4"><a style = "cursor: pointer; cursor: hand;" onclick="return decrementValue();">-</a><span id="number">0</span><a style = "cursor: pointer; cursor: hand;" onclick="return incrementValue();">+</a></div>
	</div> <!-- qty_row_row -->
<p>&nbsp;</p>

<?php
		if($row['city']!="Goa")
				{
					?>

	<div class="qty_row_row"> 
		<div class="col-xs-4">Child <span class="nl">(3-12 years)</span></div>
		<div class="col-xs-4"><i class="fa fa-usd" style="font-size:15px;color:#808080"></i><span id="cpur1"><?php echo $row['cpurchase'];?> </span><del class="nl" id="csale1"><?php echo $row['csale'];?></del></div>
		<div class="col-xs-4"><a style = "cursor: pointer; cursor: hand;" onclick="return decrementchild();">-</a><span id="number1">0</span><a style = "cursor: pointer; cursor: hand;" onclick="return incrementchild();">+</a></div>
	</div> <!-- qty_row_row -->
	<?php
				}
				?>
	</div> <!-- qty_row -->
<br>
<br>
	
	  <div class="text-new">
			<div class="grey-header">
              <p style="text-align:left">You want to experiance <span id="title1"><?php echo $row['title'];?></span>
			  <span style="text-align:left" id="date2"></span>
			  <span style="text-align:left" id="timep"></span><br>
			  <span style="text-align:left" id="adultp">Total Adult Quantity 0</span><br>
			  <span style="text-align:left" id="childp">Total Child Quantity 0</span><br>
			  <span style="text-align:left" id="totalp">Total Price </span></p>
            </div>
	
	<div class="w-form">
            <form id="submit-form" name="email-form" data-name="Email Form" onsubmit="return validateForm()" method="post" data-redirect="" action="pay.php" autocomplete="off">
			<div>
                <label class="label-form" for="email-field">Name</label>
                <input class="w-input input-form" id="email-field" type="name" name="name" data-name="name" required="required">
                <div class="separator-fields"></div>
              </div>
			  <input type="text" name="date1" id="date1"  hidden />
			  <input type="text" name ="adult1" id="adult1" value="0"  hidden />
			  <input type="text" name="child1" id="child1" value="0" hidden />
			  <input type="text" name ="times" id="times"  value="time"  hidden />
			  <input type="text" name ="count1" id="count1" hidden />
			  <input type="text" name="product_id" id="product_id" value= <?php echo $row['product_id'];?> hidden />
			  <input type="text" name ="product" id="product" value="<?php echo substr($row['title'],0,30);?>"  hidden />
			  <input type="text" name ="price" id="price" value="<?php echo $row['purchase_price'];?>" hidden />
			  <input type="text" name ="cprice" id="cprice" value="<?php echo $row['cpurchase'];?>" hidden />
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
			  <?php
			  if($row['city']=="Goa")
				{
			  echo '<button class="w-button action-button" type="submit" id="click" name="submit">Pay | Rs.'.$row['purchase_price'].'</button>';
				}
				else
				{
					echo '<button class="w-button action-button" type="submit" id="click" name="submit">Pay | $'.$row['purchase_price'].'</button>';
				}
			  ?>
            </form>
          </section>
</body>
</html>