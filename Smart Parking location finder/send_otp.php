<?php$con=mysqli_connect("localhost","root","","food");$email=$_POST['email'];$res=mysqli_query($con,"select * from users where email='$email'");$count=mysqli_num_rows($res);if($count>0){		smtp_mailer($email,'Fettle Bowl',"Registration successfully completed");	echo "yes";}else{	echo "not_exist";}function smtp_mailer($to,$subject, $msg){	require_once("smtp/class.phpmailer.php");	$mail = new PHPMailer(); // create a new object$mail->IsSMTP(); // enable SMTP$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only$mail->SMTPAuth = true; // authentication enabled$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail$mail->Host = "smtp.gmail.com";$mail->Port = 465; // or 587$mail->IsHTML(true);$mail->Username = "prasadmp151@gmail.com";$mail->Password = "Sachinmprasad";	$mail->SetFrom("prasadmp151@gmail.com");	$mail->Subject = $subject;	$mail->Body =$msg;	$mail->AddAddress($to);	if(!$mail->Send()){		return 0;	}else{		return 1;	}	}?>