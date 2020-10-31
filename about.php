<!DOCTYPE html>
<html>
	<head>
		<!--CREATED BY CHIRANTAN BANERJEE FROM TEDICTED MEDIA LABS -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SS CONSULTANCY</title>
		<meta name="keywords" content="Tax consultancy in balasore,Gst balasore,best tax consultancy firm in
		odisha,best tax consultancy firm in balasore,gst,gst balasore,tax service"/>
		<!-- Style Error -->
		<style>
		.error {color: #FF0000;}
		</style>
		<?php include 'links.php' ?>
	</head>
	<body>
		<!--START OF TOP NAVIGATION-->
		<header class="header-area header-sticky">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="main-nav">
							
							<a href="index.php" class="logo">
								SS CONSULTANCY
							</a>
							
							<!-- NAV LINK-->
							<ul class="nav">
								<li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
								<li class="scroll-to-section"><a href="index.php#service">Services</a></li>
								<li class="scroll-to-section"><a href="index.php#notice">Notice</a></li>
								<li class="submenu">
									<a href="javascript:;">About</a>
									<ul>
										<li><a href="about.php">More info</a></li>
										<li><a href="index.php#review">Reviews</a></li>
										<li><a href="index.php#team">Our team</a></li>
									</ul>
								</li>
								<li class="scroll-to-section"><a href="index.php#contact">Contact Us</a></li>
							</ul>
							<a class='menu-trigger'>
								<span>Menu</span>
							</a>
							
						</nav>
					</div>
				</div>
			</div>
		</header>
		
		<!--PAGE CONTENT-->
		<div class="page-heading header-text">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>WHO WE ARE</h1>
					</div>
				</div>
			</div>
		</div>
		<!--END OF TOP NAVIGATION-->
		<!--HEADING-->
		<section>
			<div class="container-fluid">
				<h1 class="text-center text-capitalize text-danger pt-5">WHO WE ARE</h1>
				<hr class="w-25 mx-auto">
				
				<div class="row mb-5">
					<div class="col-lg-6 col-md-6 col-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="images/ss4.jpeg" alt="SS CONSULTANCY IMAGE">
									<div class="carousel-caption">
										<h3>SS</h3>
										<p>CONSULTANCY1</p>
									</div>
								</div>
								<div class="item">
									<img src="images/ss3.jpeg" alt="SS CONSULTANCY IMAGE">
									<div class="carousel-caption">
										<h3>SS</h3>
										<p>CONSULTANCY2</p>
									</div>
								</div>
								<div class="item">
									<img src="images/ss1.jpeg" alt="SS CONSULTANCY IMAGE">
									<div class="carousel-caption">
										<h3>SS</h3>
										<p>CONSULTANCY3</p>
									</div>
								</div>
								<div class="item">
									<img src="images/ss2.jpeg" alt="SS CONSULTANCY IMAGE">
									<div class="carousel-caption">
										<h3>SS</h3>
										<p>CONSULTANCY4</p>
									</div>
								</div>
							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<p class="mt-5 font-italic" style="font-size: 25px">
							<strong>Do you require advice and assistance with your tax returns or any other aspect of personal income tax?</strong> We are one of the best tax consultancy firm in odisha located in the sand city balasore.
							We can help with all aspects of your financial needs, from income tax to property tax, from starting up a new business to mergers and acquisitions – we have the knowledge and experience to guide you financially, every step of the way.We cover almost the entire range of tax advisory services.We digitally store all our records.
						</p>
					</div>
				</div>
			</section>
			<!--HEADING ENDS-->
			<!--CONTACT SECTION STARTS HERE-->
			<section class="contact" id="contact">
				<div class="container">
					<div class="section-title text-center mt-5">
						<h2>LEAVE A MESSAGE FOR US</h2>
						<p>Feel free to contact us</p>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-md-12">
									<div class="contact-box">
										<i class="fas fa-address-book"></i>
										<h3>Address</h3>
										<p>Balasore 756001</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="contact-box mt-4">
										<i class="fas fa-envelope"></i>
										<h3>Email</h3>
										<p>ssconsultancy1968@gmail.com</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="contact-box mt-4">
										<i class="fas fa-phone"></i>
										<h3>Call<h3>
										<p id="call">+91 7205660353</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Including form validation file -->
		                    <?php include 'validation.php' ?>
						<div class="col-lg-6">
							 <p><span class="error">* Required field(s)</span></p>
							<form action='#contact' method='POST'>
								<div class="form-row">
									<div class="col-md-6 form-group">
										<input type="text" name="user_name" class="form-control"
										id="name" placeholder="Name">
										<span class="error">* <?php echo $nameErr;?></span><br>
									</div>
									<div class="col-md-6 form-group">
										<input type="number" name="user_mobile" class="form-control"
										id="number" placeholder="Mobile no.">
										<span class="error">* <?php echo $mobileErr;?></span><br>
									</div>
								</div>
								<div class="form-group">
									<input type="email" name="user_email" class="form-control"
									id="email" placeholder="Email">
									<span class="error">* <?php echo $emailErr;?></span><br>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="Message" rows="5" placeholder="Message"></textarea>
								</div>
								<div class="text-center">
									<button type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!--CONTACT SECTION ENDS HERE-->
			<!-- FOOTER SECTION STARTS HERE-->
			<footer class="footer py-4 mt-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-4 text-lg-left text">
							Copyright &copy;SS CONSULTANCY 2020
						</div>
						<div class="col-lg-4 my-3 my-lg-0">
							<a href="#" class="btn btn-back btn-social mx-2">
								<i class="fab fa-facebook facebook"></i>
							</a>
							<a href="#" class="btn btn-back btn-social mx-2">
								<i class="fab fa-twitter tweet"></i>
							</a>
							<a href="#" class="btn btn-back btn-social mx-2">
								<i class="fas fa-envelope email"></i>
							</a>
						</div>
						<div class="col-lg-4 text-lg-right">
							<a class="mr-3 text">Designed by Tedicted Media Labs</a>
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER SECTION ENDS HERE-->
		</body>
	</html>
	<?php include 'database.php' ?>