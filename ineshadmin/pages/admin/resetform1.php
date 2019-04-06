<p class="login-box-msg">Enter your registered Email to reset Password</p>
<p id="error"></p>
    <form action = "<?php echo $_SERVER["PHP_SELF"];?>"  method="post">
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" name="sendmail" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  
      
	   
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submitmail" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

