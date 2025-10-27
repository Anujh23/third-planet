<?php include('include/lock.php');

$location=intval($_GET['location']);

$query="SELECT * from productsubcategory where pid='$location' order by pageorder asc";
$result=mysql_query($query);

?>

<select name="fname" id="fname" class="form-control" required>
<option value="">Select Packages Sub Category</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['fname']?>"><?php echo $row['fname']?></option>
<?php } ?>
</select>