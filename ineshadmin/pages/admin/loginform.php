<p class="login-box-msg">Log In to continue</p>

    <form action = "<?php echo $_SERVER["PHP_SELF"];?>"  method="post">
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	   
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	
   