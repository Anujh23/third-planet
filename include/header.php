<div id="wrapper">
    <!--Header Section Start Here -->
    <header id="header">
        <div class="fixed-topbar">
            <div class="container">
                <?php
                $bannerresult = mysqli_query($connection, "Select * from bannerpage where id='1'");
                $bannerrow = mysqli_fetch_array($bannerresult);
                ?>     
                <style>
                .header-logo img {
                    max-width: 100%;
                    max-height: 48px;
                    width: auto;
                    height: auto;
                    object-fit: contain;
                    display: block;
                    transition: filter 0.2s;
                }

                /* Mobile-first responsive styles */
                @media (max-width: 991px) {
                    .header-bar {
                        height: 60px;
                        padding: 0 15px;
                    }
                    
                    .header-bar::after {
                        display: none; /* Hide semicircle on mobile */
                    }
                    
                    .header-nav-area {
                        position: fixed;
                        top: 60px;
                        left: -100%;
                        width: 80%;
                        height: calc(100vh - 60px);
                        background: #fff;
                        transition: left 0.3s ease;
                        z-index: 1000;
                        padding: 20px 0;
                        overflow-y: auto;
                    }
                    
                    .header-nav-area.active {
                        left: 0;
                    }
                    
                    .header-nav-area .main-nav {
                        width: 100%;
                    }
                    
                    .header-nav-area .navbar-nav {
                        display: flex;
                        flex-direction: column;
                        padding: 0;
                        margin: 0;
                        width: 100%;
                    }
                    
                    .header-nav-area .navbar-nav > li {
                        display: block;
                        width: 100%;
                        text-align: left;
                        padding: 0;
                        border-bottom: 1px solid #f0f0f0;
                    }
                    
                    .header-nav-area .navbar-nav > li.nav-logo {
                        display: none; /* Hide circular logo in mobile nav */
                    }
                    
                    .dropdown-menu {
                        position: static !important;
                        float: none;
                        width: 100%;
                        box-shadow: none;
                        border: none;
                        display: none;
                    }
                    
                    .dropdown-menu.show {
                        display: block;
                    }
                    
                    .mobile-toggle {
                        display: block !important;
                        background: none;
                        border: none;
                        font-size: 24px;
                        color: #fff;
                        cursor: pointer;
                        padding: 10px;
                    }
                    
                    #main {
                        margin-top: 80px;
                    }
                }

                /* Desktop styles */
                @media (min-width: 992px) {
                    .mobile-toggle {
                        display: none !important;
                    }
                    
                    .header-nav-area {
                        display: block !important;
                    }
                }

                /* Existing styles for larger screens */
                @media (min-width: 768px) {
                    .header-bar::after { 
                        width: 200px; 
                        height: 100px; 
                        bottom: -50px; 
                    }
                    
                    .header-nav-area .navbar-nav > li.nav-logo a { 
                        width: 140px; 
                        height: 140px; 
                    }
                    
                    .header-nav-area .navbar-nav > li.nav-logo a::before { 
                        width: 160px; 
                        height: 160px; 
                        bottom: -10px; 
                    }
                    
                    #main { 
                        margin-top: 180px; 
                    }
                }
                .primary-header nav {
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    padding: 0 20px 0 30px;
                }
                .header-bar {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    position: fixed;
                    top: 0;
                    left: 0;
                    height: 64px;
                    background: #00a8a8; /* teal */
                    border: 2px solid #cccccc;
                    border-top: none;
                    z-index: 1000;
                    justify-content: space-between;
                    padding: 0 16px;
                }
                /* Teal semicircle protruding below the header bar */
                .header-bar::after{
                    content: '';
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translateX(calc(-52% - 35px));
                    width: 200px;
                    height: 100px;
                    background: #00a8a8;
                    border-radius: 0 0 100px 100px;
                    z-index: 1;
                    pointer-events: none;
                    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
                }
                /* Prevent content from sliding under fixed header (account for semicircle) */
                #main { margin-top: 180px; }
                .header-logo {
                    position: static;
                    left: auto;
                    top: auto;
                    transform: none;
                    height: 64px;
                    width: auto;
                    padding: 8px 0;
                    box-shadow: none;
                }
                .header-menu {
                    position: relative;
                    margin: 0 auto;
                }
                </style>
                <div class="header-bar">
                    <div class="header-logo">
                        <!-- <a href="<?=$urlroot;?>" class="brand2" title="Third Planet Foundation">
                            <img src="<?php echo $urlroot;?>logo_black.png" 
                                alt="Third Planet Foundation">
                        </a> -->
                    </div>
                    <!-- Mobile toggle button -->
                    <!-- <button class="mobile-toggle" type="button" onclick="document.body.classList.toggle('nav-open')" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars" style="font-size:20px;color:#fff;"></i>
                    </button> -->

                    <div class="header-menu">
                <?php
                $contactresult = mysqli_query($connection, "Select * from contactcategory where id='1'");
                $socialdata = mysqli_fetch_array($contactresult);
                ?>
                <style>
                    .header-nav-area { position: relative; }
                    .header-nav-area li.dropdown { position: relative; }
                    .header-nav-area .dropdown-menu {
                        display: none;
                        position: absolute;
                        top: calc(100% + 10px);
                        left: 0 !important;
                        right: auto !important;
                        transform: none !important;
                        z-index: 1001;
                        min-width: 260px;
                        max-width: 420px;
                        padding: 0;
                        background: #ffffff !important;
                        border-radius: 4px;
                        box-shadow: 0 10px 22px rgba(0,0,0,0.12);
                        border: 1px solid #e6e9ec !important;
                        overflow: visible;
                    }
                    .header-nav-area .dropdown-menu ul {
                        list-style: none;
                        margin: 0;
                        padding: 0;
                    }
                    .header-nav-area .dropdown-menu li { margin: 0; border: 0 !important; }
                    .header-nav-area .dropdown-menu li + li { border-top: 0 !important; }
                    .header-nav-area .dropdown-menu li a {
                        display: block;
                        white-space: normal;
                        overflow-wrap: anywhere;
                        word-break: normal;
                        line-height: 1.6;
                        padding: 10px 18px;
                        font-size: 16px;
                        font-weight: 700;
                        color: rgb(0, 5, 10) !important;
                        background: transparent;
                        border: 0 !important;
                        border-radius: 0;
                        box-shadow: none;
                        text-decoration: none;
                        transition: background .15s ease, color .15s ease;
                    }
                    .header-nav-area .dropdown-menu li a:hover,
                    .header-nav-area .dropdown-menu li a:focus,
                    .navbar-default .dropdown-menu > li > a:hover,
                    .navbar-default .dropdown-menu > li > a:focus,
                    .dropdown-menu > li > a:hover,
                    .dropdown-menu > li > a:focus {
                        background-color:rgb(151, 227, 233) !important;
                        color: #ffffff !important;
                        background-image: none !important; /* override bootstrap/theme gradients */
                    }
                    /* Highlight the parent nav item for better theme */
                    .submenu-icon { padding: 6px 8px; border-radius: 0;transition: color .2s ease; }
                    /* Add a Font Awesome down arrow after labels like ABOUT */
                    .submenu-icon:after {
                        content: "\f107"; /* fa-chevron-down */
                        font-family: "FontAwesome";
                        display: inline-block;
                        margin-left: 8px;
                        line-height: 1;
                        color:#00a8a8;
                    }
                    .submenu-icon:hover { color: #ffffff !important; }
                    .submenu-icon:hover:after { color: #ffffff !important; }
                    /* Hide old glyphicon chevrons next to label to prevent duplicates */
                    .submenu-icon .glyphicon { display: none !important; }
                    /* Show on hover for dropdown or submenu parent */
                    .header-nav-area li.dropdown:hover > .dropdown-menu,
                    .header-nav-area li:hover > .dropdown-menu { display: block; }

                    /* Force center alignment for the main nav (override Bootstrap floats) */
                    .header-nav-area .main-nav { width: 100%; text-align: center; }
                    .header-nav-area .navbar-nav { float: none !important; display: inline-block; margin: 0 auto; gap:12px !important; position: relative; z-index: 3; }
                    .header-nav-area .navbar-nav > li { float: none; display: inline-block; }
                    .header-nav-area .navbar-nav > li.nav-logo { padding: 0 80px 0 120px; /* more space on left to balance 3 vs 4 items */ }
                    .header-nav-area .navbar-nav > li.nav-logo img {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 85%;
                        height: auto;
                        max-width: none;
                        max-height: none;
                        display: block;
                        margin: 0;
                        object-fit: contain;
                        pointer-events: none;
                    }
                    /* Circular white logo badge centered over the teal curve */
                    .header-nav-area .navbar-nav > li.nav-logo a {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: 140px;
                        height: 140px;
                        border-radius: 50%;
                        background: #ffffff;
                        border: 0;
                        /* position: relative; */
                        transform: translate(-35px, 10px);
                        overflow: hidden;
                        z-index: 9;
                        text-decoration: none;
                    }
                    .header-nav-area .navbar-nav > li.nav-logo a::before { display:none; }
                    /* Make each dropdown position relative to its own LI so it opens under that heading */
                    .header-nav-area .navbar-nav > li.dropdown { position: relative; }
                    /* Improve link readability and spacing */
                    .header-nav-area .navbar-nav > li > a { color:#ffffff !important; font-weight:700; padding: 10px 10px; position: relative; z-index: 12; }
                    .header-nav-area .navbar-nav > li > a:hover { color:#ffffff !important; text-decoration:none; }
                </style>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="header-nav-area" style="flex:1;display:flex;align-items:center;justify-content:center;gap:20px;white-space:nowrap;flex-wrap:nowrap;">
                    <nav class="main-nav" style="flex:1;">
                        <ul class="nav navbar-nav" style="display:flex;gap:18px;align-items:center;justify-content:center;margin-bottom:0;">
                            <!-- <li><a href="<?=$urlroot;?>">Home</a></li> -->
                            <!-- <li><a href="<?=$urlroot;?>aboutus.php">About Us</a></li> -->
                            <li class="dropdown"><a href="<?=$urlroot;?>#About Us" data-toggle="dropdownhold" class="submenu-icon">ABOUT<span class="glyphicon glyphicon-chevron-down"></span><span class="glyphicon glyphicon-chevron-up"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="<?=$urlroot;?>ourmission.php"><b>OUR MISSION</b></a></li>
                                    <li><a href="<?=$urlroot;?>our-story.php"><b>OUR STORY</b></a></li>
                                    <li><a href="<?=$urlroot;?>our-pillars.php"><b>OUR PILLARS</b></a></li>
                                    <li><a href="<?=$urlroot;?>our-values.php"><b>OUR VALUES</b></a></li>
                                    <li><a href="<?=$urlroot;?>resource-hub.php"><b>RESOURCE HUB</b></a></li>
                                    <!-- <li><a href="<?=$urlroot;?>aboutus.php">GALLERY</a></li> -->
                                </ul>
                            </div>

                            <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdownhold" class="submenu-icon">HOW WE WORK <span class="glyphicon glyphicon-chevron-down"></span><span class="glyphicon glyphicon-chevron-up"></span></a>
                            <div class="dropdown-menu">
                                <ul>    
                                    <li><a href="<?=$urlroot;?>our-process.php"><b>OUR PROCESS</b></a></li>
                                    <li><a href="<?=$urlroot;?>our-approach.php"><b>OUR APPROACH</b></a></li>
                                    <li><a href="<?=$urlroot;?>stories.php"><b>STORIES</b></a></li>
                                    <!-- <li><a href="<?=$urlroot;?>aboutus.php">GALLERY</a></li> -->
                                </ul>
                            </div>


                            <!-- <li><a href="<?=$urlroot;?>#our-services">HOW WE WORK</a></li> -->

                            <!-- <li class="dropdown"><a href="<?=$urlroot;?>#our-thematicareas" data-toggle="dropdownhold" class="submenu-icon">THEMATIC AREAS <span class="glyphicon glyphicon-chevron-down"></span><span class="glyphicon glyphicon-chevron-up"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <?php
                                        $sqlquery=mysqli_query($connection, "select * from projectpages order by pageorder asc");
                                        while($row=mysqli_fetch_array($sqlquery))
                                        {
                                        ?>
                                            <li><a href="<?=$urlroot;?>thematic-detail.php?pages=<?=$row['pages'];?>"><?=$row['name'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li> -->
                            <!-- <li><a href="javascript:void(0);"> PROJECTS</a></li> -->
                            <!-- <li><a href="<?=$urlroot;?>#our-presence"> PRESENCE</a></li> -->
                            <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdownhold" class="submenu-icon">PROJECTS <span class="glyphicon glyphicon-chevron-down"></span><span class="glyphicon glyphicon-chevron-up"></span></a>
                            <div class="dropdown-menu">
                                    <ul>
                                        <?php
                                        $sqlquery=mysqli_query($connection, "select * from projectpages order by pageorder asc");
                                        while($row=mysqli_fetch_array($sqlquery))
                                        {
                                        ?>
                                            <li><a href="<?=$urlroot;?>thematic-detail.php?pages=<?=$row['pages'];?>"><b><?=$row['name'];?></b></a></li>
                                        <?php } ?>
                                    </ul>
                            </div>
                            </li>
                            <li class="nav-logo"><a href="<?=$urlroot;?>" title="Third Planet Foundation"><img src="<?=$urlroot;?>logo_black.png" alt="Third Planet Foundation"></a></li>
                        

                            <!-- <a href="<?=$urlroot;?>.php">PROJECTS</a></li> -->
                            <!-- <li><a href="<?=$urlroot;?>impact.php">IMPACT</a></li> -->

                            <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdownhold" class="submenu-icon">IMPACT <span class="glyphicon glyphicon-chevron-down"></span><span class="glyphicon glyphicon-chevron-up"></span></a>
                            <div class="dropdown-menu">
                                <ul>    
                                    <li><a href="<?=$urlroot;?>our-presence.php"><b>Project Atlas</b></a></li>
                                </ul>
                            </div>

                            <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdownhold" class="submenu-icon">MEDIA <span class="glyphicon glyphicon-chevron-down"></span><span class="glyphicon glyphicon-chevron-up"></span></a>
                            <div class="dropdown-menu">
                                <ul>    
                                    <li><a href="<?=$urlroot;?>gallery.php"><b>GALLERY</b></a></li>
                                    <li><a href="<?=$urlroot;?>reading-corner.php"><b>READING CORNER</b></a></li>
                                </ul>
                            </div>
                            <li><a href="<?=$urlroot;?>#our-partners"> PARTNERS </a></li>
                            <!-- <li><a href="<?=$urlroot;?>gallery.php">GALLERY</a></li> -->
                            <li><a href="<?=$urlroot;?>contactus.php">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- <a href="volunteer.html" class="btn btn-default btn-volunteer">Become volunteer</a> -->
                        <!-- <ul class="social-icons hidden-xs">
                            <li style="color:#fff !important;">
                                <i class="fa fa-envelope"> <?=$socialdata['email'];?></i>
                            </li> -->
                            <!-- <li style="color:#fff !important;">
                                <i class="fa fa-phone"> <?=$socialdata['googleplus'];?> </i>
                            </li> -->
                        </ul>
                            <div class="social-icons-left">
                            <ul class="social-icons">
                                <li>
                                    <a href="<?=$socialdata['facebook'];?>" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                            <li>
                                <a href="<?=$socialdata['twitter'];?>" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$socialdata['linkedin'];?>" target="_blank" title="LinkedIn">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$socialdata['instagram'];?>" target="_blank" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </header>
    <!-- Header Section End Here -->
</div>
