<?php include("include/lock.php");?>
<?php
session_start();
if(isset($_SESSION['login_user']) && $_SESSION['login_user'] <> '')
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Third Planet Foundation </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<style type="text/css">
.msgpass
{
	color:#009933;
}

</style>
  
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b> Third Planet     </b> Foundation  </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b> Third Planet     </b>  Foundation  </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
		  
         
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin
                  <small>Today <?php $date = date("j F, Y"); echo $date;?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>!-->
        </ul>
      </div>

    </nav>
  </header>
  
  
  
  
   <!-- Left side column. contains the logo and sidebar -->
 
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        
        <li><a href="manage-cms.php"><i class="fa fa-file"></i> <span>Manage CMS</span></a></li>
        
        <li><a href="bannerpage-view.php"><i class="fa fa-file"></i> <span>Logo Change</span></a></li>
        
        <li><a href="contact_view.php"><i class="fa fa-file"></i> <span>Social Media</span></a></li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
           <span>Manage Service</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-service.php"><i class="fa fa-angle-double-right"></i> Add Service</a></li>
            <li><a href="view-service.php"><i class="fa fa-angle-double-right"></i> View Service</a></li>
            
          </ul>
        </li> 
        
        
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Manage Thematic Areas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-projects.php"><i class="fa fa-angle-double-right"></i> Add Thematic Areas </a></li>
            <li><a href="view-projects.php"><i class="fa fa-angle-double-right"></i> View Thematic Areas </a></li>
            
          </ul>
        </li>
        
        
      <!--
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
           <span>Manage Slide</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-slide.php"><i class="fa fa-angle-double-right"></i> Add Slide</a></li>
            <li><a href="view-slide.php"><i class="fa fa-angle-double-right"></i> View Slide</a></li>
            
          </ul>
        </li> !-->
        
       
         
         
        
        
        
        
        <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Manage Portfolio</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          
          <li><a href="add-productcategory.php"><i class="fa fa-angle-double-right"></i> Add Portfolio Category </a></li>
            <li><a href="view-productcategory.php"><i class="fa fa-angle-double-right"></i> View Portfolio Category </a></li>
          
            <li><a href="add-portfolio.php"><i class="fa fa-angle-double-right"></i> Add Portfolio </a></li>
            <li><a href="view-portfolio.php"><i class="fa fa-angle-double-right"></i> View Portfolio </a></li>
            
          </ul>
        </li> !-->
        
         
        
        <!--
       
          <li class="treeview">
          <a href="#">
            <i class="fa fa-comment"></i>
            <span>Manage Team</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-team.php"><i class="fa fa-angle-double-right"></i> Add Team</a></li>
            <li><a href="view-team.php"><i class="fa fa-angle-double-right"></i> View Team</a></li>
            
          </ul>
        </li> !--> 
        
        
        
        <!--
        
       <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Manage Gallery</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-sub-gallery.php"><i class="fa fa-angle-double-right"></i> Add Gallery</a></li>
            <li><a href="view-sub-gallery.php"><i class="fa fa-angle-double-right"></i> View Gallery</a></li>
            
          </ul>
        </li>
        
 !-->
        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-comment"></i>
            <span>Manage Faq</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-faq.php"><i class="fa fa-angle-double-right"></i> Add Faq</a></li>
            <li><a href="view-faq.php"><i class="fa fa-angle-double-right"></i> View Faq</a></li>
            
          </ul>
        </li>
        
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-comment"></i>
            <span>Manage Resources </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-resources.php"><i class="fa fa-angle-double-right"></i> Add Resources </a></li>
            <li><a href="view-resources.php"><i class="fa fa-angle-double-right"></i> View Resources </a></li>
            
          </ul>
        </li> !-->
        

        

        
        
        <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Manage Packages</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
        
        <li><a href="add-productcategory.php"><i class="fa fa-angle-double-right"></i> Add Packages Category </a></li>
            <li><a href="view-productcategory.php"><i class="fa fa-angle-double-right"></i> View Packages Category </a></li>
          
          
           <li><a href="add-product-sub-category.php"><i class="fa fa-angle-double-right"></i> Add Packages Sub Category</a></li>
            <li><a href="view-product-sub-category.php"><i class="fa fa-angle-double-right"></i> View Packages Sub Category </a></li>
          
          
          
          
            <li><a href="add-products.php"><i class="fa fa-angle-double-right"></i> Add Packages</a></li>
            <li><a href="view-products.php"><i class="fa fa-angle-double-right"></i> View Packages</a></li>
            
          </ul>
        </li> 
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comment"></i>
            <span>Manage Client </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-client.php"><i class="fa fa-angle-double-right"></i> Add Client </a></li>
            <li><a href="view-client.php"><i class="fa fa-angle-double-right"></i> View Client </a></li>
            
          </ul>
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comment"></i>
            <span>Manage Testimonial</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-testimonial.php"><i class="fa fa-angle-double-right"></i> Add Testimonial</a></li>
            <li><a href="view-testimonial.php"><i class="fa fa-angle-double-right"></i> View Testimonial</a></li>
            
          </ul>
        </li> 
        
        
        
        
       <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Manage News</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li><a href="add-news-category.php"><i class="fa fa-angle-double-right"></i> Add News Category</a></li>
            <li><a href="view-news-category.php"><i class="fa fa-angle-double-right"></i> View News Category</a></li> 
 
            <li><a href="add-news.php"><i class="fa fa-angle-double-right"></i> Add News</a></li>
            <li><a href="view-news.php"><i class="fa fa-angle-double-right"></i> View News</a></li>
            
          </ul>
        </li>

        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
           <span>Manage Events </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-projects.php"><i class="fa fa-angle-double-right"></i> Add Events </a></li>
            <li><a href="view-projects.php"><i class="fa fa-angle-double-right"></i> View Events </a></li>
            
          </ul>
        </li>  !-->
         
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Master Setting</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          
           
            
            
         
          <ul class="treeview-menu">
          
      
            
          
            <li><a href="change_password.php"><i class="fa fa-angle-double-right"></i> Change Password</a></li>
            
            
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <?php } else { ?>
  <center>
  <img src="bx_loader.gif"><br>
  
<font color="red"><a href="index.php">Please Login </a></font></center>

<script type='text/javascript'>
                    window.setTimeout(function() {
						alert('Sorry Your Time Over')
                        location.href = 'index.php';
                    }, 10000);
        </script>

<div style="display:none;">

<?php } ?>
  
  