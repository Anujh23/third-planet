<?php include("include/lock.php");?>
<?php
//function Code link url

function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}

if(isset($_POST['submit'])) {
	
// Usage across all PHP versions

if (get_magic_quotes_gpc()) {
    $titlename = stripslashes($_POST['name']);
	$oldname = stripslashes($_POST['oldname']);
}
else {
    $titlename = $_POST['name'];
	$oldname = $_POST['oldname'];
}

$sqlchk = "select name from productcategory where name = '$titlename'";
$exechk = mysql_query($sqlchk);
$numchk = mysql_num_rows($exechk);
if ($numchk>0)
{
$i=$numchk; 
$i++;
$del_id = $i;
$newname1 = "$titlename"."".$del_id; 
$newnamep = create_slug($newname1);
$newname = strtolower($newnamep);

$sqlchks = "select pages from productcategory where pages = '".$_POST['pages']."'";
$exechks = mysql_query($sqlchks);
$numchks = mysql_num_rows($exechks);
if ($numchks>0)
{
$i=$numchks; 
$i++;
$del_ids = $i;
$newname2 = $_POST['pages']; 
$newnamep2 = create_slug($newname2);
$newname = strtolower($newnamep2);


}

}

else
{

$newname3 = $titlename;
$newnamep3 = create_slug($newname3);
$newname = strtolower($newnamep3);  
}

// If using MySQL
$titlename = mysql_real_escape_string($titlename);
$oldname = mysql_real_escape_string($oldname);


$pageorder = $_POST['pageorder'];
$status = $_POST['status'];
$id = $_GET['id'];

$sql = "update productcategory set name = '$titlename', pages = '$newname', pageorder = '$pageorder', status = '$status', date=Now() where id='$id'";
$exe = mysql_query($sql);
/*
$sql2 = "update productsubcategory set name = '$titlename', link = '$newname' where name='$oldname'";
$exe2 = mysql_query($sql2);

$sql3 = "update productchildcategory set name = '$titlename', link = '$newname' where name='$oldname'";
$exe3 = mysql_query($sql3);*/

$sql4 = "update portfoliopages set fname = '$titlename', link = '$newname' where fname='$oldname'";
$exe4 = mysql_query($sql4);

if($exe)
{
$msg="<br><b>Congratulation!! Your $titlename - Portfolio Category Successfully Submitted</b><br><br>";
include('edit-productcategory.php');
 } 
 else
 {
	$msg="<br><b>Sorry!! Your $titlename - Portfolio Category Not Submitted</b><br><br>";
	include('edit-productcategory.php'); 
 }

}

?>