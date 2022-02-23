<?php

session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'djmst');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$s= "select * from register where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	# code...
	echo "Email already taken";
}else{
	$reg = "insert into register(fname,lname,email,password,cpassword)values('$fname','$lname','$email','$password','$cpassword')";
	mysqli_query($con, $reg);
	echo "Registration successful";
}





// $conn = mysqli_connect('127.0.0.1','root','');
// if (!$conn) {
// 	# code...
// 	echo "Not connected to server";
// }
// if (!mysqli_select_db($conn,'djmst')) {
// 	# code...
// 	echo "Database NOT selected";
// }
	
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $cpassword = $_POST['cpassword'];

// $query="insert into register(fname,lname,email,password,cpassword)values('$fname','$lname','$email','$password','$cpassword')";

// if (mysqli_query($conn,$query)) {//run the query
// 	# code...
// 	echo "You have registered successfully...";
// header("refresh:2; url=home.php");
// }else{
// 	echo "Try again";
// }




// if (!empty($fname)|| !empty($lname)||!empty($email)||!empty($password)||!empty($cpassword)) {
// 	# code...
// 	$host ="localhost";
// 	$dbUsername ="root";
// 	$dbPassword ="";
// 	$dbname="djmst";

// 	//create a connection
// 	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

// 	if (mysqli_connect_error()) {
// 		# code...
// 		die('Connection error('.mysql_connect_errno().')'.mysqli_connect_error());
// 	}else{
// 		$SELECT = "SELECT email FROM register WHERE email=? Limit 1";//every user has a unique email
// 		$INSERT = "INSERT into register(fname, lname, email, password, cpassword)values(?,?,?,?,?)";

// 		//prepare statement
// 		$stmt = $conn->prepare($SELECT);
// 		$stmt->bind_param("s",$email);
// 		$stmt->execute();
// 		$stmt->bind_result($email);
// 		$stmt->store_result();
// 		$rnum->$stmt->num_rows;
// //see if email is used
// 		if ($rnum==0) {
// 			# code...
// 			$stmt->close();

// 			$stmt = $conn->prepare($INSERT);
// 			$stmt->bind_param("sssss",$fname,$lname,$email,$password,$cpassword);
// 			$stmt->execute();
// 			echo "New record inserted successfully";
// 		}else{
// 			echo "Someone already registered using this email";
// 		}
// 		$stmt->close();
// 		$conn->close();
// 	}

// }else{
// 	echo "All fields are required";
// 	die();
// }
?>