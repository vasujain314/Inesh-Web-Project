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
$msgnum = 0 ;
 if(isset($_SESSION['email']) && isset($_SESSION['user_id']) && $_SESSION['type'] == 1 || $_SESSION['type'] == 3)
 {
	  
	if(isset($_POST['users']) && isset($_POST['body']) && isset($_POST['subject']) && isset($_POST['senderemail']))
	{
		$users_id = $_POST['users'];
		$body = $_POST['body'];
		$senderemail = $_POST['senderemail'];
		$subjects = $_POST['subject'];
		//$recipients = array();
		//$names = array();
		
		$query = "INSERT INTO email_bucket(content,subject) VALUES('$body','$subjects')";
$s = mysqli_query($con, $query );
$ids = mysqli_insert_id($con);
foreach($users_id as $user_id)
{
	$query = "INSERT INTO send_email(email_id,user_id,assigned_email) VALUES('$ids','$user_id','$senderemail')";
$s = mysqli_query($con, $query );
}
if(isset($_FILES['file']['name']))
{
	$total =  count($_FILES["file"]['name']);
		//echo $total ;
		for($i=0;$i<$total;$i++)
		{
		
	$doc=  $_FILES["file"]["name"][$i];
	$microdoc = microtime().$doc;
	move_uploaded_file($_FILES["file"]["tmp_name"][$i],"../upload/".$microdoc);
	$query = "INSERT INTO email_attachment(send_id,name) VALUES('$ids','$microdoc')";
$s = mysqli_query($con, $query );
		}
}
$msgnum = 1 ;
		?>
				
				<?php
	}
	 
 include("headertop.php")
 
 ?>
<script>
document.getElementById("bulkmail").className = "active treeview";
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
	<div class="container-fluid">
      <!-- Info boxes -->
  <?php
	if($msgnum == 1)
	{
		?>
	 <p class="alert alert-success alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               
               <i class="icon fa fa-check"></i> Mailing List Added Succesfully
              </p>
	<?php
	}
?>	
<div class="row" >
 <div class="col-xs-12" >
 <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Send Email</h3><br /><br />
			 
            </div>
            <!-- /.box-header -->
           <div class="box-body col-xs-12" style="overflow:auto">
		    <form method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
		   <div class="col-xs-7">
		<div class="form-group">
		 <select class="form-control select2" name="senderemail"   required>
		 <?php
		  $sql = "SELECT * FROM admin_email";
	 $result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
				{
		 ?>
	 <option value="<?php echo $row['id'] ?>"><?php echo $row['email'] ?></option>
	 <?php
		 }
	 ?>
	 </select>
	 </div>
	 
		   <div class="form-group">
		   <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject" required>
		   </div>
		   <div class="form-group">
		   <textarea class="form-control" id="editor1" name="body" placeholder ="Message Body" rows="5" required></textarea>
		   </div>
		    <div class="form-group">
		 <input type="file" name="file[]"  id="file" multiple>
		 </div>
		   </div>
		    <div class="col-xs-5" style="height:200px;overflow-y:scroll">
		  
              <table id="examples" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">S.No</th>
                 
				  
                
                  <th>Name</th>
                  <th>Select <INPUT type="checkbox" onchange="checkAll(this)" name="chk[]" /></th>
				   
                 
                </tr>
                </thead>
                <tbody>
               
				<?php
				$p = 0;
				
				$sql = "SELECT * FROM email_store";
				
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
				{
				?>
				
				 <tr>
                  <td style="display:none"><?php echo $p ; ?></td>
				 
                  <td ><?php echo $row['email'] ; ?></td>
                 
                 
				  
                    
                 
              
         <?php
				  if($_SESSION['type'] == 1)
				  {
				  ?>
              
                 
<td><input type="checkbox" class="checkbox"  name="users[]" value="<?php echo $row['id'] ?>"> </td>
<?php
				  }
?>
                  </tr>
				  <?php
				  $p++;
				
				}
				  ?>
               
                </tbody>
                
              </table>
			  
			 
			 
            </div>
			<div class="col-xs-12" align="center" style="margin-top:50px">
			  <input type="submit" name="delcheck" onclick = "return check()"  value="Send" class="btn btn-primary">
			  </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      </div>
      <!-- /.row -->
      <!-- /.row -->
	  <div class="container-fluid">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
	  function check()
	  {
		  
	
	 if($('input[name="users[]"]').is(':checked'))
{
	
   return true;
}else{

	alert("Please Select Atleast one checkbox")
	return false ;
  // unchecked
}
	  }
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
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () {
    $("#examples").DataTable();
     $(".select2").select2();
  CKEDITOR.replace('editor1');
  });
    table =  $("#examples").DataTable();
 function checkAll(ele) {  //on click 
   var checked = ele.checked;
  
    //table.column(0).nodes().to$().each(function(index) {    
        if (checked) {
            table.$('.checkbox').prop('checked', true); 
           // $(this).find('.checkbox').prop('checked', true);
        } else {
            
            table.$('.checkbox').prop('checked', false);            
        }
   // }); 
 // table.draw
 }
</script>

	
<!-- Page script -->
</body>
</html>
