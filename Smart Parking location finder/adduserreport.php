<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];


if($con){
	echo"connection successful";
	$sql="INSERT INTO userreport (userid,cheffid,message) VALUES('$a','$b','$c')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("successfully Sent ");
            window.location="http://localhost/food/reportuser.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Failed");
            window.location="http://localhost/food/reportuser.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		