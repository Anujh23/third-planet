<?php include("include/connection1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>About Us</title>
    <?php include("include/filescript.php"); ?>
</head>
<body>
    <?php include("include/header.php"); ?>
    
    <!-- site content -->
    <div id="main">
        <!-- Breadcrumb Section Start Here -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 style="color:#fff;">About Us</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?=$urlroot;?>" style="color:#fff;">Home</a>
                            </li>
                            <li class="active" style="color:#fff;">
                                About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End Here -->
        
        <?php
        $aboutusrow = mysql_query("SELECT * FROM aboutus WHERE id='1'");
        $aboutustext = mysql_fetch_array($aboutusrow);
        ?>
        
        <div class="content-wrapper" id="page-info">
            <div class="container">
                <!-- Our Story Section Start Here -->
                <section class="our-story">
                    <div class="row">
                        <div class="col-xs-12">
                            <header class="story-heading section-header text-center">
                                <h2><?=$aboutustext['name'];?> <strong><?=$aboutustext['aboutheading1'];?></strong></h2>
                            </header>
                        </div>
                    </div>

                    <div class="row">
                        <?php if($aboutustext['photo'] != "" AND $aboutustext['imgstatus'] == 'Active') { ?>
                            <div class="col-xs-12 col-sm-5">
                                <div class="about-image">
								<img src="<?=$urlroot?>admin/uploads/aboutus/76938tab-image.jpg"
								alt="<?=htmlspecialchars($aboutustext['name'])?>"
								class="img-responsive"
								style="width:100%; height:auto; border-radius:8px;">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7">
                                <div class="about-content">
                                    <?=$aboutustext['brief'];?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-xs-12">
                                <div class="about-content">
                                    <?=$aboutustext['brief'];?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
                <!-- Our Story Section End Here -->
            </div>
        </div>
    </div>
    <!-- site content ends -->
    
    <?php include("include/footer.php"); ?>
</body>
</html>
