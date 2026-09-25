<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Hasan" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Contact Us</title>
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
            font-size: 30px;
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
        .contact-form-wrapper{
            background:
                radial-gradient(circle at 20% 20%, rgba(98,145,255,.18), transparent 35%),
                radial-gradient(circle at 80% 30%, rgba(72,201,255,.14), transparent 35%),
                radial-gradient(circle at 50% 80%, rgba(110,180,255,.12), transparent 45%),
                linear-gradient(
                    135deg,
                    #365f82 0%,
                    #2b4f6d 35%,
                    #244764 65%,
                    #1f3c56 100%
                );

            border-radius:20px;
            overflow:hidden;
            position:relative;
            z-index:1;

            border:1px solid rgba(255,255,255,.08);
            box-shadow:0 15px 35px rgba(0,0,0,.18);
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
            background:rgba(255,255,255,.12);
            border:1px solid rgba(255,255,255,.18);
            color:#fff;
        }

        .contact-form-wrapper input::placeholder,
        .contact-form-wrapper textarea::placeholder{
            color:rgba(255,255,255,.70);
        }
        .contact-form-wrapper *{
            position: relative;
            z-index:1;
        }
        .moba{
            font-size:50px;
        }
        @media(max-width: 768px){
            .moba{
                font-size:40px;
                line-height: 2.5rem;
            }
            .moba2{
                font-size:30px;!important
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
            <div class="slide" style="background-image:url('images/contact/h1.png');">
                <div class="shape-divider" data-style="10"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <h1 class="ohs moba">Contact Us</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <section style="background-color:#10313e;">
            <div class="shape-divider" data-style="6" data-position="top" data-flip-vertical="true"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 heading-text heading-section">
                        <h2 class="ohs moba2 text-light"><b>Get In Touch</b></h2>
                        <span class="ops text-light">Whether you're planning a new CRM implementation, migrating data from an existing platform, or looking to optimize your current customer management processes, our team is here to help. Reach out to discuss your requirements, request a consultation, or learn how HCRM can support your organization.</span>
                        <div class="row m-t-40">
                            <div class="col-lg-6 ops text-light">
                                <address>
                                    <strong>HCRM</strong><br>
                                    Hyderabad, Telangana, India<br>
                                    <abbr title="Phone">P:+91 98765 43210</abbr><br>
                                    Email: contact@hcrm.com<br>
                                    Business Hours:<br>
                                    Monday – Friday<br>
                                    9:00 AM – 6:00 PM IST<br>
                                </address>
                            </div>
                        </div>
                        <div class="social-icons m-t-30 social-icons-colored">
                            <ul>
                                <li class="social-facebook"><a href="https://www.facebook.com/p/Tekofy-Technologies-61573656572289/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-linkedin"><a href="https://in.linkedin.com/company/tekofy-technologies" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li class="social-youtube"><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-instagram"><a href="https://www.instagram.com/tekofy.in/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <section class="container contact-form-wrapper p-t-40" style="padding-bottom:92px;">
                            <div class="text-center m-b-0">
                                <h2 class="ohs text-light" style="width:100%;font-size:30px;padding: 20px;"><b>Contact Form</b></h2>
                            </div>
                            <div style="border-radius:10px;padding:20px;">
                                <form class="widget-contact-form text-light" novalidate action="#" role="form" method="get">
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
                    </div>
                </div>
            </div>
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.964588050565!2d78.5243931!3d17.413487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880d706b375c844d%3A0x7a030288a687eeb2!2sTekofy%20Technologies%20-%20Software%20Company!5e0!3m2!1sen!2sin!4v1780998527653!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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