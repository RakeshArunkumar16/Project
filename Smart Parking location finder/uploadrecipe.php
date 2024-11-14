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
$j=$_POST['p10'];

if($con){
	echo"connection successful";
	$sql="INSERT INTO recipedata (foodstate,foodtype,recipename,recipeimage,	recipeurl,	recipecost,	recipeeffect,	recipeinfo,	cheffid,	cheffcity) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";

	if (mysqli_query($con, $sql)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("successfully Uploaded");
            window.location="http://localhost/food/addrecipe.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Not Uloaded");
            window.location="http://localhost/food/addrecipe.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		