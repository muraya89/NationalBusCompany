<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="email" placeholder="email">
		<input type="submit" name="search" value="GENERATE TICKET" class="btn btn-primary">
	</form>
<table>
	<tr>
		<th>City</th>
		<th>Village</th>
		<th>Mode of Payment</th>
		<th>Confirmation Coode</th>
		<th>Email</th>
		<th>ID Number</th>
	</tr>
<?php 
	$conn = mysqli_connect('localhost','root','','djmst');
	$query = "select * from secureseat where email=.$email";
	$result =mysqli_query($query);
	while ($row = mysqli_fetch_array($result)) {
		# code...
		$city=$row['city'];

		//echo "".$row["city"]."".$row["village"]."".$row["mop"]."".$row["code"]."".$row["email"]."".$row["number"]."<br>";
	}
 ?>
</table>

</body>
</html>
