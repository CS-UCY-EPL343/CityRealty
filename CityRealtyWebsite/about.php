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

		<title>About City Realty</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

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
				background-color: transparent;
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
				background-color: #ffebcd
			}
			.dropdown:hover .dropdown-content {
				display: block;
			}
			
			.btn-circle {
				width: 49px;
				height: 49px;
				text-align: center;
				padding: 5px 0;
				font-size: 20px;
				line-height: 2.00;
				border-radius: 30px;
				border: 1px solid #999999;
				background-color: #EEEEEE;
				color: #008c99;
			}
		</style>

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-fixed-top " role="navigation">

			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand page-scroll" href="index.php"> <span class="light" style="color: #008c99 ; font-weight: bold; font-size: 120%;text-shadow: 1px 1px 1px #000000">Home</span> </a>
				</div>

				<ul class="nav navbar-nav ">

					<li class="dropdown">
						<a class="page-scroll " href="index.php#services" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000">Buy</span></a>

					</li>
					<li class="dropdown">
						<a class="page-scroll " href="index.php#services" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000" >Rent </span></a>

					</li>
					<li class="dropdown">
						<a class="page-scroll " href="index.php#ExBroker-modal" data-toggle="modal" data-target="#ExBromodal-lg" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000">Sell</span></a>

					</li>
					<li>
						<a class="page-scroll " href="propertyList.php" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000">View Properties</a>
					</li>
					
					<li>
						<a class="page-scroll" href="index.php#search" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000">Search Property</a>
					</li>
					
					<li>
						<a class="page-scroll" href="index.php#contact" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000">Contact Us</a>
					</li>
					
					<li>
						<a class="page-scroll" href="about.php" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000">About</a>
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
						<a href="#" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000"><img src="img/Greece.png"> ????????</a>

					</li>

					<li>
						<a href="#" style="color: #008c99 ; font-weight: bold; font-size: 100%;text-shadow: 1px 1px 1px #000000"><img src="img/United Kingdom(Great Britain).png"> English</a>

					</li>

				</ul>
			</div>
			<!-- /.container -->
		</nav>
		
		<!-- Services -->
		<section id="services" class="services bg-primary"style = "background: #fff; background: rgba(255,255,255,0.7);">
			<div class="container">

				<div class="row text-center">
						
					<div class="col-lg-10 col-lg-offset-1">
						<h1 style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">About City Realty Cyprus</h1>
						
						<hr class="small">
						
						
						
						<div class="row">
							
							<br>
							<p style="color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ullamcorper nulla. Nunc ullamcorper mollis neque id sodales. Nulla egestas erat a tempor eleifend. Mauris vel malesuada odio, sed blandit eros. Ut vitae faucibus purus. Aenean sollicitudin ex est, et pretium nibh dictum nec. Nulla vitae eros non nisl convallis mollis. Cras ligula ligula, egestas a semper non, gravida vel nulla.</p>
							<br>
							<p style="color:black">Nulla sit amet velit in lacus elementum suscipit quis eget leo. Cras volutpat finibus mi, vel egestas tortor finibus eu. Vestibulum venenatis gravida mi vitae convallis. Donec euismod dui odio, sed vulputate leo vestibulum a. Quisque congue eleifend dignissim. Aliquam erat volutpat. Nulla molestie tristique ex eu eleifend. Integer auctor eros et dui aliquet, sed consequat nunc sollicitudin. Donec et risus velit. Integer convallis lacus elit, pulvinar mattis ligula posuere id. Nullam a aliquam nulla. Suspendisse scelerisque viverra erat, eget gravida turpis maximus sed. Nullam pretium ornare interdum. Ut congue tincidunt nisl, in venenatis justo auctor vel. Proin iaculis pulvinar pretium.</p>
		  						
						</div>
						<!-- /.row (nested) -->
					</div>
					<!-- /.col-lg-10 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		
		<!-- Footer -->
		<footer >
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<h4><strong style="color: #FFFFFF">Empire Estates</strong></h4>
						<p style="color: #FFFFFF">
							????a??? 11
							<br style="color: #FFFFFF">
							?e???s?a,????? ?µ?????t??,??p???
						</p>
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-phone fa-fw"></i> 97-900809
							</li>
							<li>
								<i class="fa fa-envelope-o fa-fw" style="color: #FFFFFF"></i><a href="mailto:marygeorgiou85@gmail.com " style="color: #FFFFFF">marygeorgiou85@gmail.com</a>
							</li>
						</ul>
						<br>
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com/" title="Facebook"><i class="fa fa-facebook fa-fw fa-3x " style="color: #008c99 " ></i></a>
							</li>
							<li>
								<a href="https://twitter.com/" title="Twitter"><i class="fa fa-twitter fa-fw fa-3x" style="color: #008c99"></i></a>
							</li>
							<li>
								<a href="https://gr.pinterest.com/" title="Pinterest"><i class="fa fa-pinterest fa-fw fa-3x " style="color: #008c99 " ></i></a>
							</li>
							<li>
								<a href="https://plus.google.com/collections/featured" title="Google+"><i class="fa fa-google-plus fa-fw fa-3x " style="color: #008c99 " ></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/" title="Instagram"><i class="fa fa-instagram fa-fw fa-3x " style="color: #008c99 " ></i></a>
							</li>
							<li>
								<a href="https://www.tumblr.com/" title="Tumblr"><i class="fa fa-tumblr fa-fw fa-3x " style="color: #008c99 " ></i></a>
							</li>

						</ul>
						<hr class="small">
						<p class="text-muted" style="color: #FFFFFF">
							Copyright &copy; University of Cyprus
						</p>
					</div>
				</div>
			</div>

			<a id="to-top" href="#top" class="btn btn-circle"><i class="fa fa-angle-double-up fa-fw fa-1x"></i></a>
		</footer>


	</body>
