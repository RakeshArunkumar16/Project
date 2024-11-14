<!DOCTYPE html><?php


include("dauth.php"); //include auth.php file on all secure pages ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wellness Bloom</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Wellness Bloom</a>
      </li>
      
    </ul>


<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['dusername'])){
        // removes backslashes
	$dusername = stripslashes($_REQUEST['dusername']);
        //escapes special characters in a string
	$dusername = mysqli_real_escape_string($con,$dusername); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$fname = stripslashes($_REQUEST['fullname']);
	$fname = mysqli_real_escape_string($con,$fname);
	
	
	$cphone = stripslashes($_REQUEST['cphone']);
	$cphone = mysqli_real_escape_string($con,$cphone);
	$caddress = stripslashes($_REQUEST['caddress']);
	$caddress = mysqli_real_escape_string($con,$caddress);
	
	$dstatus = stripslashes($_REQUEST['dstatus']);
	$dstatus= mysqli_real_escape_string($con,$dstatus);
	


        $query = "UPDATE delireg  SET phone='$cphone',address='$caddress',demail='$email',status='$dstatus' where dusername='$dusername'";
        $result = mysqli_query($con,$query);
        if($result){
           echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("successfully Updated");
            window.location="dprofile.php";
            </script>
			<?php 
        }
    }else{
?>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Wellness Bloom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['dusername']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="dprofile.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Profile Update
             
              </p>
            </a>
         
          </li>
          <li class="nav-item">
            <a href="viewshipping.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              View Shipping
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
		  
		     <li class="nav-item">
            <a href="http://localhost/food/pages/examples/deliverylogin.php"" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
             Logout
                
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> User Dashboard</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          
            <!-- /.card -->
<?php
	 error_reporting(0);
	  $a=$_SESSION['dusername'];
	$query=("SELECT * from delireg where dusername='$a'");
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "food";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{


	
?>
            <!--/.direct-chat -->
<div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
            <!-- TO DO List -->
             <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    
					<form action="dprofile.php" method="post">
					
					
					<label> Username    : <input type="text" class="form-control"  readonly name="dusername" value="<?php echo $_SESSION['dusername']; ?>" >    </label><br>
					<label> Full Name : <input type="text" name="fullname" class="form-control" value="<?php echo $data['dfullname']; ?>" ></label><br>
					<label> User Email  : <input type="text" name="email" class="form-control" value="<?php echo $data['demail']; ?>" > </label><br>
						
					<label> Phone   : <input type="text" name="cphone" class="form-control" value="<?php echo $data['phone']; ?>" ></label><br>
					<label> Address  : <input type="text" name="caddress" class="form-control" value="<?php echo $data['address']; ?>" > </label><br>
					<label> Status :  </label> <select class="form-control" name="dstatus">
					<option value="ACTIVE"> ACTIVE</option>
					<option value=" IN_ACTIVE"> IN ACTIVE</option>
					</select>
					
					
					<br>
					
					
					<button type="submit" class="btn btn-block bg-gradient-success ">Update Profile</button>
                  </div>
                  <!-- /.tab-pane -->
             </form>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
          <!-- right col -->
        </div>
		 </div>
                <!-- /.tab-content -->
              </div>
			  
<?php } ?> 
			  
			  
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="">Food Connoisseur</a>.</strong>
    All rights reserved.
    
  </footer>
<?php } ?>  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
