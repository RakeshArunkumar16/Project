<?php 
require('db.php');

$a=$_POST['p0'];
$b=$_POST['p1'];
$c=$_POST['p2'];
$d=$_POST['p3'];
$e=$_POST['p5'];


if($con){
	echo"connection successful";
		
		$query = mysqli_query($con, "INSERT into payment (id,uid,price,tid) Values ('','$a','$c','$d')");
  if($query){
    $sql=mysqli_query($con,"UPDATE reqest SET status='complete' where rid='$e'");
    if($sql){
?>
			   		<script type="text/javascript">
            window.alert("Payment Accepted ,Please Wait Until Admin Confirm. Thank You ");
            window.location="viewbill.php";
            </script>
			<?php 


}
  }
else{
	
	
	
	
	
}



}

else{
	echo"connection error";

}
?>
	