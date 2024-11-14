		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];




if($con){
	echo"connection successful";
	$sql="insert into response (aid,agid,response)values ('$a','$b','$c') ";

	if (mysqli_query($con, $sql)) {
               echo "Cheff Profile Deleted";?>
			   		<script type="text/javascript">
            window.alert(" Record Added added");
            window.location="schedule.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="addreport.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		

		