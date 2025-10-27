<?php include("include/lock.php");?>
<?php include("include/connection1.php");
$id=$_GET['id'];

$ses_sql=mysql_query("select * from productcategory where id='$id'");

$row1=mysql_fetch_array($ses_sql);

$id1=$row1['id'];
$fname=$row1['name'];


$query2 = mysql_query("DELETE FROM `portfoliopages` WHERE `fname` = '$fname'");
$row2=mysql_fetch_array($query2);

$pcode=$row2['pcode'];
$del=$row2['photo'];
$myfile="uploads/portfolio/$del";
$myfile2="uploads/portfolio-thum/$del";
unlink($myfile);
unlink($myfile2);






$query3 = mysql_query("DELETE FROM `portfoliopages` WHERE `fname` = '$fname'");


$query = mysql_query("DELETE FROM `productcategory` WHERE `id` = '$id1'");



if($query)
{
		echo '<script>alert("Deleted Category");</script>';
		echo  "<script>"; 
	echo "location.href='view-productcategory.php'";  
	echo  "</script>"; 
	}
	 
	else
	{
		echo '<script>alert("No Deleted Category - This Server Problem");</script>';
		echo  "<script>"; 
	echo "location.href='view-productcategory.php'";  
	echo  "</script>"; 
	}

?>