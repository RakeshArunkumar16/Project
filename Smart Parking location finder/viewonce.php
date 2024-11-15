<!DOCTYPE html><?php


include("userauth.php"); //include auth.php file on all secure pages ?>
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
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="fooddashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             
              </p>
            </a>
         
          </li>
          <li class="nav-item">
            <a href="findrecipe.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Find Recipe 
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
		    <li class="nav-item">
            <a href="yourorder.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Your Order
                
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="viewbill.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
            View Bill
                
              </p>
            </a>
          </li>
		    <li class="nav-item">
            <a href="addfeedback.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Add Feedback
                
              </p>
            </a>
          </li>
		  
		   <li class="nav-item">
            <a href="notification.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
             Notification
                
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="myprofile.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
           My Profile
                
              </p>
            </a>
          </li>
		     <li class="nav-item">
            <a href="userlogout.php" class="nav-link">
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
      
          <!-- Left col -->
          <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
          <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Fill Recipe Information</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              
			  
			  
			   
			
			  
            </div>
			
            <!-- /.row -->
			
          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
	
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2">Info Box</h5>
       


       
                   <?php
	 error_reporting(0);
	$a=$_GET['rid'];


	
	$query=("SELECT * from recipedata where id='$a' ");
	
	
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "food";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query);

 // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{
	$r=$data['cheffid'];
	$query1=("SELECT * from cheffusers where cusername='$r'  ");
	$result1 = mysqli_query($con,$query1);
while($data1 = mysqli_fetch_array($result1))
{
?>
        <div class="row">
          <div class="col-md-6">
            <!-- Box Comment -->
            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  
                  <span class="username"><a href="#"><?php echo $_SESSION['cusername']; ?></a></span>
                  <span class="description">Your Recipe Information</span>
                </div>
                <!-- /.user-block -->
                
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <img class="img-fluid pad" src="dist/img/<?php echo $data['recipeimage']; ?>" alt="Photo"><br><br><br>
			  <iframe width="570" height="315"
src="<?php echo $data['recipeurl']; ?>">
</iframe>
                <h1>Food Name : <?php echo $data['recipename']; ?></h1>
               <form action=" deleterecipe.php" method="POST">
                <span class="float-right text-muted">Recipe ID : <input type="text" value="<?php echo $data['id']; ?>" name="p1" readonly> </span>
              </div>

              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">
                  <!-- User image -->
                 

                  <div class="comment-text">
                    <span class="username">
                     Recipe Belongs To : <?php echo $data['foodstate']; ?><br>
                      Price : <?php echo $data['recipecost']; ?> Per Plate
                    </span><!-- /.username -->
                    About Recipe Info : <?php echo $data['recipeinfo']; ?><br>
                  </div><br>
                  <!-- /.comment-text -->
                </div></form>
                <!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  

                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
              <!-- /.card-footer -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
    <?php }} ?>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
		 
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         <div class="row"> 
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
