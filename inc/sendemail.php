<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "your@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<div class="form-group">
<div style="background: #fff;padding-top:200px;color:#fff;">
	<div class="container" style="position: static;max-width: 1200px;margin: 0 auto;background: #131d33;padding: 100px 15px;text-align: center;">
	    <h1 style="text-shadow: 11px 20px 8px rgb(0, 0, 0);">Congratulations! Your Mail has been sent Successfully  from '.$email.'  </h1>
	    <a href="contact.html" style="background: #ffffff;text-decoration: none;color: #000;font-weight: 700;padding: 15px 30px;margin-top: 10px;display: inline-block;">Back To Home</a>
	</div>
</div>
</div>'
;?>