<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | About Page</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- mobile responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--Favicon-->
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<link rel="icon" href="images/logo.png" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
});
    </script>
</head>

<body>
<div class="page-wrapper">  
    

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->


  <div id="header1"></div>
    
    <!--Wellcome Section-->
    <section class="wellcome-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Who We Are & What We Do?</h2>
     <!--            <p>Inesh is web marketing, analytics and an optimization company with an office in Ontario, Canada (ON) and offshore office New Delhi, India (IN). We help businesses precisely track their advertising results and get more sales, leads and revenue from the internet through digital marketing. We adopt a custom approach for each customer to ensure that our strategies connect with their unique business goals and objectives.
                    <br/>
                    If you are a business owner, have ambitious development goals, and are looking for a terrific partner to help you improve your marketing performance to get more leads and revenue from the internet, then you come to the perfect place.
                </p> -->
                    <?php 
                        include("connect.php");
                        $sql = 'SELECT * from `about_whatwedo`';
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo htmlspecialchars_decode($row['content']);
                            }
                        }
                        $conn->close();
                    ?>
            </div>
            <div class="row"> 
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-holder text-center">
                        <div class="icon-box">
                            <img style="height: 50px; width:50px;" src="images/icons/marketing.png">
                        </div>                           
                        <div class="text">
                            <a href="#"><h5>Marketing</h5></a>
                            <ul>
                                <li>SEO & Lead Generation</li>
                                <li>Online advertising</li>
                                <li>Social Media</li>
                                <li>Content Marketing</li>
                                <li>Video and Email Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-holder text-center">
                        <div class="icon-box">
                            <img style="height: 50px; width:50px;"  src="images/icons/webservices.png">
                        </div>                           
                        <div class="text">
                            <a href="#"><h5>Web Services</h5></a>
                             <ul>
                                <li>CMS Development</li>
                                <li>E-commerce Development</li>
                                <li>PHP Development</li>
                                <li>Web  Application</li>
                                <li>Logic & Graphic Designing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="item-holder text-center">
                        <div class="icon-box">
                            <img style="height: 50px; width:50px;" src="images/icons/mobapp.png">
                        </div>                           
                        <div class="text">
                            <a href="#"><h5>Mobile App Development</h5></a>
                            <ul>
                                <li>UI/UX Design</li>
                                <li>IOS Development</li>
                                <li>Android Development</li>
                                <li>App Prototype & Strategy</li>
                                <li>Mobile App Maintenance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Wellcome Section-->


    <!--Fact Counter-->
     <section class="fact-counter">
        <div class="container">

            <div class="row clearfix">
                <div class="counter-outer clearfix">
                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="count-outer">
                                <div class="icon">
                                    <i class="flaticon-layers"></i>
                                </div>                                
                                <span >230+</span>
                            </div>
                            <h4 class="counter-title">Projects Done</h4>
                        </div>                            
                    </article>
                    
                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="count-outer">
                                <div class="icon">
                                    <i class="flaticon-users"></i>
                                </div>
                                <span >99%</span>
                            </div>
                            <h4 class="counter-title">Satisfied Clients</h4>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="count-outer">
                                <div class="icon">
                                    <i class="flaticon-cup"></i>
                                </div>
                                <span >100%</span>
                            </div>
                            <h4 class="counter-title">Retention Ratio</h4>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                        <div class="item">
                            <div class="count-outer">
                                <div class="icon">
                                    <i class="flaticon-trophy"></i>
                                </div>
                                <span >24/7</span>
                            </div>
                            <h4 class="counter-title">Customer Support</h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--End Fact Counter-->

<br/>
    <!--Choose Us-->
    <section class="choose-us">
        <div class="container">
            <div class="section-title text-center">
                <h2>Why Choose Inesh</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">
    
                <div class="content-text">
                    <?php 
                        include("connect.php");
                        $sql = 'SELECT * from `about_whyus`';
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo htmlspecialchars_decode($row['content']);
                            }
                        }
                        $conn->close();
                    ?>
 <!--                    <p><strong style="color: black;">We have only one goal:</strong> Help business owners and marketing executives use technology and the Internet and improve their marketing performance and Return on Investment (ROI). It starts with an accurate tracking of each advertising strategy - even if your only strategy is your company's website. Tracking will give you insights which are never-seen-before, it would be about your business and will change the way your ads and marketing are viewed forever. Data from tracking and analysis of the website shared by Inesh will authorize you to eliminate ineffective advertising strategies and quickly identify new marketing strategies that have the potential to help you develop your business more effectively. You will get opportunities to get more output from your website-like strategies. Inesh has helped dozens of companies’ double, triple, and even quadruple their website's hit-to-lead conversion rates.<br/>
                        But the exact measurement and tracking (marketing analytics) is the foundation and the first step towards improving your marketing - and how much technology can be exposed to your business, it is constantly progressing.
                    </p>
                </div>

                <div class="content-text">
                    <p><strong style="color: black;">Industries we Serve: </strong>
                      Although almost any type of business can take advantage of the Internet as a sales and marketing tool, and can benefit from accurate advertising tracking and marketing measurement, business-to-consumer service-type businesses get more profit by this strategy. Currently, customers of Inesh come from almost every B2C service industry - from clean energy, solar panels, plumbing, healthcare to roof companies and HVAC. We have many bottled water distribution companies and many big pipeline companies. If you invest in advertising or have a website, then Inesh can certainly help you to increase your performance. Increasing performance increases your investment in our service, which is ultimately the end goal of every marketing agency. 
                    </p> -->
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--End Choose Us-->


    <!--Cta Section-->

        <section class="choose-us">
        <div class="container">
            <div class="section-title text-center">
                <h2>Mission & Values</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12">
    
                <div class="content-text">
                 <!--    <p>We want to win your "trust". We are dedicated to providing efficient services to our valued customers in the field of Information Technology; we strive for your satisfaction and support. We want to provide high quality, need-oriented, cost-cutting, innovative and value-added software and web solutions that meet your needs. We are committed to creating an ever-rewarding Internet entity for ambitious companies, whose aim is to keep pace with today's fast-moving e-times; our aim is to facilitate the development of your organization.<br/>
                        Our aim is to create tailored-fit solutions for businesses by unlocking the power of digitally powered services with a solid impact on the revenue of our client every given point in time. Our goal is to create a platform for SEO, SMM, ORM and other online marketing solutions to enter every corner of the world.
                    </p> -->
                    <?php 
                        include("connect.php");
                        $sql = 'SELECT * from `about_mission`';
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo htmlspecialchars_decode($row['content']);
                            }
                        }
                        $conn->close();
                    ?>
                </div>
                <br/>
            <div class="container" style="margin-top: 12vh;">
                <div class="row">
                    <div class="col-xs-offset-1 col-sm-10">
                        <div class="row">
                            <h2 style="color: black;" class="text-center">Our Core values</h2>
                        </div>
                    <br>
                    <div class="row">

                            <div class=" col-sm-3 col-xs-12">
                                <div class="dontknowthename">
                                    <div class="cb-container">
                                        <div class="icon">
                                            <img src="./final-assets/About Us Page/Transparency in activity and communication - Our Core Values.png" alt="Avatar" 
                                            width="80px" height="80px" style="margin-top: -20px;" >
                                        </div>
                                        <br/><br/><br/>
                                        <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Transparency in activity and communication</a></h4>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-3 col-xs-12">
                                <div class="dontknowthename">
                                    <div class="cb-container">
                                        <div class="icon">
                                            <img src="./final-assets/About Us Page/Emphasizing relationships - Our Core Values.png" alt="Avatar" 
                                            width="80px" height="80px" style="margin-top: -20px;" >
                                        </div>
                                        <br/><br/><br/>
                                        <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Emphasizing relationships</a></h4>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-3 col-xs-12">
                                <div class="dontknowthename">
                                    <div class="cb-container">
                                        <div class="icon">
                                            <img src="./final-assets/About Us Page/Rate of communication - Our Core Values.png" alt="Avatar" 
                                            width="80px" height="80px" style="margin-top: -20px;" >
                                        </div>
                                        <br/><br/><br/>
                                        <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a"> Rate of communication</a></h4>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="dontknowthename">
                                    <div class="cb-container">
                                        <div class="icon">
                                            <img src="./final-assets/About Us Page/Discipline in commitment - Our Core Values.png" alt="Avatar" 
                                            width="80px" height="80px" style="margin-top: -20px;" >
                                        </div>
                                        <br/><br/><br/>
                                        <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Discipline in commitment</a></h4>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="dontknowthename">
                                    <div class="cb-container">
                                        <div class="icon">
                                            <img src="./final-assets/About Us Page/Learning on the go - Our Core Values.png" alt="Avatar" 
                                            width="80px" height="80px" style="margin-top: -20px;"  >
                                        </div>
                                        <br/><br/><br/>
                                        <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Learning on the go</a></h4>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="dontknowthename">
                                    <div class="cb-container">
                                        <div class="icon">
                                            <img src="./final-assets/About Us Page/Solution driven attitude - Our Core Values.png" alt="Avatar" 
                                            width="80px" height="80px" style="margin-top: -20px;" >
                                        </div>
                                        <br/><br/><br/>
                                        <h4 class="title" Align="center" style="color:#0c2e8a; margin-top: 10px;"><a href="" style="color:#0c2e8a">Solution driven attitude</a></h4>
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
<div class="col-sm-2"></div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!--End Cta Section-->


<div id="footer1"></div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/isotope.js"></script> 


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>

<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<!-- bxslider -->
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>

<script src="js/script.js"></script>
</body>
</html>
