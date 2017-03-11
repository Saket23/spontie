<?php
require 'dbconnect.php';

$sql= "select distinct a.name as name,
a.email as email,
b.no_of_adult as no_of_adults,
b.date as date,
b.time as time,
a.phone as phone,
a.product as product,
a.price as price,
b.product_id as product_id from apayment a,booking b where a.Phone=b.phone and a.name=b.name";

$records=mysql_query($sql);
?>

<html>
<body>
<div id="table">
<table width="600" border="1" cellspacing ="1" cellpadding="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>No of Adults</th>
<th>Date</th>
<th>Time</th>
<th>Phone</th>
<th>Product</th>
<th>Price</th>
<th>product Id</th>
</tr>
<?php
while($vendor=mysql_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$vendor[name]."</td>";
	echo "<td>".$vendor[email]."</td>";
	echo "<td>".$vendor[no_of_adults]."</td>";
	echo "<td>".$vendor[date]."</td>";
	echo "<td>".$vendor[time]."</td>";
	echo "<td>".$vendor[phone]."</td>";
	echo "<td>".$vendor[product]."</td>";
	echo "<td>".$vendor[price]."</td>";
	echo "<td>".$vendor[product_id]."</td>";
	echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
