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
 if(isset($_SESSION['email']) && isset($_SESSION['user_id']) && $_SESSION['type'] == 1)
 {
 include("headertop.php")
 
 ?>
<script>
document.getElementById("createproduct").className = "active treeview";
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
              <li class="active" id ="cus"><a href="#customer" data-toggle="tab">Create Product</a></li>
              
            </ul>
      <!-- Info boxes -->
	  <?php
    include("connect.php");

if(isset($_POST['updatecustomer']) && isset($_POST['name']) && isset($_POST['type']))
{
	$name = mysqli_real_escape_string($con,$_POST['name']) ;
	
	$des= mysqli_real_escape_string($con,$_POST['description']) ;
	$type = mysqli_real_escape_string($con,$_POST['type']) ;
	
		$s = "INSERT INTO product(name,description,type) VALUES('$name','$des','$type')";
		mysqli_query($con,$s);
		echo '<p class="text-green" style="text-align:center;color:red">Product Added</p>';
	?>
		
	<?php
}
?>
<div class="tab-content">
<?php
$name = "";
$desc = "";
$typ = "loan";
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM product where id = '$id' ";
$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$name = $row['name'];
$desc = $row['description'];
	$type = $row['type'];
	if($type == "0")
	{
		$typ = "loan" ;
	}
	if($type == "1")
	{
		$typ = "inv" ;
	}
	
}
?>
			
             
			     <div class="active tab-pane" id="customer">
                <form role="form" method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>" >
              <div class="box-body">
			 
			  <div class="form-group"  >
                  <label for="name">Name of Loan Or Investment*</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name ; ?>"   required>
                </div>
				<div class="form-group">
				
                  <label >Type*</label>&nbsp;&nbsp;
				  
                  Loan&nbsp;&nbsp;<input type="radio" value="0" name="type" id="loa" checked>&nbsp;&nbsp;
				  Investment&nbsp;&nbsp;<input type="radio" value="1" name="type" id="inve" >
				   Fixed Income Tbills&nbsp;&nbsp;<input type="radio" value="2" name="type" id="loa" checked>&nbsp;&nbsp;
				  Fixed Income-Bond&nbsp;&nbsp;<input type="radio" value="3" name="type" id="inve" >
				  Equity&nbsp;&nbsp;<input type="radio" value="4" name="type" id="inve" >
                
                </div>
				
				<?php
				if($typ == "loan")
				{
					?>
					<script>
					document.getElementById("loa").checked = true ;
					document.getElementById("inve").checked = false ;
					</script>
					<?php
				}
				if($typ == "inv")
				{
					?>
					<script>
					document.getElementById("loa").checked = false ;
					document.getElementById("inve").checked = true ;
					</script>
					<?php
				}
				
			?>
				<div class="form-group">
				
                  <label >Description*</label>
                  <textarea class="form-control"  id="description" name="description" placeholder="Description" rows="7" ><?php echo $desc ; ?></textarea>
                
                </div>
      
			
      
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="updatecustomer" class="btn btn-primary" value="Create">
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
<?php
if(isset($_GET['type']))
{
	if($_GET['type'] == "customer")
	{
		?>
		<script>
		document.getElementById("man").style.display = "none"
		document.getElementById("manager").style.display = "none"
		document.getElementById("customer").className = "active tab-pane"
		</script>
		<?php
	}
	if($_GET['type'] == "manager")
	{
		?>
		<script>
		document.getElementById("cust").style.display = "none"
		document.getElementById("customer").style.display = "none"
		document.getElementById("manager").className = "active tab-pane"
		</script>
		<?php
	}
}
?>
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
