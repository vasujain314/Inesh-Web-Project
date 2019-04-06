<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile</title>
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
include("headertop.php");
?>
<script>
document.getElementById("protab").className = "active treeview";
</script>
<?php
$sq = "SELECT * FROM org_personal WHERE user_id='$user_id'";
$res =mysqli_query($con,$sq);
$row = mysqli_fetch_assoc($res);
$flag=  false ;
if($row['otp_verified'] == 0)
{
	$flag = true ;
	?>
	<form action='login.php' method="post">
	<input type="hidden" name="verotp1" value="verotp1">
	<input type='submit' name='verotp' id="butotp">
	
	</form>
	
	<?php
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" align="center">
	<br />
      <h1>
        User Profile
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content" >

 <div class="row" >
        <div class="col-md-3">
		</div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#personal" data-toggle="tab">Personal Details</a></li>
              <li><a href="#bank" data-toggle="tab">Bank Details</a></li>
              <li><a href="#gst" data-toggle="tab">GST Details</a></li>
            </ul>
			<?php 
include("connect.php");
if(isset($_POST['updatepersonal']) && isset($_POST['name']) && isset($_POST['number']))
{
	$name = $_POST['name'] ;
//	$email = $_POST['email'] ;
	$number = $_POST['number'] ;
	$sql ="UPDATE org_personal SET name='$name' ,phone='$number' WHERE user_id = '$user_id'";
	mysqli_query($con,$sql) or die(mysqli_error($con));
	?>
		<p class="text-green" style="text-align:center">You have Successfully updated Personal Details</p>
	<?php
}
if(isset($_POST['updatebank']) && isset($_POST['actname']) && isset($_POST['bankact']) && isset($_POST['ifsc']))
{
	
	$actname = $_POST['actname'] ;
	$bankact = $_POST['bankact'] ;
	$ifsc = $_POST['ifsc'] ;
	$q = "SELECT * FROM org_bank where user_id = '$user_id'";
	$res = mysqli_query($con,$q);
	if(mysqli_num_rows($res) == 1)
	{
	$sql ="update org_bank set holdername='$actname' , accountno='$bankact',ifsc='$ifsc' WHERE user_id = '$user_id'";
	mysqli_query($con,$sql) or die(mysqli_error($con));
	}
	else if(mysqli_num_rows($res) == 0)
	{
	$sql ="insert into org_bank(holdername,accountno,ifsc,user_id)VALUES('$actname','$bankact','$ifsc','$user_id')";
	mysqli_query($con,$sql) or die(mysqli_error($con));
	}
	?>
		<p class="text-green" style="text-align:center">You have Successfully updated Bank Details</p>
	<?php
}
if(isset($_POST['updategst']) && isset($_POST['busname']) && isset($_POST['states']) && isset($_POST['gstin']))
{
	$busname = $_POST['busname'] ;
	$state = $_POST['states'] ;
	
	$gstin = $_POST['gstin'] ;
	$q = "SELECT * FROM org_gst where user_id = '$user_id'";
	$res = mysqli_query($con,$q);
	if(mysqli_num_rows($res) == 1)
	{
	$sql ="UPDATE org_gst SET busname='$busname' , state_id='$state',gstin='$gstin' WHERE user_id = '$user_id'";
	mysqli_query($con,$sql);
	}
	else if(mysqli_num_rows($res) == 0)
	{
	$sql ="insert into org_gst(busname,state_id,gstin,user_id)VALUES('$busname','$state','$gstin','$user_id')" ;
	mysqli_query($con,$sql);
	}
	?>
		<p class="text-green" style="text-align:center">You have Successfully updated GST Details</p>
	<?php
}
?>
    
            <div class="tab-content">
			
              <div class="active tab-pane" id="personal">
                <form role="form" method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>" >
              <div class="box-body">
			  <?php
			  $name = "";
				$email = "";
				$phone = "";
			$sql = "SELECT * FROM org_personal WHERE user_id = '$user_id'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_array($result);
				$name = $row['name'];
				$email = $row['email'];
				$phone = $row['phone'];
			}
			?>
			  <div class="form-group"  >
                  <label for="name">Name*</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name ?>"  required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address*</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" disabled value="<?php echo $email ?>" required>
                </div>
                <div class="form-group">
				
                  <label >Phone No*</label>
                  <input class="form-control" type="text" data-inputmask='"mask": "999 999 9999"'  data-mask  id="number" name="number" placeholder="Phone No" value="<?php echo $phone ?>" required>
                
                </div>
      
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="updatepersonal" class="btn btn-primary" value="Update">
              </div>
            </form>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
			  <?php
			  $actholder = "";
				$bankact = "";
				$ifsc = "";
			$sql = "SELECT * FROM org_bank WHERE user_id = '$user_id'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_array($result);
				$actholder = $row['holdername'];
				$bankact = $row['accountno'];
				$ifsc = $row['ifsc'];
			}
			?>
              <div class="tab-pane" id="bank">
                <!-- The timeline -->
             <form role="form" method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>" >
              <div class="box-body">
			  <div class="form-group">
                  <label for="actname">Account Holder's Name*</label>
                  <input type="text" class="form-control" id="actname" name="actname" placeholder="Account Holder's name" value="<?php echo $actholder ?>" required>
                </div>
                <div class="form-group">
                  <label for="bankact">Bank account Number*</label>
                  <input type="text" class="form-control" id="bankact" name="bankact" placeholder="Bank account Number" value="<?php echo $bankact ?>" required>
                </div>
                <div class="form-group">
                  <label for="ifsc">IFSC Code*</label>
                  <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC Code" value="<?php echo $ifsc ?>" required>
                </div>
      
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="updatebank" class="btn btn-primary" value="Update">
              </div>
            </form>
              </div>
              <!-- /.tab-pane -->
<?php
			  $busname = "";
				$stateid = 36;
				$gstin = "";
			$sql = "SELECT * FROM org_gst WHERE user_id = '$user_id'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_array($result);
				$busname = $row['busname'];
				$stateid = $row['state_id'];
				$gstin = $row['gstin'];
			}
			?>
              <div class="tab-pane" id="gst">
                <form role="form" method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>" >
              <div class="box-body">
			  <div class="form-group">
                  <label for="busname">Business Name*</label>
                  <input type="text" class="form-control" id="busname" name="busname" value="<?php echo $busname ?>" placeholder="Business name" required>
                </div>
                <div class="form-group">
                <label>State*</label>
                <select class="form-control select2" name="states" id="states" style="width: 100%;">
				<?php
				$sql = "SELECT * FROM state ";
				$result = mysqli_query($con,$sql);
				while($roww=mysqli_fetch_array($result))
				{
					
					?>
					
				
                  <option value="<?php echo $roww['state_id'] ?>"><?php echo $roww['StateName'] ?></option>
                 
				  <?php
				}
				  ?>
                </select>
				<script>
				document.getElementById("states").value = "<?php echo $stateid ?>"
				</script>
              </div>
			  
                <div class="form-group">
                  <label for="gstin">GSTIN*</label>
                  <input type="text" class="form-control" id="gstin" name="gstin" placeholder="GSTIN" value="<?php echo $gstin ?>" required>
                </div>
      
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="updategst"  class="btn btn-primary" value="Update">
              </div>
            </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
     <b style="color:#3c8dbc">For queries/assistance- WhatsApp/ Call on +91 99022-13730</b>
    </div>
    <strong>Copyright &copy;  <a href="http://partyscenes.com"> Master Aggregator (Conglomerates) Private Limited</a>.</strong> All rights
    reserved.
  </footer>

  
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
<!-- Page script -->
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
</body>
</html>
