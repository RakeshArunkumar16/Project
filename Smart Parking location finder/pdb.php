		
<?php 
require('db.php');

$a=$_POST['p1'];

$c=$_POST['p3'];
$d=$_POST['p4'];


if($con){
	echo"connection successful";
	$sql="insert into processing (id,fname,cname,orderid)values ('','$a','$c','$d') ";

	if (mysqli_query($con, $sql)) {
               echo "Cheff Profile Deleted";?>
			   		<script type="text/javascript">
            window.alert(" Process added");
            window.location="ap.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="ap.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		