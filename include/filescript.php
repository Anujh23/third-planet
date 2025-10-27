<?php
// Ensure $urlroot is defined if not already set
if (!isset($urlroot)) {
    $urlroot = '../'; // Default relative path, adjust as needed
}
?>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic" rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
		<!-- <link href="assets/css/header.css" rel="stylesheet"> -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        
        
        
        <style type="text/css">
		body
		{
			font-family:Helvetica !important;
			/*margin-top:170px; /* with use fixed-topbar */
		}
		
		
.fixed-topbar {	
  /*position: fixed;*/
  top: 0;
  left: 0;
  /* z-index:9999; */
  width: 100%;
  background-color:rgb(251, 251, 251);
  /*height: 50px;*/
  }
  
  
  .kd-subheader {
	background: url(<?=$urlroot;?>assets/images/map1.png) center 0 no-repeat; height:969px;
    background-size:cover;
    text-align:center;
    position:relative;
}
	.thematic-img
	{
	width:100%;
	height:242px;	
	}
		@media only screen and (min-width: 220px) and (max-width: 768px) {
	.thematic-img
	{
	width:100%;
	height:auto;	
	}
		}
	@media only screen and (min-width: 320px) and (max-width: 420px) {

.kd-subheader {
  background: url(<?=$urlroot;?>assets/images/map1.png);
  background-size: 400px 135px;
  height: auto;
  position: relative;
  text-align: center;
  padding: 65px 0px;
}

.kd-subheader-text
{
	font-size:16px;
	margin-top:-60px;
}
}
@media only screen and (min-width: 420px) and (max-width: 620px) {

.kd-subheader {
  background: url(<?=$urlroot;?>assets/images/map1.png);
  background-size:520px 135px;
  height: auto;
  position: relative;
  text-align: center;
 padding: 65px 0px;

}

.kd-subheader-text
{
	font-size:16px;
	margin-top:-60px;
}}
</style>
        
        