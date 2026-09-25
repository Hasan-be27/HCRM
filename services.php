<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Hasan" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Services</title>
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
        .background1{
            background:
            radial-gradient(circle at 15% 20%, rgba(0,170,255,.30) 0%, transparent 35%),
            radial-gradient(circle at 80% 30%, rgba(0,255,220,.22) 0%, transparent 30%),
            radial-gradient(circle at 25% 55%, rgba(120,80,255,.25) 0%, transparent 40%),
            radial-gradient(circle at 85% 70%, rgba(0,140,255,.22) 0%, transparent 35%),
            radial-gradient(circle at 30% 90%, rgba(80,120,255,.20) 0%, transparent 30%),
            linear-gradient(
            135deg,
            #020617 0%,
            #071633 25%,
            #081c46 50%,
            #071633 75%,
            #020617 100%
            );
        }
        .hov{
            box-shadow: 0 4px 8px #000000;
        }
        .hov:hover{
            box-shadow: 0 8px 16px #000000;
        }
        .hov img{
            transition: transform 0.3s ease;
        }
        .hov img:hover{
            transform: scale(1.03);
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
            <div class="slide" style="background-image:url('images/services/h2.png');background-color: #ffffff;">
                <div class="shape-divider" data-style="10"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 class="ohs" style="font-size:55px;">Our Services</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <section class="background1 text-light">
            <div class="shape-divider" data-style="6" data-position="top" data-flip-vertical="true"></div>
            <section class="p-b-0" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            <section class="heading-text heading-section p-b-0 p-t-0" style="background:transparent;">
                                <h2 class="ohs"><b>CRM Implementation & Strategy</b></h2>
                                <ul class="timeline">
                                    <!--Timeline item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon">1</div>
                                        <h4 class="ops">Discover</h4>
                                        <p class="ops" style="font-size:24px">Analyze business processes, team workflows, sales stages, and CRM requirements.</p>
                                    </li>
                                    <!--end: Timeline item-->
                                    <!--Timeline item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon">2</div>
                                        <h4 class="ops">Configure</h4>
                                        <p class="ops" style="font-size:24px">Set up pipelines, custom fields, user roles, permissions, dashboards, and automations.</p>
                                    </li>
                                    <!--end: Timeline item-->
                                    <!--Timeline item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon">3</div>
                                        <h4 class="ops">Test</h4>
                                        <p class="ops" style="font-size:24px">Validate workflows, integrations, data accuracy, and system performance before launch.</p>
                                    </li>
                                    <!--end: Timeline item-->
                                    <!--Timeline item-->
                                    <li class="timeline-item">
                                        <div class="timeline-icon">4</div>
                                        <h4 class="ops">Deploy</h4>
                                        <p class="ops" style="font-size:24px">Go live, onboard users, monitor adoption, and provide initial support.</p>
                                    </li>
                                    <!--end: Timeline item-->
                                </ul>
                            </section>
                        </div>
                        <div class="col-lg d-flex align-items-center text-center p-b-30">
                            <div data-animate="fadeIn hov" data-animate-delay="200" style="overflow: hidden;border-radius: 12px;">
                                <img src="images/services/sr1.jpg" width="100%" style="box-shadow: 0 15px 40px rgba(0,0,0,.15);border-radius: 12px;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-t-10 p-b-50" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-b-20">
                            <div class="heading-text heading-section">
                                <h2 class="ohs"><b>Data Migration & Integration</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-text heading-section text-center" data-animate="fadeIn" data-animate-delay="200">
                                <span style="margin-top:30px;overflow: hidden;border-radius: 12px;" class="hov"><img src="images/services/s2.png" width="80%" style="display:block;margin:auto;box-shadow: 0 15px 40px rgba(0,0,0,.15);border-radius: 12px;"></span>
                                <br><br>
                                <span class="ops">Easily Migrate the company's data to our software with our specialized tools</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-b-50 p-t-10" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 dnone1 heading-text heading-section text-right">
                            <h2 class="ohs"><b>Custom Development & API Consulting</b></h2>
                        </div>
                        <div class="col-lg-6 text-center align-items-center d-flex" data-animate="fadeIn" data-animate-delay="200"><span style="overflow: hidden;border-radius: 12px;" class="hov"><img alt="" src="images/services/sr3.jpg" style="width:100%;border-radius:15px;"></span></div>
                        <div class="col-lg-6">
                            <div class="heading-text heading-section text-right">
                                <h2 class="ohs dnone2"><b>Custom Development & API Consulting</b></h2>
                                <p class="ops" style="font-size:36px;padding:0px;"><b>Extend your CRM beyond standard functionality with tailored solutions, custom modules, and seamless API integrations. We help businesses connect third-party applications and automate data exchange.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-b-0 p-t-10" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-text heading-section">
                                <h2 class="ohs"><b>Team Training & Change Management</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-text heading-section">
                                <span class="lead">Ensure a smooth CRM adoption process with structured training programs and change management strategies. We equip teams with the knowledge, skills, and confidence needed to embrace new workflows, maximize productivity, and achieve long-term success with the platform.</span>
                                <span  data-animate="fadeIn" data-animate-delay="200" style="overflow: hidden;border-radius: 12px;" class="hov"><img src="images/services/s4.png" width="80%" style="display:block;margin:auto;box-shadow: 0 15px 40px rgba(0,0,0,.15);border-radius: 15px;margin-top:20px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-b-0 p-t-10" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading-text heading-section mt-5">
                                <h2 class="ohs"><b>Managed CRM Services & Strategic Support</b></h2>
                                <p class="ops" style="font-size:36px;padding:0px;"><b>Maintain peak CRM performance with dedicated experts who provide technical assistance, system health monitoring, optimization recommendations, and strategic consulting. We work as an extension of your team to ensure your CRM remains aligned with changing business needs.</b></p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center align-items-center d-flex" data-animate="fadeIn" data-animate-delay="200"><span style="overflow: hidden;border-radius: 12px;" class="hov"><img alt="" src="images/services/s5.png" style="width:100%;border-radius:15px;"></span></div>
                    </div>
                </div>
            </section>
        </section>
        <div class="call-to-action background-image slide kenburns" data-bg-image="images/services/ct-.jpg" style="margin-bottom:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h3 class="text-light">Ready to Transform Your CRM?</h3>
                        <p class="text-light">Schedule a free consultation with our experts.</p>
                    </div>
                    <div class="col-lg-2"> <a class="btn btn-light btn-outline" href="contact.php">Get Started</a> </div>
                </div>
            </div>+
        </div>
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