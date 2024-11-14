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
$i=$_POST['p9'];


if($con){
	echo"connection successful";
	$sql="INSERT INTO foodorder (recipeid,userid,cheffid,phone,instruction,deliverytype,address,quantity,totalamount
) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Order Successfull");
            window.location="http://localhost/food/findrecipe.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Order Fail");
            window.location="http://localhost/food/findrecipe.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		