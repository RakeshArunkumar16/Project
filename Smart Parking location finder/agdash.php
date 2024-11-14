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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Parking Slot</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
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
            <a href="agdash.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             
              </p>
            </a>
         
          </li>
		     
     
          <li class="nav-item">
            <a href="searchp.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
           Search Parking

              </p>
            </a>
          </li>
		  
		    <li class="nav-item">
            <a href="vge.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
           View Google Earth Parking

              </p>
            </a>
          </li>
		  
 
 <li class="nav-item">
            <a href="http://localhost/bot/bot.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
           Chat bot

              </p>
            </a>
          </li>
		   
		   <li class="nav-item">
            <a href="sendfeedback.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
         Send Feedback 

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
            <h1 class="m-0 text-dark"> Searching Near by Parking Using Google Maps</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           

          
		 
 <p>In this proposed system we are trying to automate the manual process. ¬ in this system the customer should be able to check the parking space availability by specifying the desired date and time using a client device such as a Web browser. ¬ the website will allow customers to reserve a time slot in which to park days, weeks, or even months ahead of time and the system will store this information and properly arrange parking reservations to maximize the number of reservations that can be made. ¬ upon successful reservation, the customer is issued a reservation confirmation number. ¬ by this customer can book the parking slots before parking the vehicle. </p>  </center>
 
<h3> Wallet : 500 Rs </h3>


 


          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
      <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Notification</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
               
                  <th>User Name</th>
				    <th>Parking Name</th>
                   <th>Parking ID</th>
                  <th>Dimension | Price</th>
				 
                  
                  <th>Address</th>
			      <th>Image</th>
				  <th>Request From</th>
                  <th>Cancel Request</th>
                </tr>
                </thead>
                <tbody>
				
		 <?php
	 error_reporting(0);
	   $a=$_SESSION['username']; 
	$query=("SELECT * FROM property INNER JOIN reqest ON property.pid = reqest.pid where reqest.uid='$a'");
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
                 
                  
				  <td><?php echo $data['utype']; ?></td>
				  <td><?php echo $data['pname']; ?></td>
                  <td> <input type="text" class="form-control" name="p1" readonly value="<?php echo $data['pid']; ?>"></td>
				  <td><?php echo $data['sf']; ?> | <?php echo $data['price']; ?></td>
				  
                  <td> <a href="https://www.google.com/maps/search/12.3067492,76.6228747" target="_blank"> DIRECTION </a></td>
				   <td><img class="img-fluid pad" src="dist/img/<?php echo $data['img']; ?>" width="250" height="300" alt="Photo"></td>
				 <td><?php echo $data['uid']; ?></td>
                  <td>  <a href='vuu.php?rid=<?php echo $data['uid']; ?>'> <button type="button" class="btn btn-block btn-warning btn-lg">Check Out</button></a></td>
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
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        
        </div>
        <!-- /.card -->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
       
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.con
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="">Searching near by Parking using Google Maps </a>.</strong>
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
