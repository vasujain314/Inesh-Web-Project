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
document.getElementById("viewuseraccount").className = "active treeview";
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
	<div class="container-fluid">
      <!-- Info boxes -->
    <?php
	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$sq ="Delete FROM user where user_id = $id ;";
	mysqli_query($con,$sq);
	?>
	<script>
	alert("Successfully deleted");
	</script>
	<?php
	}
	?>
	
<div class="row" >
 <div class="col-xs-12" >
 <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Verified Applications</h3><br /><br />
			  <input type="button" class="btn btn-default" value="Copy"
   onclick="selectElementContents(document.getElementById('examples') );">
   <input type="button" class="btn btn-default" value="Print"
   onclick="printDiv( );">
   <input type="button" class="btn btn-default" value="CSV"
   onclick="exportTableToCSV('activities.csv')">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="examples" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">S.No</th>
                  <th>NAME</th>
                  <th>USERNAME</th>
                  <th>PHONE</th>
                  <th>EMAIL</th>
				 
				   <th>BUSINESS NAME</th>
                  
                  <th>ADDRESS</th>
                 
                  <th>EDIT</th>
                 
                  <th>DELETE</th>
				 
                 
                </tr>
                </thead>
                <tbody>
               
				<?php
				$p = 0;
				
				$sql = "SELECT * FROM user ";
				
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
				{
				$user_id = $row['user_id'];
				
				
				
				
				
				?>
				
				 <tr>
                  <td style="display:none"><?php echo $p ; ?></td>
                  <td><?php echo $row['name'] ; ?></td>
                  <td><?php echo $row['username'] ; ?></td>
                  <td><?php echo $row['mobileno'] ; ?></td>
                  <td><?php echo $row['email'] ?></td>
				  
                 
					  <td><?php echo $row['buss'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                 
                  
            <td> <i class="fa fa-2x fa-edit" style="color:orange;cursor:pointer" onclick="checkedit(<?php echo $row['user_id']; ?>)"  ></i></td>
            <td> <i class="fa fa-2x fa-trash"  style="color:red;cursor:pointer" onclick="checkdelete(<?php echo $row['user_id']; ?>)"  ></i></td>
                 


                  </tr>
				  <?php
				  $p++;
				
				}
				  ?>
               
                </tbody>
                
              </table>
			  <script>
			   function checkedit(x)
			  {
				  
				 document.location ='createaccount.php?id='+ x +'&type=customer'
 }
 function checkdelete(x)
			  {
				  var r =  confirm("Are You sure You want to Delete this customer")
				  if(r)
				  {

	   document.location ='viewuseraccount.php?id='+ x
 
				  }
 }
			 
			  
			  </script>
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

  <script type="text/javascript">
function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
     function selectElementContents(el) {
        var body = document.body, range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            try {
                range.selectNodeContents(el);
                sel.addRange(range);
            } catch (e) {
                range.selectNode(el);
                sel.addRange(range);
            }
            document.execCommand("copy");

        } else if (body.createTextRange) {
            range = body.createTextRange();
            range.moveToElementText(el);
            range.select();
            range.execCommand("Copy");
        }
    }
	 function printDiv() {
        var divToPrint = document.getElementById('examples');
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
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
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
  $(function () {
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
