<?php include("include/lock.php");?>
<?php include("include/connection1.php");

if(isset($_POST['submit'])) {
	$id_array = $_POST['data']; // return array
	$id_count = count($_POST['data']); // count array

	for($i=0; $i < $id_count; $i++) {
		$id = $id_array[$i];
		
$ses_sql=mysql_query("select * from portfoliopages where id='$id'");

$row1=mysql_fetch_array($ses_sql);
		
		$id1=$row1['id'];
$del=$row1['photo'];
$myfile="uploads/portfolio/$del";
$myfile2="uploads/portfolio-thum/$del";
unlink($myfile);
unlink($myfile2);


$query = mysql_query("DELETE FROM `portfoliopages` WHERE `id` = '$id'");
		if(!$query) { die(mysql_error()); }
	}
	header("Location: view-portfolio.php"); // redirent after deleting
}
?>