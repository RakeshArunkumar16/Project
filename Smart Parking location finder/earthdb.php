		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];






if($con){
	echo"connection successful";
	$sql="insert into earth (eid,ename,elink,esize,eprice,about)values ('','$a','$b','$c','$d','$e') ";

	if (mysqli_query($con, $sql)) {
               echo "User Registered";?>
			   		<script type="text/javascript">
            window.alert(" Property Added");
            window.location="http://localhost/parking/addearth.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="http://localhost/parking/addearth.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		

		