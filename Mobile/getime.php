<?php
 require 'dbconnect.php';
$q = intval($_GET['time']);
$stmt = mysql_query("select sum(no_of_adults) as count1,time from after_payment where date='".$_GET['date']."' and product_id='".$_GET['prod']."' and time='".$_GET['time']."'group by time")or die(mysql_error());
while($row = mysql_fetch_array($stmt)){
echo $row['count1'];
}
?>