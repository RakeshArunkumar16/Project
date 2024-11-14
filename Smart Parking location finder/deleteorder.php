		
<?php 
require('db.php');

$a=$_POST['p1'];




if($con){
	echo"connection successful";
	$sql="DELETE FROM foodorder where orderid='$a'";

	if (mysqli_query($con, $sql)) {
               echo "Order Cancellation Done";?>
			   		<script type="text/javascript">
            window.alert(" Deleted Successfully");
            window.location="yourorder.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Cancellation Fail");
            window.location="yourorder.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		