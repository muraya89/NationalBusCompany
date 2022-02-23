<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'djmst');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$s= "select * from register where email = '$email' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	# code...
	$_SESSION['email']=$email;
	header('location: home.php');
}else{
	header('location:login.php');
	echo "Wrong email or password";
}
?>