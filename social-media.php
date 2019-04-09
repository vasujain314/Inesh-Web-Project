<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Social Media Marketing</title>

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
                        <h2 class="text-center" style="font-size:3.2rem">Social Media Marketing</h2>
                    </div>
            <div class="row">
                <div class="col-sm-6">
                    
                    <p class="my-3 text-justify">
                      <!--  The process of gaining traffic, attention or branding of a product or service through social media sites is called social media marketing. 
                        probably you are not going to get any business from that user.
                       Social media itself is a catch-all term for those sites which can fundamentally provide various social functions. For example, Twitter is a social site that is designed to make people share short messages or "updates" with others. On the contrary, Facebook is a fully developed social networking site that allows sharing updates, photos, joining events and many other activities. Social media is a powerful way for businesses of all sizes to reach marketing prospects and customers. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `socialmed_main`';
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
                        <button class="btn btn-lg btn-default" style="color: white; background-color:#E13737; border-radius: 0px!important; margin-top: 10vh; box-shadow: 1px 1px 1px 1px #E13737; border: 1px solid #E13737" data-toggle="modal" data-target="#myModal"> Request a quote&ensp;<span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                        <img class="img-fluid" style="height: 380px; width: 100%; " src="img/social-media.png">
                    
                </div>
            </div>
                
    </div>

   <div class="modal fade" id="myModal" role="dialog" style="z-index: 9999999; margin-top: 8%;">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title" style="text-align: center;">Request a Quote<br/>(Complete This form)</h4>
                              </div>
                              <div class="modal-body">
                               <div class="container" style="width: 80%;">
                                 <form action="">
                                    <div class="form-group">
                                      <label for="pwd">Name</label>
                                      <input type="name" class="form-control" id="pwd" placeholder="Enter Name" name="name">
                                  </div>
                                   <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                                  </div>
                                  
                                    <div class="form-group">
                                      <label for="pwd">Phone</label>
                                      <input type="phone" class="form-control" id="pwd" placeholder="Enter phone no." name="phone">
                                  </div>
                                  <div class="form-group">
                                      <label for="pwd">Message</label>
                                      <input type="message" class="form-control" id="pwd" placeholder="Message For Our Experts" name="msg">
                                  </div>
                                  <button type="submit" class="btn btn-default" style="background-color: 
                                  #E13737; color: white;">Submit</button>
                              </form>
                          </div>
                      </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
    <br/><br/>
<div class="container" >
    <div class="row">
        <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center">Overview</h2>
                </div>
                <p class="text-center">
                  Your potentia<!-- l customers are already communicating with brands through social media, and if you are not speaking directly to your audience through social media platforms like Facebook, Twitter, Instagram and Pinterest, then you are missing a huge aspect of marketing! Great marketing on social media can lead to remarkable success in your business, dedicated brand advocates and even driving leads and sales.
Social media marketing is a form of online marketing which involves creating and sharing content on social media networks to achieve your marketing and branding goals. It involves actions like posting text, image updates, videos, and other content that increases user engagement, as well as paid social media ads. Before you start creating a social media marketing campaign, consider the goals of your business. Keeping a social strategy in mind, starting a social media marketing campaign is like roaming in a forest without a map - you may enjoy, but you might get lost. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `socialmed_overview`';
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
            <div class="container" >
                <div class="row text-center" style="margin: 12px;">
                    <h3 class="text-center" style="font-size: 3rem; color: black!important">Here are a few questions to check when defining your social media marketing goals:</h3>
<br/>
                    <ul style="font-size: 15px; text-align: left;">
                      <li> •    What are you expecting to achieve via social media marketing?</li><br/>
<li>•   Who is the audience you are targeting?</li><br/>
<li>•   How your targeted audience use social media and where they generally hang out?</li><br/>
<li>•   What type of message do you want to send to your targeted audience with social media marketing?</li>
<br/>
                    </ul>
                    
                </div>
            </div>

             <div class="container" >
                <div class="row text-center" style="margin: 12px;">
                    <h3 class="text-center" style="font-size: 3rem; color: black!important">How Social Media Marketing would help you to meet your marketing goals</h3>
<br/>
                   <div class="row">
          <div class="col-lg-4 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Enhancing website traffic.png" width="60px" height="60px" ></div> 
                <br/><br/><br/>  
              <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Enhancing website traffic</a></h4>
              <br/><br/><br/>
            </div>
          </div>
          <div class="col-lg-4 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Creating conversions.png" width="60px" height="60px" ></div>
                 <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Creating conversions</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-4 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Increasing brand awareness.png" width="60px" height="60px"></div>
                 <br/><br/><br/> 
                <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a"> Increasing brand awareness</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
        </div>
                    <br/>
                   <div class="row">
          <div class="col-lg-4 dontknowthename " >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Generating a brand identity and positive brand alliance.png" width="80px" height="80px" ></div> 
                <br/><br/><br/> 
              <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Generating a brand identity and positive brand alliance</a></h4>
              <br/><br/><br/>
            </div>
          </div>
          <div class="col-lg-4 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Improving communication and interaction with key audiences.png" width="60px" height="60px" ></div>
                 <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Improving communication and interaction with key audiences</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
            <div class="col-lg-4 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Generating leads and sales.png" width="60px" height="60px"  ></div>
                <br/><br/><br/>
                <h4 class="description" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Generating leads and sales</a></h4>
                <br/><br/><br/>
              </div>
            </div>  
        </div>
    </div>
</div>
<div class="container" style="margin-top: 3rem; overflow-x: auto;"  >
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
                        <td class="font-weight-bold" width="40%">Platforms</td>
                        <td>3</td>
                        <td>4</td>
                        <td>6</td>
                        <td>Custom</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" width="40%">Monthly Social Media Posts</td>
                        <td>15</td>
                        <td>20</td>
                        <td>30</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" width="40%">Paid Ads on 1 Social Media Platform</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-times"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" width="40%">Paid Ads on 2 Social Media Platform</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Facebook</h3>
            <table class="table table-responsive text-center">
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
                        <td width="37%" class="font-weight-bold">Account Setup</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Business Page Creation</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Group Posting</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Growth in Facebook Fans</td>
                        <td>100</td>
                        <td>200</td>
                        <td>300</td>
                        <td>400</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Group Posting</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Vanity URL</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Twitter</h3>
            <table class=" text-center table table-responsive">
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
                        <td width="37%" class="font-weight-bold">Account Setup</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Profile Design</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Weekly Updation</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Growth in Twitter Followers</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Vanity URL</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Google+</h3>
            <table class=" text-center table table-responsive">
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
                        <td width="37%" class="font-weight-bold">Account Setup</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Regular Updates</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Page Creation</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Growth in Google+ Followers</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Vanity URL</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Instagram</h3>
            <table class=" text-center table table-responsive">
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
                        <td width="37%" class="font-weight-bold">Account Setup</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Daily Posts</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Hashtag Creation</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Vanity URL</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">LinkedIn</h3>
            <table class=" text-center table table-responsive">
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
                        <td width="37%" class="font-weight-bold">Account Setup</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Business Page Creation</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Regular Updates</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Adding Connections</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Hashtag Creation</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Vanity URL</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">YouTube</h3>
            <table class=" text-center table table-responsive">
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
                        <td width="37%" class="font-weight-bold">Channel Creation</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Video Post (should be given by client)</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Vanity URL</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Add Subscribers</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Other Services</h3>
            <table class=" text-center table table-responsive">
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
                        <td width="37%" class="font-weight-bold">Awareness Creation about the Brand</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Response to queries & Complaints</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Monthly Analysis Report</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Video Promotions (Should be given by Client)</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Engagement with the Audience</td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Infographics Creation</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">1 Brnch Related Contest</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Website Conversion</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Appropriate Tagging</td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-times"></span></td>
                        <td><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <button class="btn btn-lg text-center" style="color: white; border-radius: 0px!important; background-color: #E13737; margin-top: 30px!important; margin-bottom: 20px!important;" data-toggle="modal" data-target="#mymodal">ORDER NOW</button>
            </div>
        </div>
    </div>
</div>

  <div class="modal fade" id="mymodal" role="dialog" style="z-index: 9999999; margin-top: 8%;">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title" style="text-align: center;">Order Inesh Services<br/>(Complete This form)</h4>
                              </div>
                              <div class="modal-body">
                               <div class="container" style="width: 80%;">
                                 <form action="">
                                    <div class="form-group">
                                      <label for="pwd">Name</label>
                                      <input type="name" class="form-control" id="pwd" placeholder="Enter Name" name="name">
                                  </div>
                                   <div class="form-group">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                                  </div>
                                  
                                    <div class="form-group">
                                      <label for="pwd">Phone</label>
                                      <input type="phone" class="form-control" id="pwd" placeholder="Enter phone no." name="phone">
                                  </div>
                                 
                                  <button type="submit" class="btn btn-default" style="background-color: #E13737; color: white;">Submit</button>
                              </form>
                          </div>
                      </div>
                              
                          </div>
                      </div>
                  </div>
              </div>

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
