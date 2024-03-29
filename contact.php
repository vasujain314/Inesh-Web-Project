<?php
$result="";



if(isset($_POST['submit']))
{
  require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone =$_POST['phone'];
$message = $_POST['message'];
$email_from = '$visitor_email';
$email_subject = "Some one contacted.";
$email_body = "You have received a new message from the user: $name \n contact no: $visitor_phone \n mail: $visitor_email .\n"."Here is the message:\n $message".


// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('info@inesh.org', 'Mailer');
$mail->addAddress('info@inesh.org');     // Add a recipient

$mail->addReplyTo($visitor_email);



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $email_subject;
$mail->Body    = $email_body;

if(!$mail->send()) {
    $result="some error has occured please reach us through mail";
} else {
    $result="Thanks ".$name." we will respond you back.";
}

}
?>


<?php
include("connect.php");
$result="";
if(isset($_POST['contact']))
{
$sname=$conn->real_escape_string($_POST['name']);

$phone=$conn->real_escape_string($_POST['phone']);
$message=$conn->real_escape_string($_POST['message']);

$sql="INSERT INTO contactus (name,phone,message)
VALUES ('$sname','$phone','$message')";

if(!$result = $conn->query($sql))
{
die('There was an error running the query [' . $conn->error . ']');
}
else{
  $result="we will contact you soon.";
  header("location:contact.php");
}

}

?>







<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inesh | Contact Us</title>

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
    <section class="page-title" style="background: url(images/background/2.jpg);">
        <div class="container text-center">
            <br/><br/><br/>     
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Section -->
    <section class="contact-section style-two">
        <div class="container">
            <div class="section-title text-left">
                <h2>Get in Touch</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">                    
                    <div class="left-side">
                    	<?= $result ?>
                        <form id="contact_form" name="contact_form" action="" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control textarea required" placeholder="Your Text"></textarea>
                            </div>
                            <div class="form-group form-bottom">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="btn-style-one" name="contact" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="right-side">
                        <div class="text">
                            <p>We are ready to guide you into the future of digital marketing. Reach out to us for more information, answer of any question and expect an exceptional customer service which we would want to experience ourselves!</p>
                        </div>
                        <ul>
                             <li><i style="color:#E13737" class="fa fa-map-marker" aria-hidden="true"></i>26 Country ridge court, Brampton, ON L6P 3S2, Canada</li>
                            <li><i style="color:#E13737" class="fa fa-phone" aria-hidden="true"></i><img src="img/canada.png" style="width: 14px; height: 10px;"> +1 (647) 297-3837<br/>
                                <img src="img/usa.png" style="width: 14px; height: 10px;"> +1 (510) 400-4818<br/>
                                <img src="img/india.png" style="width: 14px; height: 10px;"> +91 9999 122 634</li>
                            <li><i style="color:#E13737" class="fa fa-envelope" aria-hidden="true"></i>info@inesh.org</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->


    <!-- 
    <section class="map-section">
        <div class="container-fulid">
            <div class="google-map-area">
                <div 
                    class="google-map" 
                    id="contact-google-map"
                    data-map-lat="45.355985" 
                    data-map-lng="-72.934990" 
                    data-icon-path="images/icons/map-marker.png" 
                    data-map-title=" Brampton, ON L6P 3S2, Canada" 
                    data-map-zoom="10" 
                    data-markers='{
                        "marker-1": [43.793698, -79.670942, "<h4>Head Office</h4><p>26 Country Ridge Ct, Brampton</p>"]
                    }'>
                </div>
            </div>
        </div>
    </section>
     -->

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
