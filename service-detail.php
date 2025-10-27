<?php include("admin/include/connection1.php");?>
<?php
$idm = $_GET['pages'];
$presults = mysql_query("SELECT *FROM servicepages where pages='$idm'");
?>

<?php $count=mysql_num_rows($presults);
if ($count == 0)
{
header("Location: $urlroot"); 
//echo "$count";
}
?>
<?php $rows = mysql_fetch_array($presults);?>
<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php echo $rows['metatoptitle'];?></title>
    
    <meta name="keywords" content="<?php echo $rows['metakeywords'];?>">
    <meta name="description" content="<?php echo $rows['metadescription'];?>">
		<?php include("include/filescript.php");?>
	

	</head>
	<body>

		<?php include("include/header.php");?>

		
			<!-- site content -->
			<div id="main">
				<!--Breadcrumb Section Start Here-->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1  style="color:#fff;"><?php echo $rows['name'];?></h1>
								<ul class="breadcrumb">
									<li>
										<a href="<?=$urlroot;?>"  style="color:#fff;">Home</a>
									</li>
                                    <li  style="color:#fff;"> Services </li>
									<li class="active"  style="color:#fff;">
										<?php echo $rows['name'];?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here-->

				<div class="cause-page content-wrapper" id="page-info">
					<div class="container">

						<!-- our causes detail-->

						<div class="anim-section">
							<div class="row">
								<div class="col-xs-12 col-sm-8 left-block">

									<div class="article-list-large causes-description progressbar">

										<div class="anim-section">
											
											<p class="detail-summary">
                                            <?php if($rows['photo'] !="" AND $rows['imgstatus'] == 'Active') { ?>
                                            
											<img src="<?php echo $urlroot;?>admin/uploads/service/<?php echo $rows['photo'];?>" Width="400" style="float:left; padding-right:25px;" alt="<?php echo $rows['name'];?>">
                                            
                                            <?php } ?>
											
												   <div class="detail-description">

												<?php echo $rows['brief'];?>
                                                
                                               
                                                     </p>
												

												
											</div>
										</div>

									</div>
									
								</div>

								<div class="col-xs-12 col-sm-4 left-block ">
								
									<aside class="media">
									<div class="shoping-filter clearfix">
												<h3 class="space-top"> Services </h3>
												<nav class="side-nav">
													<ul>
                                                    <?php
$sqlquery=mysql_query("select * from servicepages order by pageorder asc");
while($row=mysql_fetch_array($sqlquery)) { ?>
			
														<li><a href="<?=$urlroot;?>service-detail.php?pages=<?=$row['pages'];?>"><i class="fa fa-angle-double-right bullet-arrow"></i><?=$row['name'];?></a></li>
														<?php } ?>
                                                        
                                                        
													</ul>
												</nav>
											</div>
										

									</aside>
									
									
											
											
											

									<!-- Archives   -->
								<!--	<aside class="media">
										<h3>Archives</h3>
										<ul class="archives">
											<li>
												<a href="#">
												March 2013 <span class="pull-right">(12)</span>
												</a>
											</li>
											<li>
												<a href="#">
												February 2013 <span class="pull-right">(12)</span>
												</a>
											</li>
											<li><a href="#">
												January 2013 <span class="pull-right">(43)</span>
											</a>
											</li>
											<li><a href="#">
												December 2012 <span class="pull-right">(12)</span>
											</a>
											</li>
											<li>
												<a href="#">
												November 2012 <span class="pull-right">(32)</span>
												</a>
											</li>
										</ul>
									</aside>-->

									<!-- Categories  -->
									<!--<aside class="media">
										<h3>Categories</h3>
										<ul class="archives">
											<li>
												<a href="#">
												Integer <span class="pull-right">(20)</span>
												</a>
											</li>
											<li><a href="#">
												Accumsan <span class="pull-right">(18)</span>
											</a>
											</li>
											<li><a href="#">
												Fermentum <span class="pull-right">(15)</span>
											</a>
											</li>
											<li>
												<a href="#">
												Vehicula <span class="pull-right">(12)</span>
												</a>
											</li>
											<li>
												<a href="#">
												Magna <span class="pull-right">(30)</span>
												</a>
											</li>

										</ul>
									</aside>-->

									<!-- Text Widget -->
									<!--<div class="text-widget">
										<h3>Text Widget</h3>
										<p>
											Placerat vel augue vitae aliquam tinciuntool sed hendrerit diam in mattis ollis don ec  tincidunt magna nullam hedrerit pellen tesque pelle.
										</p>
									</div>-->

								</div>
							</div>

						</div>

						<!-- our causes detail-->

					</div>

				</div>

			</div>
			
			<!-- site content ends -->
					</div>
				</div>
			
			

			<?php include("include/footer.php");?>