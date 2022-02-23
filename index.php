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
        <a class="nav-link" href="home.php">BOOKING <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">PRICE LIST</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#About">ABOUT</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="#news">NEWS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#Contact">CONTACT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Login.php">SIGN IN</a>
      </li>
      </ul>
  </div>
</nav>
	</section>
	<section id="nbc"><h2><b>National Bus Company.</b></h2></section>
	<section id="About">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>About</h2>
					<div class="about-content"></div>
					Offering great Expertise in all your land transport needs.
					We are a reliable transport company offering various transport services from The Railway Stations to The CBD.
					We are focused on providing the best, safest and convenient commute that allows for comfort and style.
				</div>
				<div class="col-md-3" id="img">
					<img src="Images/back.jpg">
				</div>
			</div>
		</div>
	</section>
		<section id="news">
		<div class="container">
			<h1>News</h1>
			<div class="row news">
				<div class="col-md-4 text-center">
					<h3>EDUCATION:</h3>
					<p>2-6-6-3 set to roll out fully in primary schools as from...<a href="#">Read more</a></p>
				</div>
				<div class="col-md-4 text-center">
					<h3>TECHNOLOGY:</h3>
					<p>How to bridge the gap between oil and green energy...<a href="#">Read more</a></p>
				</div>
				<div class="col-md-4 text-center">
					<h3>BUSINESS:</h3>
					<p>The National Bus Company is set to open its shares to the public...<a href="#">Read more</a></p>
				</div>
			</div>
		</div>
	</section>
		<section id="slide">
	<div id="slider">
		<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/image1.jpg" class="d-block img-fluid">
    </div>
    <div class="carousel-item">
      <img src="Images/image3.jpg" class="d-block img-fluid">
    </div>
    <div class="carousel-item">
      <img src="Images/image4.jpg" class="d-block img-fluid">
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
</section>

	<section id="Contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Contact Our Team</h2>
					<div class="contact-content"></div>
					Our team is happy to answer your questions. Fill out the form and we will be in touch as soon as possible.
				</div>
				<div class="col-md-6">
					<input type="text" name="fname" class="input-box" placeholder="First Name"></br>
					<input type="text" name="lname" class="input-box" placeholder="Last Name"></br>
					<input type="text" name="email" class="input-box" placeholder="Email"></br>
					<textarea class="input-box" rows="5" placeholder="Message"></textarea></br>
					<button type="button" class="sendbtn">Send</button>
				</div>
			</div>
		</div>
	</section>

</body>
<footer id="footer">
	<div class="container text-center">
	<b>
		&reg;All rights reserved &copy;2019 Bus Company Limited. Developed by:DJMUST
	</b>
	</div>
</footer>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</html>