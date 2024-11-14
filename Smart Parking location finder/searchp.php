<!DOCTYPE html><?php


include("userauth.php"); //include auth.php file on all secure pages ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parking Slot</title>
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
        <a href="" class="nav-link">Parking Slot</a>
      </li>
      
    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ParkSpotter</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
        <span style="color:white;" >USER
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a></span style="color:white;">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="agdash.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             
              </p>
            </a>
         
          </li>
		     
     
          <li class="nav-item has-treeview menu-open">
            <a href="searchp.php" class="nav-link active">
              <i class="nav-icon fas fa-search"></i>
              <p>
           Search Parking

              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="vge.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
           View Public Parking

              </p>
            </a>
          </li>
		  
          <li class="nav-item ">
            <a href="viewbooking.php" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
My Bookings
              </p>
            </a>
          </li>
		   <li class="nav-item">
            <a href="sendfeedback.php" class="nav-link">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
         Send Feedback 

              </p>
            </a>
          </li>
		  
		     <li class="nav-item">
            <a href="userlogout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
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
      <div class="row">
	  
	  
	  
	  
	  
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Parking Slot</h3>
            </div>
            <!-- /.card-header -->
            
			
			
			
			
			
			<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                
                 
				    <th>Parking Name</th>
                  
                  <th>Total Slots | Price</th>
				   <th>From Time</th>
				 
				  
                   <th>To Time</th>
                  <th>Address</th>
			      <th>Image</th>
                 <th>Book Slot </th>
                </tr>
                </thead>
                <tbody>
				
		 <?php
	 error_reporting(0);
	  
	  
	  
	  
	$query=("SELECT * from property ");
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "parking";



$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
if(mysqli_connect_errno())
{
	echo"failed to connect to MysQl: ". mysqli_connect_error();
}
$result = mysqli_query($con,$query); // selecting data through mysql_query()
while($data = mysqli_fetch_array($result))
{


	
?>
				
				
				
                <tr>
                  <form action="sendr.php"  method="post">
                 
               <input type="hidden" name="p1" readonly class="form-control" value="<?php echo $data['pname']; ?>">
				 <input type="hidden" name="p2" readonly class="form-control" value="<?php echo $_SESSION['username']; ?>">

				  <td><?php echo $data['pname']; ?></td>
                  
				  <td><?php echo $data['sf']; ?> | &#8377 <?php echo $data['price']; ?></td>
				  				 <td> <input type="time" required name="p3"  class="form-control"></td>
								 				 <td> <input type="time" required name="p4" class="form-control"  value=""></td>
                  <td> <a href="https://www.google.com/maps/search/<?php echo $data['lt']; ?>,<?php echo $data['lg']; ?>" target="_blank"> <i class="fas fa-map-marker-alt"></i> Direction </a></td>
				   <td><img class="img-fluid pad" src="dist/img/<?php echo $data['img']; ?>" width="200" height="150" alt="Photo"></td>
				<td><button type="submit" class="btn btn-block bg-gradient-success ">Book Now</button></td>
				  </form>
                </tr>
<?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="">Searching near by Parking using Google Maps</a>.</strong>
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
