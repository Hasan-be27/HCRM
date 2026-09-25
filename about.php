<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Hasan" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>About</title>
    <!-- Stylesheets & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Playpen+Sans:wght@100..800&family=Dongle:wght@300;400;700&family=Oregano:ital@0;1&family=Faculty+Glyphic&family=Oregano:ital@0;1&family=Cause:wght@100..900&family=Martel+Sans:wght@200;300;400;600;700;800;900&family=Noto+Serif+Khojki:wght@400..700&family=Quintessential&family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
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
        .bpl{
            background-position:left;
            background-size:cover;
            background-repeat:no-repeat;
            border-radius: 10px;
        }
        .bpr{
            background-position:right;
            background-size:cover;
            background-repeat:no-repeat;
            border-radius: 10px;
        }
        .gcard{
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border:1px solid #ffffff;
        }
        .moba{
            font-size:50px;
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
        @media(max-width: 768px){
            .moba{
                font-size:40px;
                line-height: 2.5rem;
            }
            .moba2{
                font-size:30px;
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
            .lo{
                width:auto;
                overflow:hidden;
            .lo img{
                border-radius: 10px;
                width: 450px;
            }
            .bk{
                color:black;
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
            .bk{
                color:black;
            }
        }
        @media (max-width: 1200px) {
            .bpr::before{
                content:'';
                position: absolute;
                inset: 0;
                background-color: rgba(255, 255, 255, 0.3);
            }
            .bpr p{
                color: black;
            }
            .bpl::before{
                content:'';
                position: absolute;
                inset: 0;
                background-color: rgba(255, 255, 255, 0.3);
            }
            .bpl p{
                color: black;
            }
        }
        @media (max-width: 768px) {
            .bpr::before{
                content:'';
                position: absolute;
                inset: 0;
                background-color: rgba(255, 255, 255, 0.3);
            }
            .bpr p{
                color: black;
            }
            .bpl::before{
                content:'';
                position: absolute;
                inset: 0;
                background-color: rgba(255, 255, 255, 0.3);
            }
            .bpl p{
                color: black;
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
        <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
            <!-- Slide 2 -->
            <div class="slide" style="background-image:url('images/about/a1.jpg');">
                <div class="bg-overlay"></div>
                <div class="shape-divider" data-style="10"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 class="ohs" style="font-size:55px;">About Us</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <section>
            <div class="container">
                <div class="row bpr" style="background-image:url('images/about/ov.png');margin-top:20px;"data-animate="fadeInRight" data-animate-delay="200">
                    <div class="col-lg-9">
                        <h2 class="ohs" style="color:darkblue;"><b>Our Vision</b></h2>
                        <p class="ops">Empowering organizations with innovative technology solutions that foster growth, efficiency, and meaningful customer relationships.</p>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="row text-right bpl" style="background-image:url('images/about/om.png');margin-top:20px;"data-animate="fadeInLeft" data-animate-delay="400">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <h2 class="ohs" style="color:darkred;"><b>Our Mission</b></h2>
                        <p class="ops">Delivering reliable, user-friendly CRM solutions that help institutions achieve their goals through seamless communication and automation.</p>
                    </div>
                </div>
                <div class="row bpr" style="background-image:url('images/about/os.png');margin-top:20px;" data-animate="fadeInRight" data-animate-delay="600">
                    <div class="col-lg-9">
                        <h2 class="ohs" style="color:darkgreen;"><b>Our Strategy</b></h2>
                        <p class="ops">Combining advanced technology, strategic planning, and continuous innovation to create lasting value for our clients.</p>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
        <section class="p-b-12" style="background-image:url(images/about/wsb.jpg);background-repeat:no-repeat;background-size:cover;background-position:left;">
            <div class="shape-divider" data-style="8" data-position="top" data-flip-vertical="true"></div>
            <div class="shape-divider" data-style="8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 dnone1">
                        <h2 class="ohs p-b-10 moba" style="color:#1f1f1f;font-weight:bolder;"><b>Where It Started?</b></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="heading-text heading-section">
                            <p class="ohs moba dnone2" style="font-size:48px;color:#1f1f1f;font-weight:bolder;"><b>Where It Started?</b></p>
                            <span class="lead ops">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center"data-animate="fadeIn" data-animate-delay="500">
                        <img src="images/about/ws.jpg" width="100%" style="border-radius:15px;">
                    </div>
                </div>
            </div>
        </section>
        <pre> <br> </pre>
        <section class="p-b-12" style="background-image:url(images/about/wgb.jpg);background-repeat:no-repeat;background-size:cover;background-position:right;">
            <div class="shape-divider" data-style="8" data-position="top" data-flip-vertical="true"></div>
            <div class="shape-divider" data-style="8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 dnone1">
                        <h2 class="ohs p-b-10 moba" style="color:#1f1f1f;font-weight:bolder;"><b>Where It's Going?</b></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center"data-animate="fadeIn" data-animate-delay="400">
                        <img src="images/about/wg.jpg" width="100%" style="border-radius:15px;">
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section">
                            <p class="ohs text-right dnone2" style="font-size:48px;color:#1f1f1f;font-weight:bolder;"><b>Where It's Going?</b></p>
                            <span class="lead ops">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare orci.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-b-0" style="background-image:url(images/about/bgw.jpg);background-repeat:no-repeat;background-size:cover;">
            <div class="shape-divider" data-style="6" data-position="top" data-flip-vertical="true"></div>
            <div class="shape-divider" data-style="6"></div>
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2 class="ohs moba"><b>Why Choose Us?</b></h2>
                    <span class="lead ops">With our advanced systems, make it easy and simple to connect to your customers.</span>
                    <div class="row p-t-50">
                        <div class="col-lg-4 gcard"data-animate="fadeInUp" data-animate-delay="0">
                            <div class="icon-box large center">
                                <div class="icon">
                                    <i class="fa fa-brain"></i>
                                </div>
                                <h3 class="ohs">AI-Powered Insights</h3>
                                <p class="ops3">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 gcard"data-animate="fadeInUp" data-animate-delay="200">
                            <div class="icon-box large center">
                                <div class="icon">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <h3 class="ohs">Workflow Automation</h3>
                                <p class="ops3">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 gcard"data-animate="fadeInUp" data-animate-delay="400">
                            <div class="icon-box large center">
                                <div class="icon">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <h3 class="ohs">Omnichannel Communication</h3>
                                <p class="ops3">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 gcard"data-animate="fadeInUp" data-animate-delay="600">
                            <div class="icon-box large center">
                                <div class="icon">
                                    <i class="fa fa-chart-line"></i>
                                </div>
                                <h3 class="ohs">Advanced Analytics</h3>
                                <p class="ops3">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 gcard"data-animate="fadeInUp" data-animate-delay="800">
                            <div class="icon-box large center">
                                <div class="icon">
                                    <i class="fa fa-user-graduate"></i>
                                </div>
                                <h3 class="ohs">Lead & Student Management</h3>
                                <p class="ops3">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 gcard"data-animate="fadeInUp" data-animate-delay="1000">
                            <div class="icon-box large center">
                                <div class="icon">
                                    <i class="fa fa-shield-alt"></i>
                                </div>
                                <h3 class="ohs">Data Security</h3>
                                <p class="ops3">Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid p-b-60 p-t-70" style="background-image:url(images/home/bg1.png);background-size:cover;background-position:center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 p-t-15">
                        <span class="ops text-light">Discover everything HCRM can do. <br>Explore our complete suite of HR, payroll, attendance and workflow tools.</span>
                    </div>
                    <div class="col-lg-3 text-center" style="padding:20px;"><a href="features.php" class="btn btn-light btn-outline btn-rounded">Explore Features</a></div>
                </div>
            </div>
        </section>
        <section class="p-t-20">
            <div class="container">
                <div class="heading-text heading-section text-center">
                    <h2 class="ohs moba">Organizations Growing With HCRM</h2>
                </div>
            </div>
            <div class="carousel testimonial testimonial-border" data-items="1" data-equalize-item=".testimonial-item">
                            <!-- Testimonials item -->
                            <div class="testimonial-item">
                                <div class="container-fluid"data-animate="flipInX" data-animate-delay="200">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="images/about/ns.jpg">
                                        </div>
                                        <div class="col-lg-6 text-left">
                                            <p class="ops p-t-70">HCRM has completely transformed the way our team manages leads and customer relationships. The automation features alone have saved us countless hours every week.</p>
                                            <p class="ohs2">Michael Anderson</p>
                                            <p class="ohs2">Sales Director, Nexa Solutions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Testimonials item-->
                            <!-- Testimonials item -->
                            <div class="testimonial-item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="images/about/be.jpg">
                                        </div>
                                        <div class="col-lg-6 text-left">
                                            <p class="ops p-t-70">The intuitive interface made onboarding effortless. Within days, our entire team was tracking opportunities more efficiently than ever before.</p>
                                            <p class="ohs2">Sarah Johnson</p>
                                            <p class="ohs2">Operations Manager, BrightEdge Consulting</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Testimonials item-->
                            <!-- Testimonials item -->
                            <div class="testimonial-item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="images/about/vt.jpg">
                                        </div>
                                        <div class="col-lg-6 text-left">
                                            <p class="ops p-t-70">We've tried multiple CRM platforms over the years, but HCRM stands out for its simplicity, reliability, and exceptional customer support.</p>
                                            <p class="ohs2">David Miller</p>
                                            <p class="ohs2">CEO, Vertex Technologies</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Testimonials item-->
                            <!-- Testimonials item -->
                            <div class="testimonial-item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="images/about/gp.jpg">
                                        </div>
                                        <div class="col-lg-6 text-left">
                                            <p class="ops p-t-70">The reporting and analytics tools provide valuable insights that help us make smarter business decisions and improve campaign performance.</p>
                                            <p class="ohs2">Emily Carter</p>
                                            <p class="ohs2">Marketing Director, GrowthPoint Media</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Testimonials item-->
                        </div>
        </section>
        <section class="p-b-0 slide kenburns" data-bg-image="images/about/n2.jpg">
             <div class="bg-overlay"></div>
             <div class="container xs-text-center sm-text-center text-light">
                 <div class="row">
                     <div class="col-lg-5 p-b-60">
                         <h2 class="ohs"><b>Our Work So Far...</b></h2>
                         <p class="lead ops">Providing services to 200+ companies and building strong relations with the customers</p>
                         <a href="services.php" class="btn btn-light btn-outline btn-rounded">Our Services</a>
                     </div>
                     <div class="col-lg-7">
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="text-center">
                                     <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50" data-to="4213" data-from="50" data-seperator="true"></span> </div>
                                     <div class="seperator seperator-small"></div>
                                     <p>CUSTOMERS CONNECTED</p>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="text-center">
                                     <div class="counter text-lg"> <span data-speed="1500" data-refresh-interval="50" data-to="237" data-from="0" data-seperator="true"></span> </div>
                                     <div class="seperator seperator-small"></div>
                                     <p>SATISFIED CLIENTS</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </section>
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