		
<?php 
require('db.php');

$a=$_GET['id'];




	$sql="DELETE FROM reqest where rid='$a'";
	$result = mysqli_query($con,$sql); 
	if ($result===TRUE) {
               echo "Order Cancellation Done";?>
			   		<script type="text/javascript">
            window.alert(" Deleted Successfully");
            window.location="viewbooked.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Cancellation Fail");
            window.location="viewbooked.php";
            </script>
			<?php 
	}

?>
		
		
		