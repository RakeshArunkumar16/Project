		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['pp'];
if($con){
	echo"connection successful";
	$sql="UPDATE stockrequest SET status='$b', price='$c' where sid='$a' ";

	if (mysqli_query($con, $sql)) {
               echo "Cheff Profile Deleted";?>
			   		<script type="text/javascript">
            window.alert(" Response Successfull");
            window.location="viewstockrequest.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Response Sent Fail");
            window.location="viewstockrequest.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		