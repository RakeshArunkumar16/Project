		
<?php 
$con = mysqli_connect("localhost", "root", "", "parking");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$a=$_GET['id'];





	$sql="UPDATE payment SET status='completed' where id='$a'";

	if (mysqli_query($con, $sql)) { ?>
			   		<script type="text/javascript">
            window.alert(" Payment Accepted");
            window.location="viewpaid.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Listed Property Deleted");
            window.location="viewpaid.php";
            </script>
			<?php 
	}


?>
		
		
		