		
<?php 
require('db.php');

$a=$_GET['rid'];



if($con){
	echo"connection successful";
	$sql="delete from reqest where uid='$a' ";

	if (mysqli_query($con, $sql)) {
               echo "User Registered";?>
			   		<script type="text/javascript">
            window.alert(" Parking Slot Removed");
            window.location="http://localhost/parking/agdash.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="http://localhost/parking/agdash.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		

		