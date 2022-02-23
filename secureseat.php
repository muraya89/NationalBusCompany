<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'djmst');

$email=$_POST['email'];
$city = $_POST['city'];
$village = $_POST['village'];
$mop = $_POST['mop'];
$code = $_POST['code'];
$number = $_POST['number'];

$s= "select email from register where email = '$email'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	# code...
	$reg = "insert into secureseat(city,village,mop,code,email,number)values('$city','$village','$mop','$code','$email','$number')";
	mysqli_query($con, $reg);
	//echo "Secured seat successfully";
	header('location: display.php');
}
else{
	echo "Email not found";
}
?>