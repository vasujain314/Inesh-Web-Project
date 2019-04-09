<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | PPC/Google Adwords</title>

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
<style type="text/css">
    b{
        color: black;
    }
</style>
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
                        <h2 class="text-center" style="font-size:3.2rem">PPC/Google AdWords</h2>
                    </div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="my-3 text-justify">
                       <!-- Google Advertising, formerly known as Google AdWords - is the most popular PPC platform ever, which works on pay-per-click models, in which users bid on keywords and pays for each click on their ads. Whenever a search is started, Google digs into the bidders' advertising pool and chooses a set of winners to display in ad space on their search results page. Selection of winners is based on the combination of factors including the quality and relevance of their keywords and ad text as well as the size of their keyword bids. For example, if Inesh bids on the keyword "PPC software", then our ad may appear at the very top position on the Google results page. -->
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `ppc_main`';
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
                <div class="col-sm-6">
                 <img class="img-fluid"  src="img/googlead.png">   
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
                                  <button type="submit" class="btn btn-default" style="background-color: #E13737; color: white;">Submit</button>
                              </form>
                          </div>
                      </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
        <br/><br/><br/>
    <div class="container" >
    <div class="row">
        <div class="section-title" style="margin-bottom: 4rem;">
                    <h2 class="text-center">Overview</h2>
                </div>
                <p class="text-center">
                  <?php 
                      include("connect.php");
                      $sql = 'SELECT * from `ppc_overview`';
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              echo htmlspecialchars_decode($row['content']);
                          }
                      }
                      $conn->close();
                  ?>
                  <!-- More specifically, what is seen on the page and where the advertiser's ad rank is based, the metric calculated by multiplying two key factors - the CPC bid (an advertiser who is willing to spend the maximum amount) and the quality score ( Which takes a value) between your click-through rate, relevance and landing page quality, among other factors). In return, your Quality Score affects your actual cost per click or CPC. This system allows advertisers to reach potential customers who fit their budget. -->
Managing your pay-per-click campaigns is also a very important factor. Once you create your new campaign, you need to regularly manage them to make sure that they remain effective. In fact, the Regular Account Activity on your account is one of the best predictions of success. You should continually analyze the performance of your Google ads and your AdWords account - even make a big difference in just 20 minutes a week - and you can make the following adjustments to optimize your campaigns:
</p>
    </div>
</div>
</div>
<br/>  <br/>  
            <div class="container" >
                <div class="row" >
                
          <div class="col-sm-4 col-xs-12 dontknowthename" >
            <div class="cb-container"  >
                <div class="icon"><image src="img/hover/Add PPC Keywords.png" width="60px" height="60px" style="margin-top:-35px"></div> 
                <br/><br/>  
              <h4 class="title" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Add PPC Keywords</a></h4>
              <br/>
              <p class="description">Expand the reach of your pay-per-click campaigns by adding relevant keywords to your business.</p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 dontknowthename">
              <div class="cb-container">
                <div class="icon"><image src="img/hover/Add negative keywords.png" width="60px" height="60px"  style="margin-top:-35px"></div>
                    <br/> <br/> 
                <h4 class="title" Align="center" style="color:#0c2e8a"><a href="" style="color:#0c2e8a">Add negative keywords</a></h4>
                <br/>
                <p class="description">Add non-changed terms as negative keywords to improve the relevancy of the campaign and reduce wasteful expenditures..</p>
              </div>
            </div>  
            <div class="col-sm-4 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/Split ad groups.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a href=""style="color:#0c2e8a">Split ad groups</a></h4>
                  <br/>
                  <p class="description">Divide your ad groups into smaller, more relevant ad groups, improve click-through rate (CTR) and Quality Score, which help you create more targeted ad text and landing pages.</p>
                </div>
              </div>
              
              </div>

        </div>
        
        <div class="row">
            <br/><br/>
            <div class="col-sm-3"></div>
            <div class="col-sm-3 col-xs-12 dontknowthename" >
                <div class="cb-container" >
                  <div class="icon"><image src="img/hover/Review expensive PPC keywords.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a href=""style="color:#0c2e8a">Review expensive PPC keywords</a></h4>
                  <br/>
                  <p class="description">Review expensive, low-performing keywords and turn them off if necessary.</p>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12 dontknowthename" >
                <div class="cb-container">
                  <div class="icon"><image src="img/hover/Refine the landing page.png" width="60px" height="60px"  style="margin-top:-35px"></div><br/> <br/> 
                  <h4 class="title" Align="center" ><a href=""style="color:#0c2e8a">Refine the landing page</a></h4>
                  <br/>
                  <p class="description">Modify the content of your landing pages and call-to-action (CTAs) to align with individual search queries to boost conversion rates. Do not send all your traffic on the same page.</p>
                </div>
              </div>  
              
                </div>
                <br/><br/><br/>
                <p class="text-center">By continually optimizing your pay-per-click campaigns, you will be able to increase your customer base and increase ROI.</p>

<br/><br/><br/>
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
<div class="container" style="overflow-x: auto;">
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
                        <th class="text-center" width="14%">Services</th>
                        <th class="text-center" width="14%">Basic</th>
                        <th class="text-center" width="14%">Standard</th>
                        <th class="text-center" width="14%">Premium</th>
                        <th class="text-center" width="14%">Business</th>
                        <th class="text-center" width="14%">Platinum</th>
                        <th class="text-center" width="14%">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="14%" class="font-weight-bold">Starting Range</td>
                        <td width="14%">$2,000</td>
                        <td width="14%">$2,000- $5,000</td>
                        <td width="14%">$5,000- $8,000</td>
                        <td width="14%">$8,000- $12,000</td>
                        <td width="14%">$12,000- $15,000</td>
                        <td width="14%">$15,000+</td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold" width="40%">Set-up Fee</td>
                        <td width="14%">$300</td>
                        <td width="14%">$250</td>
                        <td width="14%">$200</td>
                        <td width="14%">$150</td>
                        <td width="14%">$100</td>
                        <td width="14%">$100</td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold" width="40%">Monthly Fee</td>
                        <td width="14%">15% of Budget</td>
                        <td width="14%">14% of Budget</td>
                        <td width="14%">13% of Budget</td>
                        <td width="14%">12% of Budget</td>
                        <td width="14%">11% of Budget</td>
                        <td width="14%">10% of Budget</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Acocunt Setup</h3>
            <table class="table table-responsive text-center">
                <tbody>
                    <tr>
                        <td width="14%" class="font-weight-bold">Google</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Bing</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>                        
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Facebook</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Targeted Ads</h3>
            <table class=" text-center table table-responsive">
              <thead style="background-color:#E13737; color:white; font-size:1.5rem; padding: 10px;" >
                    <tr>
                        <th class="text-center" width="14%">Services</th>
                        <th class="text-center" width="14%">Basic</th>
                        <th class="text-center" width="14%">Standard</th>
                        <th class="text-center" width="14%">Premium</th>
                        <th class="text-center" width="14%">Business</th>
                        <th class="text-center" width="14%">Platinum</th>
                        <th class="text-center" width="14%">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="14%" class="font-weight-bold">Text Ads</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Image Ads</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Remarketing Ads</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Interest Based Ads</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Topic Targeting</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3 style="color: black; margin-top: 20px; margin-bottom: 20px;">Scope of Work</h3>
            <table class=" text-center table table-responsive">
              <thead style="background-color:#E13737; color:white; font-size:1.5rem; padding: 10px;" >
                    <tr>
                        <th class="text-center" width="14%">Services</th>
                        <th class="text-center" width="14%">Basic</th>
                        <th class="text-center" width="14%">Standard</th>
                        <th class="text-center" width="14%">Premium</th>
                        <th class="text-center" width="14%">Business</th>
                        <th class="text-center" width="14%">Platinum</th>
                        <th class="text-center" width="14%">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="14%" class="font-weight-bold">Initial Report</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Landing Page Recommendation</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Keywords</td>
                        <td width="14%">Limited</td>
                        <td width="14%">Limited</td>
                        <td width="14%">Limited</td>
                        <td width="14%">Unlimited</td>
                        <td width="14%">Unlimited</td>
                        <td width="14%">Unlimited</td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Monthly Report</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Conversion Tracking</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Google Analytic Integration</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Daily Campaign Managment</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">ROI Management</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Remarketing Campaign</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Custom Montly Report</td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-times"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Email Support</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Chat Support</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                    <tr>
                        <td width="14%" class="font-weight-bold">Phone Support</td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                        <td width="14%"><span class="fa fa-check"></span></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <button class="btn btn-lg text-center" style="color: white; border-radius: 0px!important; background-color:#E13737; margin-top: 30px!important; margin-bottom: 20px!important;" data-toggle="modal" data-target="#mymodal">ORDER NOW</button>
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
