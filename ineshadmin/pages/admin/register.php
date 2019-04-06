<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="">
<style>
body {
   background-image: url("party.jpg?v=1.02");
   background-repeat:no repeat;
   background-size: 100% 100% ;
}
</style>

<?php
@session_start();
if(isset($_SESSION['email']) && isset($_SESSION['user_id']) && !isset($_POST['verotp']) && !isset($_POST['register']))
 {
	?>
	<script>
	document.location ="home.php";
	</script>
<?php	
 }
 else{
?>
<div class="register-box">

  <div class="register-logo">
    <img src="logo.png" alt ="logo" style="width:150px;height:60px">
  </div>

  <div class="register-box-body">
  <?php
  
  include("connect.php");
  if(isset($_POST['verotp']))
  {
	  @session_start();
	  $email = $_SESSION['email'];
	  $name = $_SESSION['name'];
	  $user_id = $_SESSION['user_id'];
	  $otp = mysqli_real_escape_string($con,$_POST['otp']);
	  $sq = "SELECT * FROM org_personal WHERE email = '$email' AND Otp='$otp'";
	  $res = mysqli_query($con,$sq);
	  if(mysqli_num_rows($res) == 1)
	  {
		  $quers = "UPDATE org_personal SET otp_verified ='1' WHERE email='$email'";
$ress = mysqli_query($con,$quers);
		  ?>
		<script>
		document.location = 'selectplan.php'
		</script>
		  
		<?php  
	  }
	  if(mysqli_num_rows($res) == 0)
	  {
		 ?>
<p class="login-box-msg" style="color:red">Invalid OTP</p>
<?php 
include("otpform.php");
	  }
  }
  else if(isset($_POST['register']))
  {
	  $name = mysqli_real_escape_string($con,$_POST['name']);
	  $email = mysqli_real_escape_string($con,$_POST['email']);
	  $phone = mysqli_real_escape_string($con,$_POST['phone']);
	  $ccode = mysqli_real_escape_string($con,$_POST['countrycode']);
	  $password = mysqli_real_escape_string($con,$_POST['password']);
	  $confirm = mysqli_real_escape_string($con,$_POST['confirm']);
	  $sq = "SELECT * FROM org_personal WHERE email = '$email'";
	  $res = mysqli_query($con,$sq);
	  if(mysqli_num_rows($res) >= 1)
	  {
		  ?>
		  <p class="login-box-msg" style="color:red">Email Already Taken</p>
		  
		  <?php
		  include("form.php");
	  }
	  else
	  {
	  if($password == $confirm)
	  {
		  $sql = "INSERT into org_personal(name,email,phone,country_code,password)VALUES('$name','$email','$phone','$ccode','$password')";
		  mysqli_query($con,$sql);
		  $sqss = "SELECT * FROM org_personal where email ='$email'";
		  $ress =  mysqli_query($con,$sqss);
		  $ross = mysqli_fetch_array($ress);
		  $user_id = $ross['user_id'];
		  $sql = "INSERT into org_bank(user_id)VALUES('$user_id')";
		  mysqli_query($con,$sql);
		  $sql = "INSERT into org_gst(user_id)VALUES('$user_id')";
		  mysqli_query($con,$sql);
		  @session_start();
		  $_SESSION['email'] = $email ;
		  $_SESSION['name'] = $name ;
		  $_SESSION['user_id'] = $user_id ;
		  $q1="select * from org_personal where email = '$email'";
		  $r1= mysqli_query($con,$q1);
		  $ro = mysqli_fetch_array($r1);
		 $_SESSION['user_id'] = $ro['user_id']; 
		
		  
		
include("email.php");
?>
<p class="login-box-msg">Verify the OTP</p>

<?php
include("otpform.php");
	  }
	  else
	  {
		  ?>
		  <p class="login-box-msg" style="color:red">Passwords don't match</p>
		  <?php
		  include("form.php");
	  }
	  }
  }
  else{
	  include("form.php");
  }
  
  ?>
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php
 }
?>
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
  </script>
</body>
</html>
