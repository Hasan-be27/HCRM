<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Hasan" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Features</title>
    <!-- Stylesheets & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Playpen+Sans:wght@100..800&family=Dongle:wght@300;400;700&family=Oregano:ital@0;1&family=Faculty+Glyphic&family=Oregano:ital@0;1&family=Cause:wght@100..900&family=Martel+Sans:wght@200;300;400;600;700;800;900&family=Noto+Serif+Khojki:wght@400..700&family=Quintessential&family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        html{
            scroll-behavior: smooth;
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
        .gcard{
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
        }
        .ml{
            margin-left:-20px;
            margin-right:20px;
        }
        .mr{
            margin-right:-20px;
            margin-left:20px;
        }
        .mu{
            margin-top:-20px;
            margin-bottom:20px;
        }
        .md{
            margin-bottom:-20px;
            margin-top:20px;
        }
        .sec2{
            background:radial-gradient(circle at 20% 15%, rgba(245,158,11,.20), transparent 35%), radial-gradient(circle at 80% 25%, rgba(251,191,36,.15), transparent 35%), radial-gradient(circle at 25% 80%, rgba(59,130,246,.18), transparent 35%), radial-gradient(circle at 75% 85%, rgba(96,165,250,.15), transparent 35%), #0A1020;
        }
        @media(min-width: 992px){
            .sec1{
                background:radial-gradient(circle at 20% 15%, rgba(37,99,235,.35), transparent 35%), radial-gradient(circle at 80% 40%, rgba(20,184,166,.30), transparent 35%), radial-gradient(circle at 25% 75%, rgba(139,92,246,.30), transparent 35%), radial-gradient(circle at 75% 90%, rgba(99,102,241,.30), transparent 35%), #0B1120;"
            }
        }
        @media(max-width: 992px){
            .s1{
                background: linear-gradient(135deg, #0B1120 0%, #172554 50%, #2563EB 100%);
                padding-bottom:15px;
                margin-top:0px;
            }
            .s2{
                background: linear-gradient(135deg, #042F2E 0%, #115E59 50%, #14B8A6 100%);
                padding-bottom:15px;
            }
            .s3{
                background: linear-gradient(135deg, #2E1065 0%, #5B21B6 50%, #8B5CF6 100%);
                padding-bottom:15px;
            }
            .s4{
                background: linear-gradient(135deg, #1E1B4B 0%, #312E81 50%, #6366F1 100%);
                padding-bottom:15px;
            }
            .sh{
                background: linear-gradient(135deg, #0B1120 0%, #172554 50%, #1E2F6F 100%);
                padding-top:50px;
                margin-top:0px;
            }
        }
        .ac{
            border-radius: 20px;!important
            border: 1px solid white;
            box-shadow: 0px 2px 4px #000000;
            height:auto;
            width:250px;
        }
        .ac img{
            width: 100%;
            height: 175px;
            border-radius: 20px;
            box-shadow: 0px 2px 4px #b9e9f0;
        }
        .ac h3,p{
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .ac.next{
            margin-top:-100px;
        }
        .hov2{
            transition: transform 0.3s ease;
        }
        .hov2:hover{
            transform: translateY(-10px) scale(1.1);
        }
        .hov{
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px #000000;
        }
        .hov:hover{
            transform: translateY(-10px);
            box-shadow: 0 8px 16px #000000;
        }
        .rt{
            text-align: right;
        }
        .lt{
            text-align: left;
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
        @media(min-width:1200px){    
            .mt1{
                margin-top:-180px;
            }
            .mt2{
                margin-top:-180px;
            }
            .mt3{
                margin-top:-180px;
            }
        }
        .cen{
            color: #ffffff;
        }
        .bag{
            border:1px solid rgba(255, 255, 255, 0.25);
            background:rgba(255, 255, 255, 0.15);
            backdrop-filter:blur(10px);
            border-radius:20px;
            padding:10px;
        }
        .rel{
            position: relative;
        }
        .connections{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            pointer-events:none;
        }
        .connections path{
            fill:none;
            stroke:rgba(100,180,255,.25);
            stroke-width:3;
            stroke-dasharray:8 8;
            animation:flow 20s linear infinite;
        }
        .moba{
            font-size:50px;
        }
        .moba2{
            font-size:40px;
        }
        .hov img{
            transition: transform 0.3s ease;
        }
        .hov img:hover{
            transform: scale(1.03);
        }
        @media(min-width: 768px){
            .mta th{
                font-size: 28px;
                text-align: left;
            }
            .mta td{
                font-size: 25px;!important
            }
        }
        @media(max-width: 768px){
            .mta th{
                font-size: 20px;
                text-align: center;
            }
            .mta td{
                font-size: 18px;
            }
        }
        @media(max-width: 768px){
            .moba{
                font-size:40px;
                line-height: 2.5rem;
            }
            .moba2{
                font-size:30px;
                line-height: 2.5rem;
            }
        }
        @keyframes flow{
            to{
                stroke-dashoffset:-300;
            }
        }
        @media(max-width: 992px) {
            .connections{
                display: none;
            }
        }
        @media(max-width: 1200px){
            .mt1{
                margin-top:0px;!important
            }
            .mt2{
                margin-top:0px;!important
            }
            .mt3{
                margin-top:0px;!important
            }
        }
        @media (max-width: 1200px) {
            .ac{
                height:auto;
                width:100%;
            }
        }
        @media (max-width: 992px) {
            .cen{
                text-align: center;
                color: #F8FAFC;
                text-shadow:0 2px 4px rgba(0,0,0,0.3);
            }
        }
        @media(max-width: 992px){
            .ac{
                width: 100%;
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
        <div id="slider" class="inspiro-slider dots-creative" data-height="600px">
            <!-- Slide 2 -->
            <div class="slide" style="background-image:url('images/features/h1.jpg');height: 100%;">
                <div class="shape-divider" data-style="10"></div>
                <!--<div class="bg-overlay"></div>-->
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 class="ohs" style="font-size:55px;">Our Features</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <section class="p-t-0 p-b-0">
            <div class="container-fluid sec1 p-t-100 p-b-100">
                <div class="shape-divider" data-style="6"></div>
                <div class="shape-divider" data-style="6" data-position="top" data-flip-vertical="true"></div>
                <div class="row sh">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 p-b-50" data-animate="zoomIn" data-animate-delay="1600">
                        <h1 class="ohs text-light text-center moba" style="border:1px solid rgba(255, 255, 255, 0.0);line-height:4rem;background:rgba(255, 255, 255, 0.15);backdrop-filter:blur(10px);border-radius:20px;"><b>Our Unique Features Which Make Us Stand Out</b></h1>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 s1 rel">
                         <svg class="connections" viewBox="0 0 1400 700">
                            <path d="M450 350 C600 20 850 150 1200 120"></path>
                            <path d="M450 350 C700 280 850 280 950 280"></path>
                            <path d="M450 350 C600 500 850 400 1150 450"></path>
                            <path d="M450 350 C600 700 850 500 950 600"></path>
                        </svg>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 rt align-items-center d-flex" style="padding:20px;" data-animate="zoomIn" data-animate-delay="200">
                                    <h1 class="paras hov2 cen moba2"><b>AI-Powered Customer Insights</b></h1>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-start" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s11.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s11.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Customer Behavior Analysis</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">This kind of CRM is generally built inside the company premises. Its whole infrastructure including its servers is physically located inside the company's campus and can be accessed only within the boundaries of the campus.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s12.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s12.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Predictive Lead Scoring</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">A cloud-based CRM system is the most sought-after kind, as it's easily accessible through any browser anywhere in the world. This enables quicker deployments and more versatile usage of the platform.
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
                                                <div class="d-flex justify-content-start" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s13.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s13.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Customer Segmentation</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">These CRMs are built from the ground up to cater to the niche requirements of different industries. CRMs are built.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s14.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s14.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Churn Prediction</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">The most popular cloud CRM offerings tend to be all-in-one CRM solutions that are robust, extremely customizable.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt1 s2 rel">
                        <svg class="connections" viewBox="0 0 1400 700">
                            <path d="M950 335 C700 100 550 150 250 120"></path>
                            <path d="M950 335 C700 280 550 280 450 280"></path>
                            <path d="M950 335 C700 500 550 360 250 450"></path>
                            <path d="M950 335 C700 700 550 420 450 500"></path>
                        </svg>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 dnone1 lt align-items-center" style="padding:20px;" data-animate="zoomIn" data-animate-delay="200">
                                    <h1 class="paras hov2 cen moba2"><b>Workflow & Process Automation</b></h1>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s21.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s21.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Automated Task Assignment</b></h3>
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
                                                <div class="d-flex justify-content-start" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s22.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s22.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Approval Workflows</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">A cloud-based CRM system is the most sought-after kind, as it's easily accessible through any browser anywhere in the world. This enables quicker deployments and more versatile usage of the platform.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s23.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s23.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Trigger-Based Actions</b></h3>
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
                                                <div class="d-flex justify-content-start" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s24.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s24.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Email & Follow-Up Automation</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">The most popular cloud CRM offerings tend to be all-in-one CRM solutions that are robust, extremely customizable.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 dnone2 lt align-items-center" style="padding:20px;padding-top:260px;" data-animate="zoomIn" data-animate-delay="200">
                                    <h1 class="paras hov2 cen" style="font-size:40px;"><b>Workflow & Process Automation</b></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt2 s3 rel">
                        <svg class="connections" viewBox="0 0 1400 700">
                            <path d="M450 350 C820 0 850 150 1200 120"></path>
                            <path d="M450 350 C700 280 850 280 950 280"></path>
                            <path d="M450 350 C600 500 850 370 1150 450"></path>
                            <path d="M450 350 C600 700 850 500 950 600"></path>
                        </svg>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 rt align-items-center d-flex" style="padding:20px;" data-animate="zoomIn" data-animate-delay="200">
                                    <h1 class="paras hov2 cen moba2"><b>Omni-Channel Communication Hub</b></h1>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-start" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s31.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s31.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Email Integration</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">This kind of CRM is generally built inside the company premises. Its whole infrastructure including its servers is physically located inside the company's campus and can be accessed only within the boundaries of the campus.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s32.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s32.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>WhatsApp Messaging</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">A cloud-based CRM system is the most sought-after kind, as it's easily accessible through any browser anywhere in the world. This enables quicker deployments and more versatile usage of the platform.
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
                                                <div class="d-flex justify-content-start" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s33.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s33.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Voice & Call Management</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">These CRMs are built from the ground up to cater to the niche requirements of different industries. CRMs are built.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s34.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s34.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Live Chat Support</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">The most popular cloud CRM offerings tend to be all-in-one CRM solutions that are robust, extremely customizable.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt3 s4 rel">
                        <svg class="connections" viewBox="0 0 1400 700">
                            <path d="M950 335 C700 100 550 150 250 120"></path>
                            <path d="M950 335 C700 280 550 280 450 280"></path>
                            <path d="M950 335 C700 500 550 380 250 450"></path>
                            <path d="M950 335 C700 700 550 420 450 500"></path>
                        </svg>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 dnone1 lt align-items-center" style="padding:20px;" data-animate="zoomIn" data-animate-delay="200">
                                    <h1 class="paras hov2 cen moba2"><b>Advanced Analytics & Custom Dashboards</b></h1>
                                </div>
                                <div class="col-lg-6">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s41.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s41.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Executive KPI Dashboard</b></h3>
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
                                                <div class="d-flex justify-content-start" data-animate="fadeInDown" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s42.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s42.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Sales Performance Reports</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">A cloud-based CRM system is the most sought-after kind, as it's easily accessible through any browser anywhere in the world. This enables quicker deployments and more versatile usage of the platform.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-end" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s43.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s43.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Forecasting Analytics</b></h3>
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
                                                <div class="d-flex justify-content-start" data-animate="fadeInUp" data-animate-delay="200">
                                                    <div class="ac next gcard">
                                                        <div class="team-image">
                                                            <a class="image-hover-zoom" href="images/features/s44.png" data-lightbox="gallery-image" target="_blank"><img src="images/features/s44.png"></a>
                                                        </div>
                                                        <div class="team-desc">
                                                            <h3 class="ops" style="font-size:24px"><b>Custom Report Builder</b></h3>
                                                            <!--<p class="ohs2" style="font-size:1.2rem;">The most popular cloud CRM offerings tend to be all-in-one CRM solutions that are robust, extremely customizable.
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 dnone2 lt align-items-center" style="padding:20px;padding-top:260px;" data-animate="zoomIn" data-animate-delay="200">
                                    <h1 class="paras hov2 cen" style="font-size:40px;"><b>Advanced Analytics & Custom Dashboards</b></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec2 text-light">
            <div class="shape-divider" data-style="13" data-position="top" data-flip-vertical="true"></div>
            <section class="p-b-0 p-t-0" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading-text heading-section mt-5">
                                <h2 class="ohs">Automate Repetitive Tasks</h2>
                                <p class="ops" style="font-size:36px;padding:0px;"><b>Reduce manual effort and improve efficiency with intelligent workflow automation.</b></p>
                                <span class="ohs" style="font-size:24px;">Capabilities:</span>
                                <div class="align-items-center m-t-20 bag" data-animate="fadeInUp" data-animate-delay="200">
                                    <ul style="list-style-type:none;">
                                        <li class="ops">Lead assignment rules</li>
                                        <li class="ops">Task automation</li>
                                        <li class="ops">Follow-up reminders</li>
                                        <li class="ops">Approval workflows</li>
                                        <li class="ops">Automated notifications</li>
                                        <li class="ops">Email sequences</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center align-items-center d-flex" data-animate="fadeIn" data-animate-delay="200"><span style="overflow: hidden;border-radius: 12px;" class="hov"><img alt="" src="images/features/f1.jpeg" style="width:100%;border-radius:15px;"></span></div>
                    </div>
                </div>
            </section>
            <section class="p-b-0 p-t-0" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 dnone1 heading-section heading-text text-right m-b-0 m-t-30"style="padding:20px;padding-bottom:0px;">
                            <h2 class="ohs">Make Data-Driven Decisions</h2>
                        </div>
                        <div class="col-lg-6 text-center align-items-center d-flex" data-animate="fadeIn" data-animate-delay="200"><span style="overflow: hidden;border-radius: 12px;" class="hov"><img alt="" src="images/features/f2.png" style="width:100%;border-radius:15px;"></span></div>
                        <div class="col-lg-6">
                            <div class="heading-text heading-section mt-5 text-right">
                                <h2 class="ohs dnone2">Make Data-Driven Decisions</h2>
                                <p class="ops" style="font-size:36px;padding:0px;"><b>Gain real-time visibility into every aspect of your business through powerful analytics and customizable dashboards.</b></p>
                                <span class="ohs" style="font-size:24px;">Features:</span>
                                <div class="align-items-center m-t-20 bag" data-animate="fadeInUp" data-animate-delay="200">
                                    <ul style="list-style-type:none;">
                                        <li class="ops">Real-time reporting</li>
                                        <li class="ops">Sales forecasting</li>
                                        <li class="ops">Team performance tracking</li>
                                        <li class="ops">Revenue analytics</li>
                                        <li class="ops">Custom dashboards</li>
                                        <li class="ops">KPI monitoring</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-b-0 p-t-0" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading-text heading-section mt-5">
                                <h2 class="ohs">Connect Your Entire Tech Stack</h2>
                                <p class="ops" style="font-size:36px;padding:0px;"><b>Integrate HCRM with the tools your team already uses and create a seamless workflow across your organization.</b></p>
                                <span class="ohs" style="font-size:24px;">Categories:</span>
                                <div class="align-items-center m-t-20 bag" data-animate="fadeInUp" data-animate-delay="200">
                                    <table width="100%" class="mta">
                                        <colgroup>
                                            <col span="3" width="33.33%">
                                        </colgroup>
                                        <tr>
                                            <th class="ops">Communication</th>
                                            <th class="ops">Productivity</th>
                                            <th class="ops">Business</th>
                                        </tr>
                                        <tr>
                                            <td class="ops">Gmail</td>
                                            <td class="ops">Google Workspace</td>
                                            <td class="ops">Stripe</td>
                                        </tr>
                                        <tr>
                                            <td class="ops">Outlook</td>
                                            <td class="ops">Microsoft 365</td>
                                            <td class="ops">QuickBooks</td>
                                        </tr>
                                        <tr>
                                            <td class="ops">WhatsApp</td>
                                            <td class="ops">Zoom</td>
                                            <td class="ops">ERP Systems</td>
                                        </tr>
                                        <tr>
                                            <td class="ops">Teams</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center align-items-center d-flex" data-animate="fadeIn" data-animate-delay="200"><span style="overflow: hidden;border-radius: 12px;" class="hov"><img alt="" src="images/features/f3.png" style="width:100%;border-radius:15px;"></span></div>
                    </div>
                </div>
            </section>
            <section class="p-b-0 p-t-0" style="background:transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 dnone1 heading-section heading-text text-right m-b-0 m-t-30"style="padding:20px;padding-bottom:0px;">
                            <h2 class="ohs">Enterprise-Grade Security</h2>
                        </div>
                        <div class="col-lg-6 text-center align-items-center d-flex" data-animate="fadeIn" data-animate-delay="200"><span style="overflow: hidden;border-radius: 12px;" class="hov"><img alt="" src="images/features/f4.png" style="width:100%;border-radius:15px;"></span></div>
                        <div class="col-lg-6">
                            <div class="heading-text heading-section mt-5 text-right">
                                <h2 class="ohs dnone2">Enterprise-Grade Security</h2>
                                <p class="ops" style="font-size:36px;padding:0px;"><b>Protect your customer data with advanced security controls and industry-standard compliance measures.</b></p>
                                <span class="ohs" style="font-size:24px;">Features:</span>
                                <div class="align-items-center m-t-20 bag" data-animate="fadeInUp" data-animate-delay="200">
                                    <dl style="list-style-type:none;">
                                        <dt class="ops">End-to-End Encryption</dt>
                                        <dd class="ops" style="font-size:25px;">Sensitive information remains protected during storage and transmission.</dd>
                                        <dt class="ops">Role-Based Access Control</dt>
                                        <dd class="ops" style="font-size:25px;">Control who can access specific data and system functions.</dd>
                                        <dt class="ops">Audit Trails</dt>
                                        <dd class="ops" style="font-size:25px;">Track every activity across your organization.</dd>
                                        <dt class="ops">Automated Backups</dt>
                                        <dd class="ops" style="font-size:25px;">Daily backups ensure business continuity and disaster recovery.</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-lg-2 p-t-20 text-center"> <a class="btn btn-light btn-outline" href="contact.php">Get Started</a> </div>
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