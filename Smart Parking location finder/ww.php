		
<?php 
require('db.php');

$a='user';
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p34'];
$g=$_POST['p33'];




if($con){
	echo"connection successful";
		 $query = mysqli_query($con, "SELECT * FROM user WHERE usid = '$b'");
  if(mysqli_num_rows(  $query) > 0){?>
	  <script type="text/javascript">
            window.alert(" Username Already Exist please select other username");
            window.location="http://localhost/parking/pages/examples/userregister.php";
            </script><?php
   echo "<div class='form'><h3>!!!!!!!!!!! user name already exist please user other.</h3><br/>Click here to try again <a href='registration.php'>Register</a></div>";
}
else{
	
	$sql="insert into user (uid,utype,usid,uemail,password,address,phone,fullname)values ('','$a','$b','$c','$d','$e','$g','$f') ";

	if (mysqli_query($con, $sql)) {
               echo "User Registered";?>
			   		<script type="text/javascript">
            window.alert(" User Registered Done");
            window.location="http://localhost/parking/pages/examples/userlogin.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="http://localhost/parking/pages/examples/userlogin.php";
            </script>
			<?php 
	}
}
}
else{
	echo"connection error";

}
?>
		
		

		