		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];

if($con){
	echo"connection successful";
	$sql="insert into response(userid,title,info)values ('$a','$b','$c') ";

	if (mysqli_query($con, $sql)) {
               echo "Updated";?>
			   		<script type="text/javascript">
            window.alert(" Record Added added");
            window.location="http://localhost/sap/sff.php";
            </script>
			<?php 
            }
	else{
		echo"fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="http://localhost/sap/sff.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		

		