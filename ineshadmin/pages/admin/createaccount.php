<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin|Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
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
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


 <?php
 @session_start();
 include("connect.php");
 if(isset($_SESSION['email']) && isset($_SESSION['user_id']))
 {
 include("headertop.php")
 
 ?>
<script>
document.getElementById("createaccount").className = "active treeview";
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
	<div class="container-fluid">
	
	 <div class="col-md-12" align="center">
	 <h3>Create Account</h3>
	 </div>
	 <div class="col-md-3">
	 </div>
	 <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active" id ="man"><a href="#manager" data-toggle="tab">Create Account</a></li>
              
             
            </ul>
      <!-- Info boxes -->
	  <?php
    include("connect.php");
if(isset($_POST['updatemanager']) && isset($_POST['name']) && isset($_POST['number']))
{
	$name = mysqli_real_escape_string($con,$_POST['name']) ;
	$ustype = mysqli_real_escape_string($con,$_POST['ustype']) ;
	$client_num = mysqli_real_escape_string($con,$_POST['client_num']) ;
	$username = mysqli_real_escape_string($con,$_POST['username']) ;
//	$email = $_POST['email'] ;
	$number = mysqli_real_escape_string($con,$_POST['number']) ;
	$email = mysqli_real_escape_string($con,$_POST['email']) ;
	$password = mysqli_real_escape_string($con,$_POST['password']) ;
	$sq ="SELECT * FROM `login_user` WHERE `username` = '$username'";
	$res = mysqli_query($con,$sq);
	if(mysqli_num_rows($res) == 0)
	{
		$sqs ="SELECT * FROM `login_user` WHERE `email` = '$email'";
	$ress = mysqli_query($con,$sqs);
	if(mysqli_num_rows($ress) == 0)
	{
		$s = "INSERT INTO login_user(username,password,email,phone,type,name,client_num) VALUES('$username','$password','$email','$number','$ustype','$name','$client_num')";
		mysqli_query($con,$s);
		echo '<p class="text-green" style="text-align:center;color:red">Client Account Created</p>';
	}
	if(mysqli_num_rows($ress) == 1)
	{
		echo '<p  style="text-align:center;color:red">Email Already exists</p>';
	}
	}
	if(mysqli_num_rows($res) == 1)
	{
		echo '<p  style="text-align:center;color:red">Username Already exists</p>';
	}

	?>
		
	<?php
}

?>
<div class="tab-content">
<?php
$name = "";
$name1 = "";
$phone = "";
$phone1 = "";
$username = "";
$username1 = "";
$password = "";
$password1 = "";
$email = "";
$email1 = "";
$buss1 = "";
$address1 = "";
$clientno = "";
$ustype= "" ;
if(isset($_GET['id']) && isset($_GET['type']))
{
	
	$id = $_GET['id'];
	if($_GET['type'] == "client")
	{
		$sql = "SELECT * FROM login_user where id='$id' AND type != '1'";
		$res = mysqli_query($con,$sql);
		if(mysqli_num_rows($res) == 1)
		{
			$row = mysqli_fetch_array($res);
			$name = $row['name'];
			$username = $row['username'];
			$phone = $row['phone'];
			$email = $row['email'];
			$password = $row['password'];
			$clientno = $row['client_num'];
			$ustype = $row['type'];
		}
	}
	
}
?>
			
              <div class="active tab-pane" id="manager">
                <form role="form" method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>" >
              <div class="box-body">
			 
			  <div class="form-group"  >
                  <label for="name">Name*</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name ; ?>"   required>
                </div>
				<div class="form-group"  >
                  <label for="name">Manager Id*</label>
                  <input type="text" class="form-control" id="client_num" name="client_num" placeholder="Manager Id" value="<?php echo $clientno ; ?>"   required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address*</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php echo $email ; ?>"   required>
                </div>
                <div class="form-group">
				
                  <label >Phone No*</label>
                  <input class="form-control" type="text"   id="number" value="<?php echo $phone ; ?>" name="number" placeholder="Phone No"  required>
                
                </div>
				<div class="form-group">
				
                  <label >UserName*</label>
                  <input class="form-control" type="text"   id="username" name="username" value="<?php echo $username ; ?>" placeholder="Username"  required>
                
                </div>
				<div class="form-group">
				
                  <label >Password*</label>
                  <input class="form-control" type="text"    id="password" name="password" value="<?php echo $password ; ?>" placeholder="Password"  required>
                
                </div>
				<div class="form-group">
				
                  <label >Choose Type*</label>
                  Manager <input  type="radio"    id="man" name="ustype" value="2" checked>&nbsp;&nbsp;
                  Auditor <input  type="radio"    id="aud" name="ustype" value="3">
                </div>
      <?php
	  if(isset($_GET['id']) && isset($_GET['type']))
{
	if($ustype == 3)
	{
	?>
	<script>
	document.getElementById("aud").checked = true ;
	</script>
	<?php
	}
}
	  ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="updatemanager" class="btn btn-primary" value="Create">
              </div>
            </form>
                <!-- /.post -->
              </div>
			    
              </div>
              </div>
              </div>
              </div>
			  
      <!-- /.row -->
      <!-- /.row -->
	 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">


</script>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<?php
 }
 else
 {
	 ?>
	 <script>
	 document.location = "logout.php"
	 </script>
	 <?php
 }
?>
</div>
<!-- ./wrapper -->

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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
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
	  $("[data-mask]").inputmask();
    $("#examples").DataTable();
 
  });
</script>
<?php
if($flag == true)
{
?>
<script>

	 $(document).ready(function () {
	$('#butotp').trigger('click');
	 });
	</script>
	<?php
}
	?>
<!-- Page script -->
</body>
</html>
