<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];
$h=$_POST['p8'];


if($con){
	echo"connection successful";
	$sql="INSERT INTO bmdata (id,foodname,corn,tomoto,brocoli,berry,frec,spinach,details
) VALUES('','$a','$b','$c','$d','$e','$g','$f','$h')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("successfully Uploaded");
            window.location="http://localhost/food/addbm.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Not Uloaded");
            window.location="http://localhost/food/addbm.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		