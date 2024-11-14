		
<?php 
$mysql_hostname = "localhost";
$mysql_user     = "root";
$mysql_password = "";
$mysql_database = "bot";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);

$a=$_POST['p1'];
$b=$_POST['p2'];







if($con){
	echo"connection successful";
	$sql="insert into chatbot (id,queries,replies)values ('','$a','$b') ";

	if (mysqli_query($con, $sql)) {
               echo "User Registered";?>
			   		<script type="text/javascript">
            window.alert(" Chat Message Added");
            window.location="http://localhost/parking/mchat.php";
            </script>
			<?php 
            }
	else{
		echo"User Profile Deleted fail";?>
		<script type="text/javascript">
            window.alert("Fail");
            window.location="http://localhost/parking/mchat.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>
		
		

		