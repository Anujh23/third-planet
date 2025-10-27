<?php include("include/connection1.php");?>
<?php
$idm = $_GET['pages'];

$presults = mysql_query("SELECT *FROM projectpages where pages='$idm'");
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
                            <h1 style="color:#fff;"><?php echo $rows['name'];?></h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="<?=$urlroot;?>" style="color:#fff;">Home</a>
                                </li>
                                <li style="color:#fff;"> TheMatic Areas </li>
                                <li class="active" style="color:#fff;">
                                    <?php echo $rows['name'];?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Breadcrumb Section End Here-->

            <div class="cause-page content-wrapper" id="page-info" style="padding: 60px 0; margin-left: 80px;">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div class="col-xs-12 col-sm-8">
                            <div style="padding-right: 40px;">
                                <?php if($rows['photo'] !="" AND $rows['imgstatus'] == 'Active') { ?>
                                    <img src="<?php echo $urlroot;?>admin/uploads/projects/<?php echo $rows['photo'];?>" 
                                         style="width: 100%; max-width: 400px; height: auto; float: left; margin-right: 30px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);" 
                                         alt="<?php echo $rows['name'];?>">
                                <?php } ?>
                                
                                <div class="detail-description" style="font-size: 15px; line-height: 1.8; color: #666666; text-align: justify;">
                                    <?php echo $rows['brief'];?>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="col-xs-12 col-sm-4">
                            <aside class="media">
                                <div class="shoping-filter clearfix" style="background: #f8f9fa; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                                    <h3 style="font-size: 18px; font-weight: 600; color: #333; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 3px solid #5a6b3d;">THEMATIC AREAS</h3>
                                    <nav class="side-nav">
                                        <ul style="list-style: none; padding: 0; margin: 0;">
                                        <?php
                                        $sqlquery=mysql_query("select * from projectpages order by pageorder asc");
                                        while($row=mysql_fetch_array($sqlquery)) { ?>
                                            <li style="margin-bottom: 12px;">
                                                <a href="<?=$urlroot;?>thematic-detail.php?pages=<?=$row['pages'];?>" 
                                                   style="color: #666; text-decoration: none; display: block; padding: 8px 12px; border-radius: 4px; transition: all 0.3s ease;">
                                                    <i class="fa fa-angle-double-right" style="margin-right: 10px; color: #5a6b3d;"></i><?=$row['name'];?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- site content ends -->

        <?php include("include/footer.php");?>
    </body>
</html>
