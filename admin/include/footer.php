<?php
session_start();
if(isset($_SESSION['login_user']) && $_SESSION['login_user'] <> '')
{
?><footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 5.6 Core Php
    </div>
    <strong>Copyright &copy; <?php echo date('Y');?>, Third Planet Foundation Developed By <a href="http://www.firstpointwebdesign.com/" target="_blank">First Point Creation</a>, </strong> All Rights
    Reserved
  </footer>
  
 <?php } else { ?>
  
 

<div style="display:none;">

<?php } ?>
  