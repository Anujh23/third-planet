<?php include("include/header.php");?>


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
	$fname = stripslashes($_POST['fname']);
	$city = stripslashes($_POST['city']);
	$duration = stripslashes($_POST['duration']);
	$location = stripslashes($_POST['location']);
	$price = stripslashes($_POST['price']);
	$childprice = stripslashes($_POST['childprice']);
	$babyprice = stripslashes($_POST['babyprice']);
	$depature = stripslashes($_POST['depature']);
	$metatoptitle = stripslashes($_POST['metatoptitle']);
	$metakeywords = stripslashes($_POST['metakeywords']);
	$metadescription = stripslashes($_POST['metadescription']);
	$cbrief = stripslashes($_POST['cbrief']);
	$tagline = stripslashes($_POST['tagline']);
	
	
}
else {
    $titlename = $_POST['name'];
	$fname = $_POST['fname'];
	$city = $_POST['city'];
	$duration = $_POST['duration'];
	$location = $_POST['location'];
	$price = $_POST['price'];
	$childprice = $_POST['childprice'];
	$babyprice = $_POST['babyprice'];
	$depature = $_POST['depature'];
	$metatoptitle = $_POST['metatoptitle'];
	$metakeywords = $_POST['metakeywords'];
	$metadescription = $_POST['metadescription'];
	$cbrief = $_POST['cbrief'];
	$tagline = $_POST['tagline'];
	
	
}


$sqlchk = "select name from productspages where name = '$titlename'";
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

$sqlchks = "select pages from productspages where pages = '$newname'";
$exechks = mysql_query($sqlchks);
$numchks = mysql_num_rows($exechks);

if ($numchks>0)
{
$i=$numchks; 
$i++;
$del_ids = $i;
$newname2 = "$newname"."".$del_ids; 
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



$path = "$imgroot/uploads/";
$randval = mt_rand(1,109999);

// If using MySQL

$titlename = mysql_real_escape_string($titlename);
$duration = mysql_real_escape_string($duration);
$location = mysql_real_escape_string($location);
$price = mysql_real_escape_string($price);
$childprice = mysql_real_escape_string($childprice);
$babyprice = mysql_real_escape_string($babyprice);
$depature = mysql_real_escape_string($depature);
$cbrief = mysql_real_escape_string($cbrief);
$tagline = mysql_real_escape_string($tagline);

$city = mysql_real_escape_string($city);
$citylink = strtolower(create_slug($city));

$metatoptitle = mysql_real_escape_string($metatoptitle);
$metakeywords = mysql_real_escape_string($metakeywords);
$metadescription = mysql_real_escape_string($metadescription);

$fname = mysql_real_escape_string($fname);

$imgstatus = $_POST['imgstatus'];

$pageorder = $_POST['pageorder'];

$packageid = $_POST['packageid'];
$pcode = $_POST['pcode'];


//product
$productid = $_POST['productid'];
$ses_sql=mysql_query("select * from productcategory where id='$productid'");
$productrow1=mysql_fetch_array($ses_sql);
$productname=$productrow1['name'];
$pclink = $productrow1['pages'];
//$pclink = strtolower(create_slug($productname));

$ses_sql2=mysql_query("select * from productsubcategory where pid='$productid' and fname='$fname'");
$productrow2=mysql_fetch_array($ses_sql2);
$link = $productrow2['pages'];


$brief = $_POST['brief'];

$brief1 = $_POST['brief1'];
$brief2 = $_POST['brief2'];
$brief3 = $_POST['brief3'];
$brief4 = $_POST['brief4'];
$brief5 = $_POST['brief5'];

$feature = $_POST['feature'];

$date = date("j F, Y");

$ext = explode('.', basename($_FILES['uploadphoto']['name']));   // Explode file name from dot(.)

$file_extension = end($ext); // Store extensions in the variable.

//echo "$file_extension";

$photo_name = $_FILES['uploadphoto']['name'];

$photo_namenew = $randval.$photo_name;

$phot_tmp_name = $_FILES['uploadphoto']['tmp_name'];

if($photo_name == "")

{


$sql = "insert productspages set packageid = '$packageid', pcode = '$pcode', feature = '$feature', name = '$titlename', pages = '$newname', fname = '$fname', link = '$link', pcname = '$productname', pclink = '$pclink', city = '$city', citylink = '$citylink', pageorder = '$pageorder', imgstatus = '$imgstatus', brief = '$brief', brief1 = '$brief1', brief2 = '$brief2', brief3 = '$brief3', brief4 = '$brief4', brief5 = '$brief5', cbrief = '$cbrief', tagline = '$tagline', duration = '$duration', location = '$location', price = '$price', childprice = '$childprice', babyprice = '$babyprice', depature = '$depature', metatoptitle = '$metatoptitle', metakeywords = '$metakeywords', metadescription = '$metadescription', date=Now()";
	$exe = mysql_query($sql);
	
	
	//Multiple Photo Gallery

$j = 0;     // Variable for indexing uploaded image.

for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

// Loop to get individual element from the array


$listingphoto_name = $_FILES['file']['name'][$i];

if($listingphoto_name == "")
			
			{
			$continueblankimg = "contiue";		
				
			}
			else {

$listingphoto_namenew = $randval.$listingphoto_name;

$j = $j + 1;      // Increment the number of uploaded images according to the files in array.

move_uploaded_file($_FILES['file']['tmp_name'][$i], $path.$listingphoto_namenew);


	
	             $url3 ="uploads/";
				 
				 $name3 = $listingphoto_namenew;

				 $new_w = "368";

				 $new_h = "300";

				 $thumburl = "uploads/package-gallery-thum/";

				 createthumbnail($name3, $url3,$new_w,$new_h,$thumburl);
				 
				 
				 
				 $name3 = $listingphoto_namenew;
				 $big_w = "800";
				 $big_h = "800";
				 $thumburl_big = "uploads/package-gallery/";
				 createthumbnail($name3, $url3,$big_w,$big_h,$thumburl_big);
				 
				 $sqlgallery = "insert packagegallery set pcode = '$pcode', photo = '$listingphoto_namenew', name = '$titlename', pages = '$newname', date = '$date'";
				 $exegallery = mysql_query($sqlgallery);
				
				unlink("uploads/".$listingphoto_namenew);


}
}

//Multiple Photo Gallery Ends


if($exe)
{
$msg="<br><b>Congratulation!! Your $titlename - Packages Page Successfully Submitted</b><br><br>";


 }
 else
 {
$msg="<br><b>Congratulation!! Your $titlename - Packages Page Not Successfully Submitted</b><br><br>";	 
 }
 
 
}



else if ($file_extension == 'png' or  $file_extension == 'PNG' or  $file_extension == 'jpeg' or  $file_extension == 'JPEG' or  $file_extension == 'JPG' or  $file_extension == 'jpg' or $file_extension == 'gif' or $file_extension == 'GIF' )
	{
		
   move_uploaded_file($phot_tmp_name,$path.$photo_namenew);
	$url3 ="uploads/";


                 $name3 = $photo_namenew;

				 $new_w = "368";

				 $new_h = "300";

				 $thumburl = "uploads/products-thums/";

				 createthumbnail($name3, $url3,$new_w,$new_h,$thumburl);
				 
				 
				 $name3 = $photo_namenew;
				 $big_w = "1265";
				 $big_h = "331";
				 $thumburl_big = "uploads/products/";
				 
				 createthumbnail($name3, $url3,$big_w,$big_h,$thumburl_big);


				 
	
unlink("uploads/".$photo_namenew);



	$sql = "insert productspages set packageid = '$packageid', pcode = '$pcode', feature = '$feature', name = '$titlename', pages = '$newname', fname = '$fname', link = '$link', pcname = '$productname', pclink = '$pclink', city = '$city', citylink = '$citylink', photo = '$photo_namenew', pageorder = '$pageorder', imgstatus = '$imgstatus', brief = '$brief',  brief1 = '$brief1', brief2 = '$brief2', brief3 = '$brief3', brief4 = '$brief4', brief5 = '$brief5', cbrief = '$cbrief', tagline = '$tagline', duration = '$duration', location = '$location', price = '$price', childprice = '$childprice', babyprice = '$babyprice', depature = '$depature', metatoptitle = '$metatoptitle', metakeywords = '$metakeywords', metadescription = '$metadescription', date=Now()";
	$exe = mysql_query($sql);
	
	
	//Multiple Photo Gallery

$j = 0;     // Variable for indexing uploaded image.

for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

// Loop to get individual element from the array


$listingphoto_name = $_FILES['file']['name'][$i];

if($listingphoto_name == "")
			
			{
			$continueblankimg = "contiue";		
				
			}
			else {

$listingphoto_namenew = $randval.$listingphoto_name;

$j = $j + 1;      // Increment the number of uploaded images according to the files in array.

move_uploaded_file($_FILES['file']['tmp_name'][$i], $path.$listingphoto_namenew);


	
	             $url3 ="uploads/";
				 
				 $name3 = $listingphoto_namenew;

				 $new_w = "512";

				 $new_h = "450";

				 $thumburl = "uploads/package-gallery-thum/";

				 createthumbnail($name3, $url3,$new_w,$new_h,$thumburl);
				 
				 
				 
				 $name3 = $listingphoto_namenew;
				 $big_w = "800";
				 $big_h = "800";
				 $thumburl_big = "uploads/package-gallery/";
				 createthumbnail($name3, $url3,$big_w,$big_h,$thumburl_big);
				 
				 $sqlgallery = "insert packagegallery set pcode = '$pcode', photo = '$listingphoto_namenew', name = '$titlename', pages = '$newname', date = '$date'";
				 $exegallery = mysql_query($sqlgallery);
				
				unlink("uploads/".$listingphoto_namenew);


}
}

//Multiple Photo Gallery Ends

	
	
	
 if($exe)
{
$msg="<br><b>Congratulation!! Your $titlename - Packages Page Successfully Submitted</b><br><br>";


 }
 else
 {
$msg="<br><b>Congratulation!! Your $titlename - Packages Page Not Successfully Submitted</b><br><br>";	 
 }
 
	} 
	
else 
{


$msg="<b>Sorry $file_extension is invalid, allowed extentions are:  jpeg, JPEG, JPG, PNG, gif, GIF, jpg, png</b><br><br>";
//include('service_upload.php');


}
}



// funtion to crop image 			

function createthumbnail($name, $url,$new_w,$new_h,$thumburl)

{

	$system=explode(".", $name);

	$filep = end($system);
	
	 //echo "<pre>";
	//print_r($filep);
	//die("VED");
	
	//$src_img=imagecreatefromjpeg($url.$name);
	
	//Details image Croping Details
	
	if($filep == "png")
	{
		$src_img = imagecreatefrompng($url.$name);
	} 
	
	else if($filep == "PNG")
	{
		$src_img = imagecreatefrompng($url.$name);
	} 
	
	else if($filep == "jpeg")
	{
		$src_img = imagecreatefromjpeg($url.$name);
	} 
	
	else if($filep == "JPEG")
	{
		$src_img = imagecreatefromjpeg($url.$name);
	} 
	
	else if($filep == "JPG")
	{
		$src_img = imagecreatefromjpeg($url.$name);
	} 
	
	else if($filep == "jpg")
	{
		$src_img = imagecreatefromjpeg($url.$name);
	} 
	
	else if($filep == "gif")
	{
		$src_img = imagecreatefromgif($url.$name);
	} 
	
	else if($filep == "GIF")
	{
		$src_img = imagecreatefromgif($url.$name);
	} 

        else if($filep == "bmp")
	{
		$src_img = imagecreatefromwbmp($url.$name);
	} 

        else if($filep == "BMP")
	{
		$src_img = imagecreatefromwbmp($url.$name);
	} 
	
	//Details image Croping End Details




	# get dimensions of old image

	$old_x=imagesx($src_img);

	$old_y=imagesy($src_img);

	if ($old_x > $new_w)

	{

		$thumb_w = $new_w;

		$ratio = $new_w/$old_x;

		$thumb_h = intval($old_y*$ratio);

		if($thumb_h > $new_h)

		{

			$ratio = $new_h/$old_y;

			$thumb_w = intval($old_x*$ratio);

			$thumb_h = intval($new_h);

		}

	

	}

	elseif($old_x <= $new_w) // if old width is less then current width

	{

		if($old_y > $new_h)

		{

			$ratio = $new_h/$old_y;

			$thumb_w = intval($old_x*$ratio);

			$thumb_h = intval($new_h);

		}

		else

		{

			$thumb_w =$old_x;

			$thumb_h=$old_y;

		}

	}



	$dst_img=imagecreatetruecolor($thumb_w, $thumb_h);

	# resize source image and place the copy in the destination image

	imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 

	# get file name, add tn_ and create thumbnail according to $makeimg

	//$filename=$system[0].".".$system[1];
    $filename=$name;

	

	imagejpeg($dst_img,$thumburl.$filename); 

	# destroy both image objects (to save memory)

	imagedestroy($dst_img); 

	imagedestroy($src_img); 

	# initialise name

	$name="";

} 


  
?>


<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(location_id) {		
		
		var strURL="findproduct.php?location="+location_id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	</script>  



<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Packages
       
       <!-- <small>Preview</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Manage Packages</a></li>
        <li class="active">Add Packages</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Packages</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-10 col-md-offset-1">
			
              <form class="form-horizontal" method="Post" action="<?php echo $PHP_SELF;?>" name="donation" enctype="multipart/form-data" onsubmit="return valid_donation();">
    
	<div class="msgpass"><?php echo $msg;?></div>
			  
		<div class="form-group">
      <label class="control-label col-sm-2">Packages Category</label>
      <div class="col-sm-4">
       <select name="productid" id="productid" class="form-control" onChange="getState(this.value)" required>
       <option value="">Select Packages Category</option>
       
       <?php
$sql="select * from productcategory where status='Active' order by pageorder asc";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
	?>				
        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
        
        <?php } ?>
        
       </select>
      </div>
    </div>	 
    
    
      <div class="form-group">
      <label class="control-label col-sm-2">Packages Sub Category</label>
      <div class="col-sm-4">
       <div id="statediv">
       <select name="fname" id="fname" required class="form-control">
       <option value="">Select Packages Sub Category</option>
             
       
</select>
</div>

      </div>
    </div>	 
    
    
			  
    <div class="form-group">
      <label class="control-label col-sm-2">Package Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" required>
        
        <?php
		$sqlp = "select *from productspages order by packageid desc";
		$queryp = mysql_query($sqlp);
		$rowp = mysql_fetch_array ($queryp);
		$packageid = $rowp['packageid'];
		$finaluserid = $packageid + 1;
		?>
												
												
        <input type="hidden" readonly class="form-control" name="pcode" id="pcode" value="TR00<?php if($packageid < 9){?>0<?php echo $finaluserid;?><?php } else {?><?php echo $finaluserid;?><?php } ?>" required>
	                                                
		<input type="hidden" name="packageid" id="packageid" value="<?php echo $finaluserid;?>">
        
        
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2"> Duration</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="duration" id="duration" required>
      </div>
    </div>
   
   
    
    <div class="form-group">
      <label class="control-label col-sm-2"> Price</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="price" id="price" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2"> Del Price</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="childprice" id="childprice" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2"> Tag Lines</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="tagline" id="tagline" required> </textarea>
      </div>
    </div>
    
    
    <!--
    <div class="form-group">
      <label class="control-label col-sm-2"> Baby Price</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="babyprice" id="babyprice" required>
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2"> Location</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="location" id="location" required>
      </div>
    </div>
   
   
   <div class="form-group">
      <label class="control-label col-sm-2"> Depature</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="depature" id="depature" required>
      </div>
    </div> !-->
   
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Page Order</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" name="pageorder" id="pageorder" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" > Popular Tour Packages </label>
      <div class="col-sm-8">
       <div class="radio">
                    <label class="col-sm-2">
                      <input type="radio" name="feature" id="feature" value="Yes" required>
                      Yes
                    </label>
                    
                    <label class="col-sm-2">
                      <input type="radio" name="feature" id="feature" value="No" checked required>
                    No
                    </label>
                  </div>
      </div>
    </div>
	

	
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Package Photo</label>
      <div class="col-sm-10">
        <input type="file" name="uploadphoto" id="uploadphoto"  />
      </div>
    </div>
	
    
    
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Image Status</label>
      <div class="col-sm-4">
    <select name="imgstatus" id="imgstatus" class="form-control" required>
       <option value="">Select Image Status</option>
        <option value="Active">Active</option>
         <option value="DeActive">DeActive</option>
       </select>
       
        </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" >Package Gallery </label>
      <div class="col-sm-10">
       <input type="file" name="file[]" multiple accept="image/*" id="file">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" ></label>
      <div class="col-sm-10">
       <font color="green">For Multiple Images Add : - Ctrl + Select Images </font>
      </div>
    </div>
    
    
    
    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >About Trip </label>
      <div class="col-sm-10">
       <textarea name="cbrief" id="cbrief">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'cbrief',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
      </div>
    </div>
	
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Description</label>
      <div class="col-sm-10">
        
        <textarea name="brief" id="brief">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'brief',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
        
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" >Itinerary</label>
      <div class="col-sm-10">
        
        <textarea name="brief1" id="brief1">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'brief1',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
        
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Date & Price </label>
      <div class="col-sm-10">
        
        <textarea name="brief2" id="brief2">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'brief2',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
        
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Terms Conditions </label>
      <div class="col-sm-10">
        
        <textarea name="brief3" id="brief3">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'brief3',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
        
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Inclusions </label>
      <div class="col-sm-10">
        
        <textarea name="brief4" id="brief4">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'brief4',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
        
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Exclusion </label>
      <div class="col-sm-10">
        
        <textarea name="brief5" id="brief5">
</textarea>
                          <script type="text/javascript">
			CKEDITOR.replace( 'brief5',
			 {
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
			 } 
			 );			
			 </script>
        
      </div>
    </div>
    
    
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" >Meta Title</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="metatoptitle" id="metatoptitle" required></textarea>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" >Meta Keywords</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="metakeywords" id="metakeywords" style="height:80px;"></textarea>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" >Meta Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="metadescription" id="metadescription" style="height:80px;"></textarea>
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn  btn-primary">Submit</button>
      </div>
    </div>
  </form>
            </div>
            
            <div class="clearfix"></div>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
	CKEDITOR.replace('editor2');
	CKEDITOR.replace('editor3');
	CKEDITOR.replace('editor4');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

</body>
</html>
