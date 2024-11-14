<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Food</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="http://localhost/food/"><b>Home</a>
  </div>
  <!-- /.login-logo -->
  <?php
  error_reporting(0);
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['p1'])){
		$p1 = stripslashes($_REQUEST['p1']); // removes backslashes
		$p1 = mysqli_real_escape_string($con,$p1); //escapes special characters in a string
		$p2 = stripslashes($_REQUEST['p2']);
		$p2 = mysqli_real_escape_string($con,$p2);
		$p3 = stripslashes($_REQUEST['p3']); // removes backslashes
		$p3 = mysqli_real_escape_string($con,$p3);
		 if($p2 != $p3)
		 {
			 echo "<div class='form'><h3>passwords doesn't match.</h3><br/>Click here to <a href='cheffforgotpassword.php'>Here</a></div>";
		 }
			else{ 
 $query = "update `cheffusers` set cpassword= '".md5($p2)."' where cusername='$p1'";
        $result = mysqli_query($con,$query);

        if($result){
            echo "<div class='form'><h3>You are updated successfully.</h3><br/>Click here to <a href='http://localhost/food/pages/examples/chefflogin.php'>Login</a></div>";
           
        }
			}
    }
	    else{
		?>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily create new password</p>

      <form action="cheffforgotpassword.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="p1" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		  <div class="input-group mb-3">
          <input type="password" name="p2" class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="p3" class="form-control" placeholder="Retype New password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="http://localhost/food/pages/examples/chefflogin.php">Login</a>
      </p>
      <p class="mb-0">
        <a href="http://localhost/food/pages/examples/cheffregister.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
	<?php }?>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
