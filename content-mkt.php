    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Inesh | Content Marketing</title>

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
     
            <div class="container" style="margin-top: 3rem;">
                <div class="section-title" style="margin-bottom: 4rem;">
                            <h2 class="text-center" style="font-size:3.2rem">Content Marketing</h2>
                        </div>
                <div class="row">
                    <div class="col-sm-6">
                        
            

                           <!-- Content marketing involves creating and sharing online content (such as videos, blogs, and social media posts) that does not directly promote a brand but its purpose is to encourage interest in its products or services. Content marketing is a calculated marketing approach focused on generating and sharing valuable and relevant content to attract visitors and maintain clearly defined audiences, and finally, to run a profit-making customer action.
                           Our annual research shows that most marketers are using content marketing. In fact, it is used by many leading organizations in the world, including P & G, Microsoft, Cisco Systems, and John Deere. It has been developed and executed by small businesses and one-person shops around the world. Why? Because it works! It works! -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `contentmkt_main`';
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo htmlspecialchars_decode($row['content']);
                          }
                      }
                      $conn->close();
                  ?>

                    
                        <div class="row text-center" id="buttonn">
                        <button class="btn btn-lg btn-default" style="color: white; background-color:#E13737; border-radius: 0px!important; margin-top: 10vh; box-shadow: 1px 1px 1px 1px #E13737; border: 1px solid #E13737" data-toggle="modal" data-target="#myModal">
                            Request a quote&ensp;<span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </div>
                        <br/>
                     
                    </div>
                    <div class="col-sm-6">
                     <img class="img-fluid" style="height: 500px; width: 100%; " src="img/content.png">    
                    </div>
                </div>
            </div>


   <div id="modal23"></div>

            <br/><br/><br/>
    <div class="container" >
    <div class="row">
        <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center">Overview</h2>
                </div>

                <!--   The difference between content marketing and other informational waste derived from the companies that you sell, which is trying to sell "goods" to you. Companies send us information all the time - it's just that most of the time it is not very relevant or valuable (can you call spam?). This is what makes perpetual content marketing so intriguing in the atmosphere of thousands of marketing messages per person per day. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `contentmkt_overview`';
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
</div>
<br/>

                <div class="container" >
                    <div class="row text-center" style="margin: 12px;">
                        <h3 class="text-center" style="font-size: 3rem; color: black!important">Marketing without great content is impossible</h3>
                        <br/>
                        <p class="text-justify " style="text-align: center; font-size: 15px;">Regardless of the type of marketing strategy you use, content marketing should be a part of your process, not something different. </p>
                        <br/><br/><br/>

                        <h3 class="text-center" style=" color: black!important">Unique and quality content is part of all forms of marketing:</h3>
                        <br/>
</div>
      <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
              <div class="col-lg-4 col-xs-12 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Social Media Marketing.png" width="60px" height="60px" style="margin-top:-35px"></div> 
                <br/> <br/>            
              <h4 class="title" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Social Media Marketing</a></h4>
              <br/>
              <p class="description">The content marketing strategy comes before your social media strategy.</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-xs-12 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/SEO.png" width="60px" height="60px"  style="margin-top:-35px"></div>
                    <br/> <br/> 
                <h4 class="title" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">SEO </a></h4>
                <br/>
                <p class="description"> search engines reward websites that publish quality, consistent content.</p>
              </div>
            </div>  
            <div class="col-lg-4 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/PR.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a style="color:#0c2e8a">PR</a></h4>
                  <br/>
                  <p class="description">The address of successful PR strategies cares for readers, not about their business.</p>
                </div>
              </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="col-lg-4 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/PPC.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a style="color:#0c2e8a">PPC</a></h4>
                  <br/>
                  <p class="description">You need great content to make a catching landing page for your PPC ads.</p>
                </div>
              </div>
        
 <div class="col-lg-4 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/Inbound Marketing.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a style="color:#0c2e8a">Inbound Marketing</a></h4>
                  <br/>
                  <p class="description">Content is important for running inbound traffic and leads.</p>
                </div>
              </div>
            
              <div class="col-lg-4 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/Email Marketing.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a style="color:#0c2e8a">Email Marketing</a></h4>
                  <br/>
                  <p class="description">Unique Content is always important for email campaigns.</p>
                </div>
              </div>
            </div>
        </div>
        
           </div> </div>






<br/><br/>

               <div class="container-fluid">
                <h3 class="text-center" style=" color: black!important">What marketing goals can content marketing serve?  </h3>
                <br/><br/>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="col-lg-3 col-xs-6 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Brand Awareness.png" width="60px" height="60px" ></div> 
                <br/><br/><br/> 
              <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Brand awareness</a></h4>
              <br/><br/><br/>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Lead generation.png" width="60px" height="60px"  ></div>
                <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Lead generation</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Engagement.png" width="60px" height="60px" ></div>
                <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Engagement</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Sales.png" width="60px" height="60px"  ></div>
                <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Sales</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            </div>
        </div>
        <br/>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="col-lg-3 col-xs-6 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Lead nurturing.png" width="60px" height="60px"></div> 
               <br/><br/><br/> 
              <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Lead nurturing</a></h4>
              <br/><br/><br/>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Customer retention and loyalty.png" width="60px" height="60px"></div>
                 <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Customer retention and loyalty</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Customer evangelism.png" width="60px" height="60px"></div>
                 <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Customer evangelism</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Up-selling and cross-selling.png" width="60px" height="60px"></div>
                 <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Up-selling and cross-selling</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
          </div>            
        </div>
          <br/>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="col-lg-3 col-xs-6 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Partner enablement.png" width="60px" height="60px" ></div> 
               <br/><br/><br/>
              <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Partner enablement</a></h4>
               <br/><br/><br/>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Channel marketing.png" width="60px" height="60px"  ></div>
                 <br/><br/><br/> 
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Channel marketing</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Customer experience enhancement.png" width="60px" height="60px"  ></div>
                 <br/><br/><br/> 
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Customer experience enhancement</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-3 col-xs-6 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Customer Feedback.png" width="60px" height="60px"  ></div>
                <br/><br/><br/> 
                <h4 class="description" Align="center" style="color:#0c2e8a"><a  style="color:#0c2e8a">Customer Feedback</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
          </div>
        </div>
    </div>
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
                            <td class="font-weight-bold">Blog Writing</td>
                            <td>3</td>
                            <td>5</td>
                            <td>7</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Blog Publishing</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Article Writing</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Article Publishing</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Press Release Writing</td>
                            <td><span class="fa fa-times"></span></td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Press Release Publishing</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Classified Ads Writing</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Classified Ads Publishing</td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Published Content Sharing</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Profile Creation</td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-times"></span></td>
                            <td><span class="fa fa-check"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 text-center">
          <h3 style="color: black; margin-bottom: 30px; margin-top: 30px;">
            Looking for a content writer to write an awesome blog or article for your business? Well we have a solution for that too. Here is the per word writing charges for your reference.
          </h3>
          <table class="table table-responsive">
            <thead style="color: white; background-color: #E13737;">
              <tr>
                <th class="text-center">Content Length</th>
                <th class="text-center">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>200-300 words</td>
                <td>$25</td>
              </tr>
              <tr>
                <td>300-400 words</td>
                <td>$35</td>
              </tr>
              <tr>
                <td>400-500 words</td>
                <td>$45</td>
              </tr>
              <tr>
                <td>500-600 words</td>
                <td>$55</td>
              </tr>
              <tr>
                <td>600-700 words</td>
                <td>$65</td>
              </tr>
              <tr>
                <td>700-800 words</td>
                <td>$75</td>
              </tr>
              <tr>
                <td>800-900 words</td>
                <td>$85</td>
              </tr>
              <tr>
                <td>900-1000 words</td>
                <td>$95</td>
              </tr>
              <tr>
                <td>1000-1500 words</td>
                <td>$110</td>
              </tr>
              <tr>
                <td>1500-2000 words</td>
                <td>$130</td>
              </tr>
              <tr>
                <td>2000+ words</td>
                <td>$130 + 50cents per word</td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-lg text-center" style="color: white; border-radius: 0px!important; background-color:#E13737; margin-top: 30px!important; margin-bottom: 20px!important;" data-toggle="modal" data-target="#mymodal">ORDER NOW</button>
        </div>
      </div>
    </div>

                

 <div id="modal23"></div>


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
