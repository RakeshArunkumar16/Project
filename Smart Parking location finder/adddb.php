		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];


if($con){
	echo"connection successful";
	$sql="insert into task (taskid,adid,username,tasktitle,tdetails,doc,tbonus,other)values ('','$a','$b','$c','$d','$e','$f','$g') ";

	if (mysqli_query($con, $sql)) {
               echo "Cheff Profile Deleted";?>
			   		<script type="text/javascript">
            window.alert(" Record Added added");
            window.location="addtask.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="addtask.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		

		