<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>
<?php
@session_start();
if(isset($_SESSION['email']))
{
$_SESSION=array();
if(isset($_COOKIE[session_name()]))
{
@setcookie(session_name(),'',time()-3600);
}
@session_destroy();
}

?>
<script>
document.location = "login.php"
</script>
<body>
</body>
</html>