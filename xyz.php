<html>
<body>
<?php
//time() returns current time in seconds
date_default_timezone_set('Asia/Kolkata'); 
echo date("l");
$today = date('H:m:s');
echo $today;  
$in_seconds = time();
//strftime - Format a local time/date according to locale settings
echo strftime("%m/%d/%y",$in_seconds);
?>
</body>
</html>
