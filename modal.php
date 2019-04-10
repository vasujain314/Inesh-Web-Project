<!DOCTYPE html>
<html>
<head>
 <?php


$result="";

if(isset($_POST['quote']) || isset($_POST['order']))
{
require 'PHPMailerAutoload.php';
require 'credential.php';
$mail = new PHPMailer;
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone =$_POST['phone'];
$message = $_POST['msg'];
$email_from = '$visitor_email';
$email_subject = "New Request/quote.";
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
if(isset($_POST['quote']))
{
$sname=$con->real_escape_string($_POST['name']);
$email=$con->real_escape_string($_POST['email']);
$phone=$con->real_escape_string($_POST['phone']);
$message=$con->real_escape_string($_POST['msg']);

$sql="INSERT INTO requestquote (name,email,phone,message)
VALUES ('$sname','$email','$phone','$message')";

if(!$result = $con->query($sql))
{
die('There was an error running the query [' . $con->error . ']');
}

}

?>
<?php
include("connect.php");
$result="";
if(isset($_POST['order']))
{
$sname=$con->real_escape_string($_POST['name']);
$email=$con->real_escape_string($_POST['email']);
$phone=$con->real_escape_string($_POST['phone']);


$sql="INSERT INTO orders (name,email,phone)
VALUES ('$sname','$email','$phone')";

if(!$result = $con->query($sql))
{
die('There was an error running the query [' . $con->error . ']');
}

}

?>
</head>
<body>








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
              <button type="submit" name="quote" class="btn btn-default" style="background-color: #E13737; color: white;">Submit</button>
          </form>
      </div>
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
                                 
                                  <button type="submit" name="order" class="btn btn-default" style="background-color: #E13737; color: white;">Submit</button>
                              </form>
                          </div>
                      </div>
                              
                          </div>
                      </div>
                  </div>
              </div>

            </body></html>