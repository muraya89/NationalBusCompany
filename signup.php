<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<link rel="stylesheet" type="text/css" href="NBS.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
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
        <a class="nav-link" href="signup.php">BOOKING <span class="sr-only">(current)</span></a>
      </li>
      </ul>
  </div>
</nav>
	</section>
	<section id="nbc"><h2><b>National Bus Company.</b></h2></section>
	<div class="sign-in-form">
		<h1>Welcome</h1>
		<form action="insert.php" method="POST">
			<input type="text" name="fname" class="input-box" placeholder="First Name" required>
			<input type="text" name="lname" class="input-box" placeholder="Last Name" required>
			<input type="email" name="email" class="input-box" placeholder="Email" required>
			<input type="password" name="password" class="input-box" placeholder="Password" required>
			<input type="password" name="cpassword" class="input-box" placeholder="Confirm Password" required>
			<p><span><input type="checkbox" ></span> I agree to the terms of services</p>
			<input type="submit" value="signup" class="btn btn-primary">
			<hr>
			<p class="or">OR</p>
			<p>Already have an account?<a href="login.php">Sign in</a></p>
		</form>
	</div>
</body>
<footer id="footer">
	<div class="container text-center">
	<b>
		&reg;All rights reserved &copy;2019 Bus Company Limited. Developed by:DJMST
	</b>
	</div>
</footer>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</html>