<?php
	session_start();
	if (!isset($_SESSION['email'])) {
		# code...
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Bus Company</title>
	<link rel="stylesheet" type="text/css" href="NBS.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: #000000;
  text-align: center;
}

td, th {
  border: 1px solid #000000;
  text-align: left;
  padding: 8px;
}

tr{
  background-color: #dddddd;
}
label{
	color: blue;
}
input[placeholder],[value]{
	text-align: center;
}
option{
	text-align: center;
}

</style>
</head>
<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="Images/logo.png"></a>
  <h1><b><u>NBC</u></b></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#Home">BOOKING <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Pricelist">PRICE LIST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">NEWS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php">CONTACT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Login.php">SIGN IN</a>
      </li>
      <li class="nav-item">      	
		<a class="nav-link" href="logout.php"> LOGOUT </a>
      </li>
      <li class="nav-item">      	
		<a class="nav-link" href="display.php"> My ticket </a>
      </li>
      </ul>
  </div>
</nav>
	</section>

	<h2 style="color: grey;"><u>Welcome	<?php echo $_SESSION['email'];	?>	</u></h2>
	
	<section id="nbc"><h2><b>National Bus Company.</b></h2></section>
	<section id="Pricelist">
		<h1>Price List</h1>
		<div class="table">
		<table>
			<tr>
				<th>Routes</th>
				<th>Athi River Station</th>
				<th>Railways HQ</th>
				<th>Ngong Station</th>
				<th>Ongata Rongai Station</th>
			</tr>
			<tr>
				<th>R01:<br>Karen</th>
				<td>30-70-100/=</td>
				<td>50-70/=</td>
				<td>30-50/=</td>
				<td>30-50/=</td>
			</tr>
			<tr>
				<th>R02:<br>Gigiri</th>
				<td>30-70-100/=</td>
				<td>40-50/=</td>
				<td>50-100/=</td>
				<td>30-50-70/=</td>
			</tr>
			<tr>
				<th>R03:<br>Juja</th>
				<td>40-70/=</td>
				<td>30-50/=</td>
				<td>50-70-100/=</td>
				<td>50-100/=</td>
			</tr>
			<tr>
				<th>R04:<br>Buruburu</th>
				<td>30-40-50/=</td>
				<td>30-70/=</td>
				<td>50-100/=</td>
				<td>50-100/=</td>
			</tr>
		</table>
		</div>
	</section>
	<hr>
	<section id="Home">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
						<h2>Booking</h2>
						<form action="secureseat.php" method="POST">
						<label>Pick up: </label><br>
					<select class="input" name="city">
						<option value="">--select--</option>
						<option value="athiriver">Athi River</option>
						<option value="buruburu">Buruburu</option>
						<option value="gigiri">Gigiri</option>
						<option value="juja">Juja</option>
						<option value="karen">Karen</option>
						<option value="ngong">Ngong</option>
						<option value="ongatarongai">Ongata Rongai</option>
						<option value="railways">Railways</option>
					</select><br>
					<label>Destination: </label><br>
					<select class="input" name="village">
						<option value="">--select--</option>
						<option value="athiriver">Athi River</option>
						<option value="buruburu">Buruburu</option>
						<option value="gigiri">Gigiri</option>
						<option value="juja">Juja</option>
						<option value="karen">Karen</option>
						<option value="ngong">Ngong</option>
						<option value="ongatarongai">Ongata Rongai</option>
						<option value="railways">Railways</option>
					</select><br>
					<label>Payment Option: </label><br>
					<select class="input" name="mop">
						<option value="">--select--</option>
						<option value="cash">Cash</option>
						<option value="mpesa">M-Pesa</option>
						<option value="pesapal">PesaPal</option>
						<option value="card">Card</option>
					</select><br>
					<label>Confirmation Code: </label><br>
					<input type="text" name="code" class="input" placeholder="Payment Confirmation Code"><br>

					<label>Full Name:  </label><br>
					<input type="email" class="input" name="email" value=<?php echo $_SESSION['email'];	?>><br>

					<label>National ID/Passport: </label><br>
					<input type="number" name="number" class="input" style="text-align: center;"><br><br>

					<input type="submit" name="insert" value="Secure Seat" class="btn btn-primary">
				</form>
				</div>
				<div class="col-md-6" id="offer">
					<p>
						OFFER!!<br>
						Purchase your Tembea Card today and get any return ticket of your choice for free!!<br>
					</p>
				</div>
			</div>
		</div>
	</section>
</body>
<footer id="footer">
	<div class="container text-center">
	<b>
		&reg;All rights reserved &copy;2019 Bus Company Limited. Developed by:DJMST
	</b>
	</div>
</footer>
</html>


