<?php
include("connect.php");
date_default_timezone_set( 'Africa/Lagos' );
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
?>
<style>
::-webkit-scrollbar {
  
    height: 0.5em
}
::-webkit-scrollbar-button {
    background: #ccc
}
::-webkit-scrollbar-track-piece {
    background: #eee
}
::-webkit-scrollbar-thumb {
    background: #ccc
}​

</style>


<div class="wrapper" style="overflow-y:hidden;">

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
 <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css?v=1.05">
 
 <style>
 body {
    font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
 }
.background
   {
	   background-image: url("loadingback.gif");
	   background-repeat: no-repeat;
	   background-size: 30px 30px ;
	   background-position:left;
   }
</style>
  <header class="main-header" align="left" >
    <!-- Logo -->
    <a href="#" class="logo" style="background-color:#33cc66">
	<?php
		if($_SESSION['type'] == 1)
		{
		?>
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="color:White"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color:white" ><b>Mail</b></span>
	  <?php
		}
		if($_SESSION['type'] == 2)
		{
		?>
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"style="color:white"><b>M</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color:white"><b>Email</b></span>
	  <?php
		}
	  ?>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#339966" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"  style="background-color:#33cc66;color:black">
        <span class="sr-only">Toggle navigation</span>
      </a>
	
 <div class="navbar-custom-menu">
	   <ul class="nav navbar-nav">
	  
              
	    <li style="color:white;margin-top:15px;margin-left:-10px"><b>
		Welcome ! <?php echo $name ; ?></b>
		 </li>
	   <li>
            <a href="logout.php" style="color:white" >Logout&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
          </li>
	   </ul>
	   </div>
	  
	  
	  
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
		
		<li class="treeview" name= "dashboard" id= "dashboard">
          <a  href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
          
        </li>
		 
		
		
      
		
   <li class=" treeview" name= "chngpswrd" id= "chngpswrd">
          <a  href="changepassword.php">
            <i class="fa fa-user"></i> <span>Change Password</span>
            <span class="pull-right-container">
            </span>
          </a>
          
        </li>
        <li class=" treeview" name= "chngpswrd" id= "chngpswrd">
          <a  href="requestquote.php">
            <i class="fa fa-user"></i> <span>Request Quote Data</span>
            <span class="pull-right-container">
            </span>
          </a>
          
        </li>
        <li class=" treeview" name= "chngpswrd" id= "chngpswrd">
          <a  href="orders.php">
            <i class="fa fa-user"></i> <span>Orders Data</span>
            <span class="pull-right-container">
            </span>
          </a>
          
        </li>
        <li class=" treeview" name= "chngpswrd" id= "chngpswrd">
          <a  href="contactus.php">
            <i class="fa fa-user"></i> <span>Contactus Data</span>
            <span class="pull-right-container">
            </span>
          </a>
          
        </li>
	  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  