
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

 if(isset($_SESSION['email']) && isset($_SESSION['user_id']) && $_SESSION['type'] != 2)
 {
	  
	if(isset($_POST['archive']) && isset($_POST['delcheck']))
	{
		$del1 = $_POST['archive'];
		foreach($del1 as $del)
		{
			$flag =  true ;
			$sq = "SELECT * FROM loan_details WHERE status = '1' AND user_id='$del'";
			$re = mysqli_query($con,$sq);
			if(mysqli_num_rows($re) >= 1)
			{
				$flag = false ;
			}
			$sq = "SELECT * FROM invest_details WHERE status = '1' AND user_id='$del'";
			$re = mysqli_query($con,$sq);
			if(mysqli_num_rows($re) >= 1)
			{
				$flag = false ;
			}
			if($flag == true)
			{
				$sql = "DELETE FROM login_user WHERE id = '$del'";
				mysqli_query($con,$sql);
			}
				
			
		}
		?>
				<script>
				alert("User Has been Deleted")
				</script>
				<?php
	}
	 
 include("headertop.php")
 
 ?>
<script>
document.getElementById("userlist").className = "active treeview";
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
	<div class="container-fluid">
      <!-- Info boxes -->
   
<div class="row" >
 <div class="col-xs-12" >
 <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Managers List</h3><br /><br />
			  <input type="button" class="btn btn-default" value="Copy"
   onclick="selectElementContents(document.getElementById('examples') );">
   <input type="button" class="btn btn-default" value="Print"
   onclick="printDiv( );">
   <input type="button" class="btn btn-default" value="CSV"
   onclick="exportTableToCSV('activities.csv')">
            </div>
            <!-- /.box-header -->
           <div class="box-body col-xs-12" style="overflow:auto">
		   <form method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>">
              <table id="examples" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="display:none">S.No</th>
                 
				  
                 <th>Manager ID</th>
                  <th>NAME</th>
				   
                  <th>EMAIL</th>
                 <th>USERNAME</th>
                  <th>PHONE</th>
				  <?php 
				  if($_SESSION['type'] == 1 || $_SESSION['type'] == 3)
		{
				  ?>
                  <th>EDIT</th>
                 
                 
               
                   <th>DELETE ALL<INPUT type="checkbox" onchange="checkAll(this)" name="chk[]" /></th>
                  
                 <?php
		}
				 ?>
                 
                </tr>
                </thead>
                <tbody>
               
				<?php
				$p = 0;
				
				$sql = "SELECT * FROM login_user WHERE id != '1' AND  type = '2'";
				
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
				{
				?>
				
				 <tr>
                  <td style="display:none"><?php echo $p ; ?></td>
				   <td ><?php echo $row['client_num'] ; ?></td>
                  <td ><?php echo $row['name'] ; ?></td>
                 
                 
				  
                    
                 
              
                  <td ><?php echo $row['email'] ; ?></td> 
                <td ><?php echo $row['username'] ; ?></td>
                <td ><?php echo $row['phone'] ; ?></td>  
				<?php 
				  if($_SESSION['type'] == 1 || $_SESSION['type'] == 3)
		{
				  ?>
                <td ><a href="createaccount.php?id=<?php echo $row['id'] ?>&type=client"><i class ="fa fa-edit"></i></a></td>  
<td><input type="checkbox"  name="archive[]" value="<?php echo $row['id'] ?>"> </td>
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
			  <div class="col-xs-12" align="center">
			  <input type="submit" name="delcheck" onclick = "return check()" value="Delete" class="btn btn-primary">
			  </div>
			  </form>
			 
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

	<script>
	  function check()
	  {
		  
	
	 if($('input[name="archive[]"]').is(':checked'))
{
	
   return true;
}else{

	alert("Please Select Atleast one checkbox")
	return false ;
  // unchecked
}
	  }
	  function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
	  </script>
<!-- Page script -->
</body>
</html>
