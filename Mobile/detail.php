<?php
require 'booking.php';

$error = false;
$name = $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['number'];
$date1 = $_POST['date1'];
$adult1=$_POST['adult1'];
$child1=$_POST['child1'];
$times = $_POST['times'];
$pp=isset($_POST['submit']);
?>