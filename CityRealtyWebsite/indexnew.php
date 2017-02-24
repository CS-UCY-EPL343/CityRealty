<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>City Realty</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/stylish-portfolio.css" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

		<!-- Our CSS Styles -->
		<link href="css/home-style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--Navbar style-->
		<style type="text/css">
			.navbar {
				position: relative;
				min-height: 50px;
				margin-bottom: 1px;
				border: 1px solid transparent;
				background-color: transparent;
				width: 100%
			}
		</style>

		<!--Dropdown style-->
		<style>
			.dropdown-content {
				list-style: none;
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a {
				color: #337ab7;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
			}

			.dropdown-content a:hover {
				background-color: #f1f1f1
			}

			.dropdown:hover .dropdown-content {
				display: block;
			}
		</style>
	</head>

	<body>

		
	<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-fixed-top " role="navigation">

			<div class="container-fluid" >
				<div class="navbar-header">
					<a class="navbar-brand page-scroll" href="index.html"> <span class="light" style="color: #008c99">Home</span> </a>
				</div>

				<ul class="nav navbar-nav ">

					<li class="dropdown">
						<a class="page-scroll " href="#services" style="color: #008c99">Buy</span></a>

					</li>
					<li class="dropdown">
						<a class="page-scroll " href="#services" style="color: #008c99" >Rent </span></a>

					</li>
					<li class="dropdown">
						<a class="page-scroll " href="#services" style="color: #008c99">Sell</span></a>

					</li>
					<li>
						<a class="page-scroll " href="#services" style="color: #008c99">View Properties</a>
					</li>

					<li>
						<a class="page-scroll" href="#contact" style="color: #008c99">Contact Us</a>
					</li>

				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li>
						<a href="#" style="color: #008c99"><span class="glyphicon glyphicon-user" aria-hidden="true" ></span> Sign up</a>
					</li>
					<li>
						<a href="#" style="color: #008c99">Log in </a>
					</li>
					<li>
						<a href="#" style="color: #008c99"><img src="img/Greece.png"> Ελληνικά</a>

					</li>

					<li>
						<a href="#" style="color: #008c99"><img src="img/United Kingdom(Great Britain).png"> English</a>

					</li>

				</ul>
			</div>
			<!-- /.container -->
		</nav>
	

			<!-- Search Property ID -->
			<div class="col-md-3">
				<div class="form-group">
					<label>ID Ακινήτου:</label>
					<input type="text" class="form-control" placeholder="ID Ακινήτου" id="name">
					<p class="help-block text-danger"></p>
				</div>
			</div>

			<!-- Header -->
			<header id="top" class="header">
				<div class="page_title">
					<p>
						Empire Estates Website
					</p>
				</div>
			</header>

			<!-- Search -->

			<header class="w3-container w3-teal" style = "background: transparent;
			padding: 3em">
				<div class="row" >
					<div class="col-lg-12 text-center">
						<h3 class="section-subheading text-muted"></h3>
					</div>
				</div>
			</header>

			<section id="search" style =  "background: #fff;
			background: rgba(255,255,255,0.7); padding: 5em">
				<div class="container">
					<h1 class="section_title">Αναζήτηση</h1>
					<hr class="small">
					<div class="row">
						<div class="col-lg-12">
							<form name="sentMessage" id="contactForm" novalidate>
								<div class="row">

									<div class="col-md-6">
										<div class="form-group">
											<label>Περιοχή:</label>
											<select class="form-control">
												<option>Λευκωσία</option>
												<option>Λεμεσός</option>
												<option>Λάρνακα</option>
												<option>Πάφος</option>
												<option>Αμμόχωστος</option>
											</select>
										</div>

									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Υπνοδωμάτια:</label>
											<select class="form-control">
												<option>Στούντιο</option>
												<option>1ος υπνοδωματίου</option>
												<option>2 υπνοδωματίων</option>
												<option>3 υπνοδωματίων</option>
												<option>4 υπνοδωματίων</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Choose Type:</label>
											<select class="form-control">
												<option>Flat</option>
												<option>Land</option>
												<option>Plot</option>
												<option>Commercial</option>
											</select>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Τετραγωνικά μέτρα:</label>
												<select class="form-control">
													<option>Flat</option>
													<option>Land</option>
													<option>Plot</option>
													<option>Commercial</option>
												</select>
												<br>
											</div>
										</div>
									</div>
									<div class="col-md-10">
										<div class="form-group">
											<label>Τιμή:</label>
											<form action="action_page.php">
												<br>
												<input type="range" multiple id="a" name="a" min ="100" max="1000" step="10" value="500">
											</form>
										</div>
									</div>

									<div class="col-lg-10">
										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" value="Sale">
													Για αγορά</label>
												<label>
													<input type="checkbox" value="Rent">
													Για ενοικίαση</label>
											</div>
										</div>
									</div>

									<div class="clearfix"></div>
									<div class="col-lg-12 text-center">
										<div id="success"></div>
										<button type="submit" class="btn btn-xl"style = "background-color:#D3D3D3  border: 2px solid black; font-weight: bold;">
											Αναζήτηση
										</button>
									</div>
								</div>
							</form>

						</div>
					</div>
			</section>

			<footer class="w3-container w3-teal " style = "background: transparent;
			padding: 2em">
				<div class="row" >

				</div>
			</footer>

			<!-- /.Search -->

			<!-- Services -->
			<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
			<section id="services" class="services bg-primary">
				<div class="container">
					<div class="row text-center">
						<div class="col-lg-10 col-lg-offset-1">
							<h2>Our Services</h2>
							<hr class="small">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-cloud fa-stack-1x text-primary"></i> </span>
										<h4><strong>Service Name</strong></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</p>
										<a href="#" class="btn btn-light">Learn More</a>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-compass fa-stack-1x text-primary"></i> </span>
										<h4><strong>Service Name</strong></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</p>
										<a href="#" class="btn btn-light">Learn More</a>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-flask fa-stack-1x text-primary"></i> </span>
										<h4><strong>Service Name</strong></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</p>
										<a href="#" class="btn btn-light">Learn More</a>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-shield fa-stack-1x text-primary"></i> </span>
										<h4><strong>Service Name</strong></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</p>
										<a href="#" class="btn btn-light">Learn More</a>
									</div>
								</div>
							</div>
							<!-- /.row (nested) -->
						</div>
						<!-- /.col-lg-10 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>

			<!-- Map -->
			<section id="contact" class="map">
				<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="100" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417906.1679578008!2d32.79202249830512!3d35.08443270516032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1767ca494d55%3A0xbfa61172e2b992ff!2zzpvOtc-FzrrPic-Dzq_OsSwgzprPjc-Az4HOv8-C!5e0!3m2!1sel!2sus!4v1479281118979"></iframe>
				<br />
				<small> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417906.1679578008!2d32.79202249830512!3d35.08443270516032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1767ca494d55%3A0xbfa61172e2b992ff!2zzpvOtc-FzrrPic-Dzq_OsSwgzprPjc-Az4HOv8-C!5e0!3m2!1sel!2sus!4v1479281118979"></a> </small>
				</iframe>
			</section>
			<p>
				<br>
				<br>
				<br>
			</p>

			<!-- Contact Section -->
			<section id="contact">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">Contact Us</h2>
							<h3 class="section-subheading text-muted"></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<form name="sentMessage" id="contactForm" novalidate>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter your Name *" id="name" required data-validation-required-message="Please enter your name.">
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Enter your Email *" id="email" required data-validation-required-message="Please enter your email address.">
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group">
											<input type="tel" class="form-control" placeholder="Enter your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<textarea class="form-control" placeholder="Enter your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-lg-12 text-center">
										<div id="success"></div>
										<button type="submit" class="btn btn-xl">
											Send Message
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 text-center">
							<h4><strong>Start Bootstrap</strong></h4>
							<p>
								3481 Melrose Place
								<br>
								Beverly Hills, CA 90210
							</p>
							<ul class="list-unstyled">
								<li>
									<i class="fa fa-phone fa-fw"></i> (123) 456-7890
								</li>
								<li>
									<i class="fa fa-envelope-o fa-fw"></i><a href="mailto:name@example.com">name@example.com</a>
								</li>
							</ul>
							<br>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
								</li>

							</ul>
							<hr class="small">
							<p class="text-muted">
								Copyright &copy; EPL361_2016_TEAM_XX
							</p>
						</div>
					</div>
				</div>
				<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
			</footer>

	</body>

</html>
