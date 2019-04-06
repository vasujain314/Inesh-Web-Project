
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Change password</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<style>
body {
   background-image: url("party.jpg");
   background-repeat:no repeat;
   background-size: 100% 100% ;
}
</style>


<body>

<div class="register-box">

  <div class="register-logo">
    <img src="logo.png" alt ="logo" style="width:150px;height:60px">
  </div>
   <div class="register-box-body">
 
<?php
include("connect.php");
$flag1 = false;
$flag2 = false;
?>
	
	<?php
if(isset($_GET['pass_code'],$_GET['email']) == true)
{
	
	?>
	
	<?php
	$email = trim($_GET['email']);
	$pass_code = trim($_GET['pass_code']);
$sql1 = "SELECT * FROM org_personal WHERE email = '$email'";
$result1 = mysqli_query($con,$sql1);
if (mysqli_num_rows($result1) == 0)
{
	echo "This link does not exist";
}
else if(mysqli_num_rows($result1) == 1)
{
	$row = mysqli_fetch_array($result1);
	$user_id = $row['user_id'];
	$sql2 =  "SELECT * FROM password_change WHERE user_id = '$user_id'";
	$result2 = mysqli_query($con,$sql2);
	if (mysqli_num_rows($result2) == 0)
	{
		echo "Either Generated Password send to your mail has been activated or no password reset request has been made";
	}
	else if(mysqli_num_rows($result2) == 1)
	{
		

		$row2 = mysqli_fetch_array($result2);
		$pass_code1 = $row2['pass_code'];
		$curr_pass = $row2['temp_password'];
	if($pass_code1 == $pass_code)
	{
       $sql3 = "UPDATE org_personal SET password ='$curr_pass' WHERE user_id ='$user_id'";
		if(mysqli_query($con,$sql3));
		{
		$sql4 = "DELETE FROM password_change WHERE user_id='$user_id'";
		mysqli_query($con,$sql4);
		}
		//include("usertop.php");
		include("resetpass.php");
	}
	}
}
}
if(isset($_POST['sendpass']) && isset($_POST['passwords']) && isset($_POST['confirms']) && isset($_POST['submitpass']) && isset($_POST['username']))
{
	function sanitize($string)
{
include("connect.php");
$string = strip_tags($string);
$string = htmlspecialchars($string);
$string = trim(rtrim(ltrim($string)));
$string = mysqli_real_escape_string($con,$string);
return $string;
}
$flag1 = false;
$flag2 = false ;
$confirm1 = $_POST['confirms'];
$confirm = sanitize($confirm1);
$password1 = $_POST['passwords'];
$password = sanitize($password1);
$genpass = sanitize($_POST['sendpass']);
$email = sanitize($_POST['username']);
$sql5 = "SELECT * FROM org_personal WHERE email = '$email'";
$result5 = mysqli_query($con,$sql5);
if(mysqli_num_rows($result5) == 0)
{
	


	include("resetpass.php");
	?>
    <script type="text/javascript" >
	document.getElementById("msg").innerHTML = "Invalid Email";
	</script>
    <?php



}
if(mysqli_num_rows($result5) == 1)
{
$row5 = mysqli_fetch_array($result5);
$pass = $row5['password'];
$user_id = $row5['user_id'];
if($pass == $genpass)
{
	$flag1 = true ;
}
else if($pass != $genpass)
{
	$flag1 = false ;
}
if($confirm == $password)
{
	$flag2 = true ;
}

if($flag1 && $flag2)
{
	$sql6 = "UPDATE org_personal SET password ='$password' WHERE user_id ='$user_id'";
	if(mysqli_query($con,$sql6))
	{
		//include("usertop.php");
	?>
    
<p style="color:red"> Your Password has been Updated successfully.To login into your account <a href="login.php" style="color:blue">Click here</a></p>

    <?php
	}
}

else
{
	//include("usertop.php");
	include("resetpass.php");
	
	
	if($flag1 == false)
	{
	//include("usertop.php");
	?>
 <script type="text/javascript" >
	document.getElementById("msg").innerHTML = "Generated Password doesn't match";
	</script>
    <?php
}
else if($flag2 == false)
{
	//include("usertop.php");
	?>
 <script type="text/javascript" >
	document.getElementById("msg").innerHTML = "Password and Confirm password doesn't match";
	</script>
    <?php
}
}
}
}
?>

</div>
</div>
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

