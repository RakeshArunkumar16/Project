		
<?php 
require('db.php');

$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];



if($con){
	echo"connection successful";
	$sql="insert into recordinfo (id,country,brandname,aname,version,cname)values ('','$a','$b','$c','$d','$e') ";

	if (mysqli_query($con, $sql)) {
               echo "Cheff Profile Deleted";?>
			   		<script type="text/javascript">
            window.alert(" Record Added added");
            window.location="addrecords.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="addhr.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		
		