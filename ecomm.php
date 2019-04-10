<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Ecommerce</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- mobile responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
$("#header1").load("header.php");
$("#footer1").load("footer.php");
$("#modal23").load("modal.php");
});
    </script>
</head>

<body>
<div class="page-wrapper">  
    

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->

<div id="header1"></div>
    
        <!--End Main Header -->
    
    <!-- ECOMM SECTION -->
    <div class="container" style="margin-top: 3rem;">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:3.2rem">Ecommerce Development</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                    <p class="my-3 text-justify">
                            <!-- As the time has passed by and internet took over the world and now internet has become the world for 
                            social connections, for businesses or you can say to grab any knowledge. Now we need to understand if 
                            the world is present at internet so the companies should also be there to promote their business to
                            sell their services and products and this new technology is called ecommerce where you post your 
                            products online on your website with all the info and prices along with comparison shipping and 
                            easy return policies, similar to companies like Amazon, E-Bay, Alibaba, Ali Express,  they are only 
                            selling products online and they are the big shots of this world in fact Mr. Jeff Bezos from Amazon 
                            has become the richest man on earth from this technology so you can understand the power of internet
                            when used with an ecommerce. -->
                        <?php 
                            include("connect.php");
                            $sql = 'SELECT * from `ecomm_main`';
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo htmlspecialchars_decode($row['content']);
                                }
                            }
                            $conn->close();
                        ?>
                    </p>
                    <div class="row text-center" id="buttonn">
                <button class="btn btn-lg btn-default" style="color: white; background-color:#E13737; border-radius: 0px!important; margin-top: 10vh; box-shadow: 1px 1px 1px 1px #E13737; border: 1px solid #E13737" data-toggle="modal" data-target="#myModal">
                    Request a quote&ensp;<span class="glyphicon glyphicon-arrow-right"></span>
                </button>
            </div>
                </div>
                <div class="col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="margin-bottom: 2rem;">
                    <img src="./final-assets/E-Commerce Development/top.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

<div id="modal23"></div>        


<div class="container" style="margin-top: 5rem;">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:3.2rem">Overview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <p class="my-3 text-justify">
                    <!--     Ecommerce has broken all the boundaries, as a person sitting at USA can launch an ecommerce
                        store and from all over the world people can buy the product so that’s the power of ecommerce that
                        you have whole world as your customer. Ecommerce is growing at the global level for both the B2B
                        and B2C market segments. With the rapid increase in the number of smart phones, broadband
                        connections, and innovative payment solutions, technology progress is driving this growth in online
                        shopping and competition makes it necessary to partner with e-commerce website Development
                        Company to maintain competition.
                    </p>
                    <p class="my-3 text-justify">
                        We at Inesh provide a comprehensive list of ecommerce website design offerings, along with custom
                        development, theme optimization and maintenance services, along with efficient ecommerce
                        development services. -->
                        <?php 
                            include("connect.php");
                            $sql = 'SELECT * from `ecomm_delieverftre`';
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo htmlspecialchars_decode($row['content']);
                                }
                            }
                            $conn->close();
                        ?>
                    </p>
                </div>
            </div>   
        </div>
        
        
        <div class="container text-center col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 text-center" style="margin-top: 20px;">
            <img src="./img/ecomm.png" alt="" class="img-fluid" style="position: inherit; max-width:100%;height:auto">
        </div>
        <div class="container">
            <div class="row col-xs-8 col-xs-offset-2"style="margin-top: 10vh;">
                <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3rem">Our Services Include</h2>
                </div>
            </div>
        </div>
        <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding: 10px!important; margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/E-Commerce Development/Customer Management - Our ecommerce expertise.png" width="60px" height="60px" class="img-fluid"  alt="">
                                    </div> 
                                    <br/><br/><br/>
                                  <h4 class="title" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Custom ecommerce Web Development</a></h4>
                                  <br/><br/><br/>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding: 10px!important; margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/E-Commerce Development/Shopping Cart Abandonment - Our ecommerce expertise.png" width="60px" height="60px" class="img-fluid"  alt="">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" align="center" style="color: #0c2e8a">
                                        <a href="" style="color: #0c2e8a">Ecommerce Shopping Cart Development</a>
                                    </h4>
                                   <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding: 10px!important; margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/E-Commerce Development/Payment Management - Our ecommerce expertise.png" width="60px" height="60px" class="img-fluid"  alt="">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" align="center" style="color: #0c2e8a">
                                        <a href="" style="color: #0c2e8a">Payment Gateway Integration</a>
                                    </h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding: 10px!important; margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/E-Commerce Development/Responsive Design - Our ecommerce expertise.png" width="60px" height="60px" class="img-fluid"  alt="">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" align="center" style="color: #0c2e8a">
                                        <a href="" style="color: #0c2e8a">Responsive ecommerce Websites</a>
                                    </h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding: 10px!important; margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/E-Commerce Development/SEO & Marketing - Our ecommerce expertise.png" width="60px" height="60px" class="img-fluid" alt="">
                                    </div>
                                    <br/><br/><br/>
                                    <h4 class="title" align="center" style="color: #0c2e8a">
                                        <a href="" style="color: #0c2e8a">Plug-in & Module Development</a>
                                    </h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="padding: 10px!important; margin-top: 18px;">
                            <div class="dontknowthename">
                                <div class="cb-container">
                                    <div class="icon">
                                        <img src="./final-assets/E-Commerce Development/Product Management - Our ecommerce expertise.png" width="60px" height="60px" class="img-fluid" alt="">
                                    </div>
                          <br/><br/><br/>
                                    <h4 class="title" align="center" style="color: #0c2e8a">
                                        <a href="" style="color: #0c2e8a">Ecommerce Website Design & Customization</a>
                                    </h4>
                                    <br/><br/><br/>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
        </div>

        <div class="container" style="margin-top: 10vh;">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                    <div class="row">
                        <!-- <div class="section-title" style="margin-bottom: 4rem;"> -->
                            <h2 class="text-center" style="font-size:3rem;margin-bottom: 4rem; color: black;">Working with Inesh will deliver the Said Features</h2>
                        <!-- </div> -->
                    </div>
                    <ol style="list-style-type:circle; text-align: center;">
                            <li style="margin-bottom: 10px;">1. Ecommerce sites with all necessary features to cover all key retail functions, including campaign and promotions management, catalogue management, trading analysis, multi-channel and content management system for magazine style content</li>
                            <li style="margin-bottom: 10px;">2. Integration with leading web analytics, marketing campaign tools and standard merchant systems</li>
                            <li style="margin-bottom: 10px;">3. Third party security checks and fraud prevention as an integral part of the order process.</li>
                            <li style="margin-bottom: 10px;">4. Full audit trails, Payment Card Industry (PCI) Compliant, managed authentication and authorization</li>
                            <li style="margin-bottom: 10px;">5. Intensive reporting of key business metrics such as customer acquisition, sales, orders, payments, discounts, abandoned carts etc.</li>
                            <li style="margin-bottom: 10px;">6. Maximized buyer objective rates (add-to-basket per customer visits)</li>
                            <li style="margin-bottom: 10px;">7. Enhanced shopping basket conversion rate</li>
                            <li style="margin-bottom: 10px;">8. Optimized page response time</li>
                            <li style="margin-bottom: 10px;">9. Zero obstructions from basket through checkout to sale</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END ECOMM -->

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
