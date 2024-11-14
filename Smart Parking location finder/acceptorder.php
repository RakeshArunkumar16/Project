		
<?php 
$con = mysqli_connect("localhost", "root", "", "parking");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$a=$_GET['id'];





	$sql="UPDATE reqest SET status='completed' where rid='$a'";

	if (mysqli_query($con, $sql)) { ?>
			   		<script type="text/javascript">
            window.alert(" Booking Accepted");
            window.location="viewbooked.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Listed Property Deleted");
            window.location="viewbooked.php";
            </script>
			<?php 
	}


?>
		
		
		