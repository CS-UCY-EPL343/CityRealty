<?php
session_start();
?>

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
				background-color: #ffffff;
			}
		</style>
		
	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-fixed-top " role="navigation" style = "background-color:#ffffff">

			<div class="container-fluid" >
				<div class="navbar-header">
					<a class="navbar-brand page-scroll" href="index.php"> <span class="light" style="color: #008c99">Home</span> </a>
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

					<?php
					if(!isset($_SESSION['id'])) {
					echo"
					<li class='dropdown'>
						<a href='javascript:void(0)' class='dropbtn' onclick='DropDownFunction()' style='color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000'><span class='glyphicon glyphicon-user' aria-hidden='true'></span> SignUp</a>
						<div class='dropdown-content' id='myDropdown'>
							<a href='#SignUp-modal' data-toggle='modal' data-target='#my-modal-lg' style='color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000'>As A Client</a>
							<a class='page-scroll' href='#ExBroker-modal' data-toggle='modal' data-target='#ExBromodal-lg' style='color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000'>As An Agent </span></a>
						</div>
					</li>
					<li>
						
						<a href='#LogIn-modal' data-toggle='modal' data-target='#my-logInmodal-sm' style='color: #008c99; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000'>Log in</a>";
						}
						else {
							echo "<li><a href='#' style='color: #2F4F4F'>" . $_SESSION['id'] . "</a></li><li>
									<a href='logout_inc.php' style='color: ##008c99'>Log Out</a>
									</li>";
						}
						?>
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

		<!--akinita-->
		<!-- Page Content -->
		<div class="container" style = "background-color:#ABABAB; border:3px solid #666666;">

			<div class="row">

				<div class="col-md-3" style = "background-color:#939393;">
					<p class="lead">
						<h1 style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">Most Popular</h1>
					</p>

					<div class="list-group" style="color: #008c99">

						<a href="#" class="list-group-item" >Property 1</a>
						<a href="#" class="list-group-item">Property 2</a>
						<a href="#" class="list-group-item">Property 3</a>
						<a href="#" class="list-group-item">Property 4</a>
						<a href="#" class="list-group-item">Property 5</a>
						<a href="#" class="list-group-item">Property 6</a>
						<a href="#" class="list-group-item">Property 7</a>
						<a href="#" class="list-group-item">Property 8</a>
						<a href="#" class="list-group-item">Property 9</a>
						<a href="#" class="list-group-item">Property 10</a>

					</div>
				</div>

				<div class="col-md-9">

					<div class="row">

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/1.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$300000</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #1</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Sale
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 3</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 5</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/7.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$400</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #2</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 1</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 2</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/8.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$600</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #3</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 1</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 2</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/2.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$200000</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #4</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Sale
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 1</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 2</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/9.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$500</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #5</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 2</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 3</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/6.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$400</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #6</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 2</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 3</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/6.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$400</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #7</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 1</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 2</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/7.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$450</h4>
									<h4><a href="propertyDetails.php"  style="color: #008c99">Property #8</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 2</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 3</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/1.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$190000</h4>
									<h4><a href="propertyDetails.php" style="color: #008c99">Property #9</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Sale
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 1</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 2</a>

									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/8.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$400</h4>
									<h4><a href="propertyDetails.php"  style="color: #008c99">Property #10</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 1</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 2</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
								<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/2.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$300000</h4>
									<h4><a href="propertyDetails.php"  style="color: #008c99">Property #11</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Sale
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 3</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 5</a>

									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
							<a href="propertyDetails.php"><img class="img-responsive img-hover img-related" src="img/properties/9.jpg" alt="image not available"></a>
								<div class="caption">
									<h4 class="pull-right">$300</h4>
									<h4><a href="propertyDetails.php"  style="color: #008c99">Property #12</a></h4>
									<p>
										Property description...
									</p>
								</div>
								<div class="ratings">

									<p class="pull-right" style="color: #008c99">
										For Rent
									</p>

									<p>
										<a style="color: #c03e62"><i class="fa fa-bath" aria-hidden="true" style="color: #c03e62"></i> 2</a>
										<a style="color: #c03e62"><i class="fa fa-bed" aria-hidden="true" style="color: #c03e62"></i> 3</a>

									</p>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- /.container -->

		<hr>

		<!-- Pagination -->
		<div class="row text-center" >
			<div class="col-lg-12" >
				<ul class="pagination" >
					<li>
						<a href="#" style="color: #008c99" >&laquo;</a>
					</li>
					<li class="active">
						<a href="#" style="color: #008c99">1</a>
					</li>
					<li>
						<a href="#" style="color: #008c99">2</a>
					</li>
					<li>
						<a href="#" style="color: #008c99">3</a>
					</li>
					<li>
						<a href="#" style="color: #008c99">4</a>
					</li>
					<li>
						<a href="#" style="color: #008c99">5</a>
					</li>
					<li>
						<a href="#" style="color: #008c99">&raquo;</a>
					</li>
				</ul>
			</div>
		</div>
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>
