<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Video Marketing</title>

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


    <!--Page Title-->
    <!-- <section class="page-title" style="background: url(images/background/2.jpg);">
        <div class="container text-center">
            <div class="title">
                <h4>Web Designing and Development</h4>
            </div>
            <ul class="title-manu">
                <li><a href="index.html">home</a></li>
                <li>></li>
                <li>Web Designing</li>
            </ul>         
        </div>
    </section> -->
    <!--End Page Title-->

    <!-- WEB DEVELOPMENT -->
        <div class="container" style="margin-top: 3rem;">
            <div class="section-title" style="margin-bottom: 4rem;">
                        <h2 class="text-center" style="font-size:3.2rem">Video Marketing</h2>
                    </div>
            <div class="row">
                <div class="col-sm-6">
                    
                    <p class="my-3 text-justify">
                    <!--    If a photo is worth thousands of words, how much more valuable is the video? This is the basis of video marketing, a marketing strategy that integrates attractive videos into your marketing campaigns.
                    </p>
                    <p class="text-center text-justify my-2">
                      Video marketing can be used for everything from building customer rapport to promoting its brands, services or products. In addition, video marketing can work as a medium for customer's testimonials, promoting live-stream events and distributing viral content. On the surface, the method of video marketing is very simple: your brand creates videos that promotes your company in some way, increases sales, increases awareness of your products or services, or connects your customers. In practice, this is a bit more complex. Like many of your marketing efforts, video marketing data is driven, so you want to keep tabs on different metrics and track customer engagement. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `video_main`';
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
                    <br/>
                </div>
                <div class="col-sm-6">
             <img class="img-fluid" style="height: 400px; width: 100%; " src="img/video-mkt.png">
                    
                </div>
            </div>
                
        </div>
        <div id="modal23"></div>
<br/><br/><br/>
            <div class="container">
                <div class="row " style="margin: 12px; margin-bottom: 3rem!important;">
                    <br/>
                    <h3 class="text-center"  style="font-size: 3rem; color: black!important">To develop your video marketing strategy, you would like to:</h3>
                    <br/>
                    <ul style="font-size: 15px; text-align: left;margin-bottom: 5rem!important" >
                      <!-- <li> •You need to specify some budget for video - at least, decent tools, good editing software, and video marketing guru (or, better, team) - as well as the time to build it.</li><br/>
<li>•   Tell your stories. Storytelling is never as important as it is in the video, so brainstorm: What stories do you want to tell? How do you tell them?</li>
<br/>
<li>•   Include. It is not enough just to tell your stories; You need to engage your audience while doing this. How would you make your stories interesting? What will hook your audience?</li>
<br/>
<li>•   Keep it short. There is no fixed length for marketing video (although there are recommendations), but the general rule is that less is better. Be ruthless with your editing. Cut, cut, chop everything out. Note that the span is low, so what you get, make the best of it.</li>
<br/>
<li>•   Publish your video remotely - uploaded to your website embedded on Google-owned YouTube and all your social media channels.</li>
<br/> -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `video_developmkt`';
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo htmlspecialchars_decode($row['content']);
                          }
                      }
                      $conn->close();
                  ?>

                    </ul>
                  
                        <h3 class="text-center"  style="font-size: 3rem; color: black!important">Benefits of Video Marketing</h3>
                        <br/><br/>
                        <p class="text-center">
                            <!-- The video helps you connect with your audience. Today, many of the company's marketing efforts are designed to help build trust. The video is a bridge that shows the links you say that you are really in, so that customers can become co-workers behind the curtain and learn your brand.
The video is an SEO gold mine, which helps to increase backlinks on your site, increase likes and share (which can affect search ranking) and increase traffic to your site. And do not forget that YouTube is owned by Google, so make sure to post your video with the YT and tags, key tags of the keyword!<br/>
Promote video information retention. If your customers hear a few, they are likely to maintain about 10% of that information three days later; On the contrary, if they hear what happens with relevant imagery, then they will maintain an average 70% of that information three days later.
In 2020, video content will be 72% of estimated online traffic. Your Customers would also like the video, which means that good video marketing can attract new visitors. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `video_benefitmkt`';
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
<br/><br/>
<h3 class="text-center"  style="font-size: 3rem; color: black!important">What it does?</h3>
<br/>



<div class="row">
          <div class="col-lg-6 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Increases engagement.png" width="60px" height="60px" style="margin-top:-35px"></div> 
                <br/>           <br/>  
              <h4 class="title" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Increases engagement</a></h4>
              <br/>
              <p class="description">Visual content is the key to greater engagement, especially when the video is too much to be shared on social media. Compared to the audience blogs or related social posts, there are almost 10 times more chance of engaging, sharing, and commenting on video content. In fact, the video on the Facebook Business page raises the number of end users to 33%. </p>
            </div>
          </div>
          <div class="col-lg-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Adds personality to your brand.png" width="60px" height="60px"  style="margin-top:-35px"></div>
                    <br/> <br/> 
                <h4 class="title" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Adds personality to your brand</a></h4>
                <br/>
                <p class="description">Sure a picture may be worth a thousand words, but even a small video can say millions for your brand. Video companies are perfect for branding and actually increases brand awareness up to 52%. </p>
              </div>
            </div>  
        </div>
                    </div>
                </div>
            </div>

             

    <!-- END WEB DEVELOPMENT -->
    <!--Team Section-->
    <!-- <section class="team-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/1.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Monica Dull</h5></a>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/2.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Roxan Gilbert</h5></a>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/3.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Adam Lambert</h5></a>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/4.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Monica Dull</h5></a>
                            <span>Co-Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/5.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Roxan Gilbert</h5></a>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img src="images/team/6.jpg" alt="">
                            </figure>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="text text-center">
                            <a href="#"><h5>Adam Lambert</h5></a>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
            </div>                                    
        </div>
    </section> -->
    <!--End Team Section-->
    <div class="container" style="margin-top: 3rem; overflow-x: auto;">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center" style="font-size:3.2rem">Plan and Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 text-center">
                <table class="table table-responsive">
                    <thead style="background-color:#E13737; color:white; font-size:1.5rem; padding: 10px;" >
                        <tr>
                            <th class="text-center">Services</th>
                            <th class="text-center">Basic</th>
                            <th class="text-center">Premium</th>
                            <th class="text-center">Business</th>
                            <th class="text-center">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Video Creation</td>
                            <td>2</td>	
                            <td>3</td>	
                            <td>4</td>	
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Video Length</td>
                            <td>Up to 90 seconds</td>
                            <td>Up to 2 minutes</td>
                            <td>Up to 3-4 minutes</td>
                            <td>Up to 3-4 minutes</td>
                        </tr>
                        <tr>
                            <td>Video Posting</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            </tr>
                        <tr>
                            <td>Platforms Covered</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="container">
        <div class="row text-center">
            <h2 style="color:black; margin-bottom: 40px!important">Video Promotion</h2>
            <div class="col-xs-10 col-xs-offset-1 text-center">
                <table class="table table-responsive">
                    <thead style="background-color:#E13737; color:white; font-size:1.5rem; padding: 10px;" >
                        <tr>
                            <th class="text-center">Services</th>
                            <th class="text-center">Basic</th>
                            <th class="text-center">Premium</th>
                            <th class="text-center">Business</th>
                            <th class="text-center">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">On Social Media Platforms</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Youtube Channel Creation</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Daily Motion Channel Creation</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Vimeo Channel Creation</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Veoh Channel Creation</th>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Metacafe Channel Creation</th>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Daily Motion Channel Promotion</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Vimeo Channel Promotion</th>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Veoh Channel Promotion</th>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Metacafe Channel Promotion</th>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Increase in Subscribers</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Email Support</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>                    
                        <td><span class="fa fa-check"></span></td>                    
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Chat Support</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>                    
                        <td><span class="fa fa-check"></span></td>                    
                    </tr>
                    <tr>
                        <th width="21%" style="font-size: 1.4rem">Phone Support</th>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>                    
                        <td><span class="fa fa-check"></span></td>                    
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
                </table>
                <button class="btn btn-lg text-center" style="color: white; border-radius: 0px!important; background-color:#E13737; margin-top: 30px!important; margin-bottom: 20px!important;" data-toggle="modal" data-target="#mymodal">ORDER NOW</button>
            </div>
        </div>  
    </div>   

 <div id="modal23"></div>
    <!--Subscribe Section-->
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
