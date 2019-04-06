 
<p id="msg" style="text-align:center;color:red"> Your Generated password has been activated.Either use generated password to login or update your password below.</p>

<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method= "POST" >

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="username"  id="username" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Enter Generated Password" name="sendpass" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="New Password" id="password" name="passwords" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype Password" id="confirm" name="confirms" onblur="showconfirm() required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submitpass" onclick="return submitForm()" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col -->
      </div>
</form>
<script>
	function submitForm()
	{
		
		var pattern = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		if(!pattern.test(document.getElementById("username").value))
		{
			document.getElementById("msg").innerHTML = "Invalid Email Format" ;
			
			//flag9 = true ;
			return false
		}
		
		if(document.getElementById("password").value !== document.getElementById("confirm").value)
		{
			document.getElementById("msg").innerHTML = "Password don't match" ;
			return false;
		}
		
	}
	</script>