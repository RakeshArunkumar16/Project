		
<?php 
require('db.php');

$a=$_POST['p1'];




if($con){
	echo"connection successful";
	$sql="DELETE FROM recordinfo where id='$a'";

	if (mysqli_query($con, $sql)) {
               echo "stock request Deleted";?>
			   		<script type="text/javascript">
            window.alert("  Deleted Successfully");
            window.location="viewrecords.php";
            </script>
			<?php 
            }
	else{
		echo"stock request Deleted fail";?>
		<script type="text/javascript">
            window.alert("Delete Fail");
            window.location="viewrecords.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		