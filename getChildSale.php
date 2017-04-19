<?php
 require 'dbconnect.php';
$stmtx = mysql_query("SELECT package1 
FROM product where product_id='".$_GET['id']."'")or die(mysql_error());
/*$rowx = mysql_fetch_array($stmtx);
$pname1 = json_decode($rowx['package1']);
$PackageName = json_decode($pname1->{'name'});
$PackageCost = json_decode($pname1->{'sale_price'});
for($i=0;$i<sizeof($PackageName);$i++)
						{
							if($PackageName==$_GET['pname'])
							{
								echo $PackageCost;
							}
						}

}*/
while($row = mysql_fetch_array($stmtx)){
for($i=0;$i<sizeof(json_decode(json_decode($row['package1'])->{'name'}));$i++)
{
	if(json_decode(json_decode($row['package1'])->{'name'})[$i]==$_GET['pname'])
	{
		echo json_decode(json_decode($row['package1'])->{'csale'})[$i];
		//echo "abc";
	}
}
}
?>