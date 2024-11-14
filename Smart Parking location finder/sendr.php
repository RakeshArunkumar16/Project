<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];


		
		$query = mysqli_query($con, "SELECT * FROM reqest WHERE uid = '$b'");
  if(mysqli_num_rows( $query) > 0){
?>
			   		<script type="text/javascript">
            window.alert("Parking Slot Already Booked, Please Cancel Previous Request ");
            window.location="searchp.php";
            </script>
			<?php 


}
else{
	
	
	
	
	$sql="INSERT INTO reqest (rid,pname,uid,ft,rt) VALUES('','$a','$b','$c','$d')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Parking Booked ");
            window.location="searchp.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("failed");
            window.location="searchp.php";
            </script>
			<?php 
	}
}




?>
	