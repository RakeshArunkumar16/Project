		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];






	$sql="INSERT into property (pid,utype,pname,lg,lt,sf,price,img)values ('','$a','$b','$c','$d','$e','$f','$g') ";

	if (mysqli_query($con, $sql)) {
               echo "User Registered";?>
			   		<script type="text/javascript">
            window.alert(" Parking Location Added");
            window.location="addsite.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="addsite.php";
            </script>
			<?php 
	}

?>
		
		

		