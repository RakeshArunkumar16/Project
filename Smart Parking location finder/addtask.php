<!DOCTYPE html>
<?php


include("userauth.php"); //include auth.php file on all secure pages ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SAP</title>
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
        <a href="" class="nav-link">SAP</a>
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
      <span class="brand-text font-weight-light">SAP</span>
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
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
             
              </p>
            </a>
         
          </li>
		      <li class="nav-item">
            <a href="viewuser.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
      View User 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="addtask.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
             Assign Task 
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
		
		    <li class="nav-item">
            <a href="viewreport.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
           View Task Report
                
              </p>
            </a>
          </li>
		
		    <li class="nav-item">
            <a href="addfeedback.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
        Send Query or Feedback 
                
              </p>
            </a>
          </li>
		  
		      <li class="nav-item">
            <a href="viewfeed.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
       View Response
                
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
            <h1 class="m-0 text-dark"> Admin Dashboard</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-12">
       <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Assign Task</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adddb.php"  method="post">
                <div class="card-body">
				
				 <div class="form-group">
                    <label for="exampleInputEmail1">Auditor ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="p1" value="<?php echo $_SESSION['username']; ?>" readonly>
                  </div>
				  
				  
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Agent ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="p2" required placeholder="Enter Agent ID">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Task Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="p3" required  placeholder="Task Title">
                  </div>
				   <div class="form-group">
                    <label for="exampleInputEmail1">Task Details</label>
					<textarea class="form-control" name="p4"></textarea>
                   
                  </div>
				   <div class="form-group">
                    <label for="exampleInputPassword1">Date of Completion </label>
                    <input type="date" class="form-control" name="p5" id="exampleInputPassword1" required  placeholder="Date of Completion">
                  </div>
				    <div class="form-group">
                    <label for="exampleInputPassword1">Task Bonus </label>
                    <input type="number" class="form-control" name="p6" id="exampleInputPassword1" required  placeholder="Task Bonus">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Other Details</label>
					<textarea class="form-control" name="p7" required  ></textarea>
                   
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
              </form>
            </div>
          <!-- /.card -->

          
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
	  
	
 
 

       
        <!-- /.col -->
 

	  
	  
      <!-- /.row -->
    </section>
    <!-- Main content -->

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="">SAP</a>.</strong>
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
