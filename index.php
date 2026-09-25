<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Hasan" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>HCRM | Home</title>
    <!-- Stylesheets & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Playpen+Sans:wght@100..800&family=Dongle:wght@300;400;700&family=Oregano:ital@0;1&family=Faculty+Glyphic&family=Oregano:ital@0;1&family=Cause:wght@100..900&family=Martel+Sans:wght@200;300;400;600;700;800;900&family=Noto+Serif+Khojki:wght@400..700&family=Quintessential&family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        html,body{
            scroll-behavior: smooth;
        }
        #start{
            scroll-margin-top:80px;
        }
        .heading{
            font-family:'Cabin Sketch', sans-serif;
        }
        .paras{
            font-family:"Playpen Sans", sans-serif;
        }
        .ohs{
            font-family: 'Noto Serif Khojki';
        }
        .ops{
            font-family: 'Dongle';
            font-size: 36px;
            line-height: 30px;
        }
        .ohs2{
            font-family: 'Faculty Glyphic';
        }
        .ops2{
            font-family: 'Cause';
        }
        .ohs3{
            font-family: 'Quintessential';
        }
        .ops3{
            font-family: 'Martel Sans';
        }
        .roles-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 70px;
            padding: 120px 40px;
            flex-wrap: wrap;
        }
        .role {
            position: relative;
            width: min(320px, 90vw);
        }
        .role-1,
        .role-3 {
            margin-top: 0;
        }
        .role-2 {
            margin-top: 120px;
        }
        .image-card {
            position: absolute;
            top: -40px;
            left: 35px;
            width: 290px;
            height: 240px;
            border-radius: 30px;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 20px 40px rgba(0,0,0,.12);
            transform: rotate(-5deg);
        }
        .role-3 .image-card {
            transform: rotate(5deg);
        }
        .role-2 .image-card {
            transform: rotate(-2deg);
        }
        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .image-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    to top,
                    rgba(0,0,0,.50),
                    rgba(0,0,0,.10)
                );
        }
        .content-card {
            position: relative;
            z-index: 2;
            margin-top: 130px;
            padding: 35px;
            border-radius: 24px;
            color:#ffffff;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
        }
        .role-number {
            display: block;
            font-size: 72px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .content-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .content-card p {
            line-height: 1.8;
            font-size: 15px;
            color: rgba(255,255,255,0.9);
        }
        @media (max-width: 992px) {
            .roles-section {
                gap: 50px;
            }
            .role {
                width: 280px;
            }
            .image-card {
                width: 250px;
                height: 220px;
            }
            .content-card {
                min-height: auto;
            }
        }
        @media (max-width: 768px) {
            .roles-section {
                flex-direction: column;
                align-items: center;
                gap: 100px;
            }
            .role-1,
            .role-2,
            .role-3 {
                margin-top: 0;
            }
            .role {
                width: min(300px, 90vw);
            }
            .image-card {
                left: 20px;
                width: calc(100% - 20px);
                height: 220px;
                transform: none !important;
            }
            .content-card {
                min-height: auto;
            }
        }
        .ac{
            border-radius: 20px;!important
            border: 1px solid white;
            box-shadow: 0px 2px 4px #000000;
            height:auto;
            width:250px;

        }
        @media(min-width: 768px){
            .ac img{
                width: 100%;
                height: 175px;
                border-radius: 20px;
                box-shadow: 0px 2px 4px #b9e9f0;
            }
        }
        .ac h3,p{
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .ac.next{
            margin-top:-120px;
        }
        .hov{
            transition: transform 0.3s ease;
        }
        .hov:hover{
            transform: translateY(-10px);
        }
        .hovd{
            transition: transform 0.3s ease;
        }
        .hovd:hover{
            transform: translateY(10px);
        }
        .rt{
            text-align: right;
        }
        .gcard{
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(2px);
        }
        .contact-form-wrapper{
            background:
                radial-gradient(circle at 20% 20%, rgba(109,76,255,.35), transparent 35%),
                radial-gradient(circle at 80% 30%, rgba(0,191,255,.25), transparent 35%),
                radial-gradient(circle at 50% 80%, rgba(0,120,255,.18), transparent 45%),
                linear-gradient(
                    135deg,
                    #020617 0%,
                    #081a3d 35%,
                    #0b2458 65%,
                    #020617 100%
                );
            border-radius:20px;
            overflow:hidden;
            position:relative;
            z-index:1;
        }
        .contact-form-wrapper::before{
            content:"";
            position:absolute;
            inset:0;
            background:
                radial-gradient(circle at 25% 25%, rgba(255,255,255,.06), transparent 30%),
                radial-gradient(circle at 75% 65%, rgba(255,255,255,.04), transparent 35%);
            backdrop-filter: blur(10px);
            pointer-events:none;
            z-index:0;
        }
        .contact-form-wrapper input,
        .contact-form-wrapper textarea{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.12);
            color:#fff;
        }
        .contact-form-wrapper input::placeholder,
        .contact-form-wrapper textarea::placeholder{
            color:rgba(255,255,255,.6);
        }
        .contact-form-wrapper *{
            position: relative;
            z-index:1;
        }
        .moba{
            font-size:50px;
        }
        @media(max-width: 387px){
            .moba{
                font-size: 30px;
            }
        }
        @media(max-width: 992px){
            .moba{
                padding-top:25px;
            }
        }
        @media(min-width: 387px) and (max-width: 768px){
            .moba{
                font-size:40px;
                line-height: 2.5rem;
            }
            .moba2{
                font-size:30px;
            }
        }
        @media(min-width: 1200px){
            .s60{
                width:60%;
            }
        }
        @media(max-width: 1200px){
            .s60{
                width:85%;
            }
        }
        @media(min-width:992px){
            .dnone1{
                display: none;
            }
        }
        @media(max-width:992px){
            .dnone2{
                display: none;
            }
        }
        @media (max-width: 1200px) {
            .ac{
                height:auto;
                width:80%;
            }
        }
        @media(min-width: 992px){
            .cen{
                text-align: right;
            }
        }
        @media (max-width: 992px) {
            .cen{
                text-align: center;
            }
        }
        @media (max-width: 768px) {
            .ac{
                height:auto;
                width:100%;
            }
            .ac.next{
                margin-top: 10px;
            }
            .ac img{
                width: 100%;
                height: 300px;
                border-radius: 20px;
                box-shadow: 0px 2px 4px #b9e9f0;
            }
        }
        @media(max-width: 450px){
            .ac img{
                width: 100%;
                height: 175px;
                border-radius: 20px;
                box-shadow: 0px 2px 4px #b9e9f0;
            }
        }
        .lo{
            width:120px;
            overflow:hidden;
            margin-top: -4px;
        }
        .lo img{
            border-radius: 15px;
            width:100%;
            height:55px;
        }
        @media (max-width: 1200px) {
            .lo{
                width:auto;
                overflow:hidden;
            .lo img{
                border-radius: 10px;
                width: 450px;
            }
        }
        @media (max-width: 768px) {
            .lo{
                width:150px;
                overflow:hidden;
            .lo img{
                width:150px;
                border-radius: 10px;
                height:100%;
                margin-top:-2px;
            }
        }
        @media(min-width: 768px){
            .flo img{
                width: 50px;
                border-radius: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php include"header.php"?>
        <!-- end: Header -->
        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
            <!-- Slide 1 -->
            <div class="slide" data-bg-image="images/home/sl3.jpg">
                <!-- <div class="bg-overlay"></div> -->
                <div class="container" style="padding-top:30px;">
                    <div class="row">
                        <div class="col-lg-12" style="margin-top:-100px;">
                            <div class="slide-captions text-center text-light">
                                <!-- Captions -->
                                <h2 class="heading">Simplify Managing Relations With Customers</h2>
                                <p class="paras">Easily connect with your customers and build better relations.</p>
                                <div class="text-center">
                                    <a href="#start" class="btn btn-light btn-outline btn-rounded scroll-to">Get Started</a>
                                    <a href="contact.php" class="btn btn-light btn-outline btn-rounded" target="_blank">Book a Demo</a>
                                </div>
                                <!-- end: Captions -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Slide 1 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- What is CRM? -->
        <section class="p-b-0" id="start" style="padding-top:0px;background:transparent;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center dnone1">
                        <span class="ohs moba" style="margin-bottom:0px;"><b>Connecting <span style="color:#60d3fc;">Companies To Customers</span></b></span>
                    </div>
                    <div class="col-lg-6"  data-animate="zoomIn" data-animate-delay="200"> <img alt="" src="images/home/about--.jpg" width="100%"> </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section mt-5">
                            <h1 class="ohs dnone2" style="margin-bottom:0px;font-size:50px;"><b>Connecting <span style="color:#60d3fc;">Companies To Customers</span></b></h1>
                            <p class="ops3" style="font-size:14px;color:black;">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                            <div class="container" style="color:orange;">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="text-center" data-animate="fadeInUp" data-animate-delay="400">
                                            <div style="font-size:36px"><b>4200+</b></div>
                                            <p class="ops2" style="font-size:14px;color:darkblue;"><b>Customers Connected</b></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center" data-animate="fadeInUp" data-animate-delay="600">
                                            <div style="font-size:36px"><b>220+</b></div>
                                            <p class="ops2" style="font-size:14px;color:darkblue;"><b>No. of Companies</b></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center" data-animate="fadeInUp" data-animate-delay="800">
                                            <div style="font-size:36px"><b>99%</b></div>
                                            <p class="ops2" style="font-size:14px;color:darkblue;"><b>Client Satisfaction Rate</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left"style="padding-left:22.5px;">
                                <a class="btn btn-rounded btn-outline" href="about.php">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-image:linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),url(images/about/b6.jpg);background-repeat:no-repeat;background-size:cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 align-items-center d-flex text-right" style="padding:20px;" data-animate="flipInX" data-animate-delay="600">
                        <a href="features.php"><h1 class="ohs hov cen moba" style="text-shadow:0px 4px 8px #60d3fc;"><b>Our Advanced Features</b></h1></a>
                    </div>
                    <div class="col-lg-7">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <div class="ac gcard hov">
                                            <div class="team-image">
                                                <img src="images/home/11.jpg">
                                            </div>
                                            <div class="team-desc">
                                                <h3 class="ops" style="font-size:24px"><b>AI-Powered Customer Insights</b></h3>
                                                <!--<p class="ohs2" style="font-size:1.2rem;">This kind of CRM is generally built inside the company premises. Its whole infrastructure including its servers is physically located inside the company's campus and can be accessed only within the boundaries of the campus.
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-start">
                                        <div class="ac next gcard hov">
                                            <div class="team-image">
                                                <img src="images/home/12.jpg">
                                            </div>
                                            <div class="team-desc">
                                                <h3 class="ops" style="font-size:24px"><b>Workflow & Process Automation</b></h3>
                                                <!--<p class="ohs2" style="font-size:1.2rem;">A cloud-based CRM system is the most sought-after kind, as it's easily accessible through any browser anywhere in the world. This enables quicker deployments and more versatile usage of the platform.
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <div class="ac next gcard hovd">
                                            <div class="team-image">
                                                <img src="images/home/13.jpg">
                                            </div>
                                            <div class="team-desc">
                                                <h3 class="ops" style="font-size:24px"><b>Omnichannel Communication Hub</b></h3>
                                                <!--<p class="ohs2" style="font-size:1.2rem;">These CRMs are built from the ground up to cater to the niche requirements of different industries. CRMs are built.
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-start">
                                        <div class="ac next gcard hovd">
                                            <div class="team-image">
                                                <img src="images/home/14.jpg">
                                            </div>
                                            <div class="team-desc">
                                                <h3 class="ops" style="font-size:24px"><b>Advanced Analytics & Custom Dashboards</b></h3>
                                                <!--<p class="ohs2" style="font-size:1.2rem;">The most popular cloud CRM offerings tend to be all-in-one CRM solutions that are robust, extremely customizable.
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END What is CRM? -->
        <!-- Our numbers -->
        <section class="p-t-100 p-b-100 slide kenburns" data-bg-image="images/home/c1.jpg">
             <div class="bg-overlay"></div>
             <div class="shape-divider" data-style="6" data-position="top" data-flip-vertical="true"></div>
             <div class="shape-divider" data-style="6"></div>
             <div class="container xs-text-center sm-text-center text-light">
                 <div class="row">
                     <div class="col-lg-5 p-b-60">
                         <h2 class="ohs">Our Numbers</h2>
                         <p class="lead ops">Providing services to 200+ companies and building strong relations with the customers</p>
                         <a href="services.php" class="btn btn-light btn-outline btn-rounded">Our Services</a>
                     </div>
                     <div class="col-lg-7">
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="text-center" data-animate="fadeInUp" data-animate-delay="400">
                                     <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50" data-to="4213" data-from="50" data-seperator="true"></span> </div>
                                     <div class="seperator seperator-small"></div>
                                     <p class="paras">CUSTOMERS CONNECTED</p>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="text-center" data-animate="fadeInUp" data-animate-delay="600">
                                     <div class="counter text-lg"> <span data-speed="1500" data-refresh-interval="50" data-to="237" data-from="0" data-seperator="true"></span> </div>
                                     <div class="seperator seperator-small"></div>
                                     <p class="paras">SATISFIED CLIENTS</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </section>
        <!-- end: Our numbers -->
        <!-- Who -->
        <section style="padding-bottom:0px;background-image:linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),url(images/about/b4.jpg);background-repeat:no-repeat;background-size:cover;">
            <div class="container" data-animate="fadeInDown" data-animate-delay="400">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="heading-text heading-section">
                            <h2 class="ohs"><b>Why use Our CRM system?</b></h2>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row ops">
                            Anyone with basic knowledge can use a CRM system, but they're often especially suited for those who perform sales, marketing, and support functions. CRM systems have evolved from simple contact management solutions to a constantly evolving technological engines that address a wide range of business needs and enhance customer-facing interactions. They're built to be easy to use and navigate. The breadth, depth, flexibility, and capabilities a good CRM system can offer make it the perfect tool for optimizing users' day-to-day activities across marketing, sales, and support roles.
                        </div>
                    </div>
                </div>
            </div>
            <div class="roles-section">
                <!-- MARKETERS -->
                <div class="role role-1" data-animate="zoomIn" data-animate-delay="600">
                    <div class="image-card hov">
                        <img src="images/home/m1.jpg" alt="Marketers">
                    </div>
                    <div class="content-card hovd">
                        <h3 class="ops" style="color:#10102e;font-size:55px;">MARKETERS</h3>
                    </div>
                </div>
                <!-- SALES -->
                <div class="role role-2" data-animate="zoomIn" data-animate-delay="1000">
                    <div class="image-card hov">
                        <img src="images/home/sr1.jpg" alt="Sales Reps">
                    </div>
                    <div class="content-card hovd">
                        <h3 class="ops" style="color:#10102e;font-size:55px;">SALES REPS</h3>
                    </div>
                </div>
                <!-- SUPPORT -->
                <div class="role role-3" data-animate="zoomIn" data-animate-delay="800">
                    <div class="image-card hov">
                        <img src="images/home/cs1.jpg" alt="Customer Service">
                    </div>
                    <div class="content-card hovd">
                        <h3 class="ops" style="color:#10102e;font-size:55px;">CUSTOMER SERVICE AGENTS</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Who -->
        <section class="container contact-form-wrapper m-b-20 s60">
            <div class="container text-center m-b-0">
                <div class="row">
                    <div class="col-lg-12 text-center moba" style="margin-bottom:25px;">
                        <span class="ohs text-light"><b>Contact Us</b></span>
                    </div>
                    <div class="col-lg-12">
                        <span class="ops text-light text-center p-0 m-b-0 dnone2">Let us help you connect with your customers better</span>
                    </div>
                </div>
            </div>
            <div style="border-radius:10px;padding:20px;">
                <form class="widget-contact-form" novalidate action="#" role="form" method="get">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email(Optional)</label>
                            <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="pnumber">Phone Number</label>
                            <input type="number" name="widget-contact-form-pnember" required class="form-control required" placeholder="Enter your Phone Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="subject">Your Subject</label>
                            <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message" required></textarea>
                    </div>
                    <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                </form>
            </div>
        </section>
        <!-- CLIENTS -->
        <!-- end: CLIENTS -->
        <!-- Footer -->
        <?php include"footer.php"?>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>


<!-- Mirrored from inspirothemes.com/polo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 19:07:12 GMT -->
</html>