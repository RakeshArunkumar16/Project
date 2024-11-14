		
<?php 
require('db.php');

$a=$_POST['p1'];




if($con){
	echo"connection successful";
	$sql="delete from property where pid='$a'";

	if (mysqli_query($con, $sql)) {
               echo "User Profile Deleted";?>
			   		<script type="text/javascript">
            window.alert(" Listed Property Deleted");
            window.location="schedule.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Listed Property Deleted");
            window.location="schedule.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		