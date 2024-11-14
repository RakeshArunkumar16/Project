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
        $query = "INSERT into `cheffusers` (cusername,cfullname,cemail, cpassword, phone,address)
VALUES ('$username','$fname','$email', '".md5($password)."' ,'$cphone' ,'$caddress' )";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Registred");
            window.location="chefflogin.php";
            </script>
			<?php 
        }
    }else{
?>
<div class="register-box">
  <div class="register-logo">
    <a href="http://localhost/food/"><b>HOME</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new Cheff Membership</p>

      <form action="cheffregister.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Cheff User Name"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
		 <div class="input-group mb-3">
          <input type="text" name="fullname" class="form-control" placeholder="Cheff Full name"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Cheff Email"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		 <div class="input-group mb-3">
          <input type="tel" name="cphone" class="form-control" placeholder="Cheff Phone" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		
		 <div class="input-group mb-3">
          <textarea name="caddress" class="form-control" placeholder="Cheff Address"required></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder=" Cheff Password"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder=" Cheff Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
       
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <a href="http://localhost/food/pages/examples/chefflogin.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<?php } ?>  
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
