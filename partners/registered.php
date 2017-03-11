<?php
 require 'dbconnect.php';
$name = $_POST['name'];
$email=$_POST['email'];
$password = trim($_POST['password']);
$password = strip_tags($password);
$password = htmlspecialchars($password);
$pass = sha1($password);
$password1=$_POST['password1'];
$phone=$_POST['phone'];
 if ( isset($_POST['submit']) ) {
   
$query = "INSERT INTO vendor(name,display_name,email,password,phone) VALUES('$name','$name','$email','$pass','$phone')";
   $res = mysql_query($query);
 }
?>
<html>
<head>
<style>
#success_message{ display: none;}
@font-face {font-family: "Lulo Clean W01 One";
  src: url("/Lulo Clean W01 One/Lulo Clean W01 One.eot"); /* IE9*/
  src: url("/Lulo Clean W01 One/Lulo Clean W01 One.eot") format("embedded-opentype"), /* IE6-IE8 */
  url("/Lulo Clean W01 One/Lulo Clean W01 One Bold.woff2") format("woff2"), /* chrome、firefox */
  url("/Lulo Clean W01 One Bold/Lulo Clean W01 One Bold.woff") format("woff"), /* chrome、firefox */
  url("/Lulo Clean W01 One Bold/Lulo Clean W01 One Bold.ttf") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("/Lulo Clean W01 One Bold/Lulo Clean W01 One Bold.svg") format("svg"); /* iOS 4.1- */
}
</style>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:#fff0e6;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!--<a class="navbar-brand page-scroll" href="#page-top">Start Spontaneity</a>-->
				<div class="navbar-brand page-scroll" style="width: 233px;font-size: 20px;font-family:Lulo Clean W01 One,sans-serif;"><a href="www.spontieapp.com" style="color:#BADA55;text-decoration: none;"><b>SPONTIE</b></a></div><br>
				<!--<div class="navbar-brand page-scroll" style= "color:blue;font-size:17px;color:white;font-family:Helvetica,sans-serif;">We Trust in Spontaneity</div>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				<div class="navbar-brand page-scroll" style="width: 233px;font-size: 20px;font-family:Lulo Clean W01 One,sans-serif;"><a href="www.spontieapp.com" style="color:#BADA55;text-decoration: none;"><b>Log In !</b></a></div><br>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	</head>
	<div class="col-sm-6 col-sm-offset-3 form-box" style="text-align:center;width: 1000px;font-size: 20px;font-family:Lulo Clean W01 One,sans-serif;">Your Response has been submitted !!<br> You will contacted soon!!</b></div>

	</body>
	</html>