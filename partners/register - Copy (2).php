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
  <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
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
<div class="container">

    <form class="well form-horizontal"  method="post"  id="contact_form" action="registered.php">
<fieldset>

<!-- Form Name -->
<legend style="text-align:center;padding-top:50px;">Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Name" class="form-control"  type="text" value="<?php echo $name ?>" required>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" value="<?php echo $email ?>" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key"></i></span>
  <input id="txtPassword" name="password" placeholder="Password" class="form-control"  type="password" value="<?php echo $password ?>" required>
    </div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label">Confirm Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key"></i></span>
  <input id="txtConfirmPassword" name="password1" placeholder="Confirm Password" class="form-control"  type="password" value="<?php echo $password1 ?>" required>
    </div>
  </div>
</div>
<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(080)555-1212" class="form-control" type="text" value="<?php echo $phone ?>" required>
    </div>
  </div>
</div>

<!-- Text input-->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-warning" onclick="return Validate()" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
	</body>
	</html>
	<!-- /.container -->