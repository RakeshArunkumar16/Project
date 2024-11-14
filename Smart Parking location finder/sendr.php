<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];


if($con){
	echo"connection successful";
		
		$query = mysqli_query($con, "SELECT * FROM reqest WHERE uid = '$b'");
  if(mysqli_num_rows(  $query) > 0){
   echo "<div class='form'><h3>!!!!!!!!!!! user name already exist please user other.</h3><br/>Click here to try again <a href='registration.php'>Register</a></div>";
?>
			   		<script type="text/javascript">
            window.alert("Parking Slot Already Booked, Please Cancel Previous Request ");
            window.location="http://localhost/parking/searchp.php";
            </script>
			<?php 


}
else{
	
	
	
	
	$sql="INSERT INTO reqest (rid,pid,uid,ft,rt) VALUES('','$a','$b','$c','$d')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Parking Booked ");
            window.location="http://localhost/parking/searchp.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Failed");
            window.location="http://localhost/parking/searchp.php";
            </script>
			<?php 
	}
}



}

else{
	echo"connection error";

}
?>
	