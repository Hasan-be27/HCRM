<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header id="header" data-transparent="true" data-fullwidth="true" class="dark" data-responsive-fixed="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.php">
                            <span class="logo-default lo"><img src="images/logo1.png" alt="HCRM" style="padding-bottom:0px;"></span>
                            <span class="logo-dark lo"><img src="images/logo1.png" alt="HCRM" style="padding-bottom:0px;"></span>
                        </a>    
                    </div>
                    <!--End: Logo-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu" class="menu-creative menu-center">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li class="<?php echo ($current_page=='index.php')?'current':'';?>"><a href="index.php">Home</a></li>
                                    <li class="<?php echo ($current_page=='about.php')?'current':'';?>"><a href="about.php">About</a></li>
                                    <li class="<?php echo ($current_page=='features.php')?'current':'';?>"><a href="features.php">Features</a></li>
                                    <li class="<?php echo ($current_page=='services.php')?'current':'';?>"><a href="services.php">Services</a></li>
                                    <li class="<?php echo ($current_page=='contact.php')?'current':'';?>"><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>