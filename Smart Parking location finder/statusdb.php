<?php 
require('db.php');

$a=$_POST['dusername'];
$b=$_POST['orderid'];
$c=$_POST['address'];
$d=$_POST['quantity'];
$e=$_POST['totalamount'];
$f=$_POST['dstatus'];
$g=$_POST['longitude'];
$h=$_POST['latitude'];


if($con){
	echo"connection successful";
	$sql="INSERT INTO deliverystatus (id,dusername,orderid,address,quantity,totalamount,status,longitude,latitude) VALUES('','$a','$b','$c','$d','$e','$f','$g','$h')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("successfully Sent ");
            window.location="http://localhost/food/viewshipping.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Failed");
            window.location="http://localhost/food/viewshipping.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		