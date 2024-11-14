<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>parking</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$fname = stripslashes($_REQUEST['fullname']);
	$fname = mysqli_real_escape_string($con,$fname);
	
	
	$cphone = stripslashes($_REQUEST['cphone']);
	$cphone = mysqli_real_escape_string($con,$cphone);
	$caddress = stripslashes($_REQUEST['caddress']);
	$caddress = mysqli_real_escape_string($con,$caddress);
	
	
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username,fullname,email, password ,cphone,caddress)
VALUES ('$username','$fname','$email', '".md5($password)."','$cphone','$caddress')";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Registred");
            window.location="userlogin.php";
            </script>
			<?php 
        }
    }else{
?>
<div class="register-box">
  <div class="register-logo">
    <a href="http://localhost/parking/"><b>HOME</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new User Membership</p>

      <form action="http://localhost/parking/ww.php" method="post">
	  
	 
        </div>
		
        <div class="input-group mb-3">
          <input type="text" name="p2" class="form-control" placeholder="User Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
		
        <div class="input-group mb-3">
          <input type="email" id="email" name="p3" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
	
	 <div class="input-group mb-3">
          <input type="number" id="email" name="p33" class="form-control" placeholder="Phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		
		
		 <div class="input-group mb-3">
          <input type="text" id="email" name="p34" class="form-control" placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		
        <div class="input-group mb-3">
          <input type="password" name="p4" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
		<textarea name="p5" class="form-control"></textarea>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
			<div class="input-group mb-3">
			<button type="submit" class="btn btn-block bg-gradient-success ">Register</button>
          <div class="input-group-append">
           
          </div>
        </div>
		
	
		
        <div class="row">
       
          <!-- /.col -->
         
          <!-- /.col -->
        </div>
      </form>

     

      <a href="userlogin.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<?php } ?>      
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script>
function send_otp(){
	var email=jQuery('#email').val();
	jQuery.ajax({
		url:'send_otp.php',
		type:'post',
		data:'email='+email,
		success:function(result){
			if(result=='yes'){
			
			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Please enter valid email');
			}
		}
	});
}
 </script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
