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

	<title>About Empire Estate</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

	<!--Navbar style-->
	<style type="text/css">
		.containerwithcheckboxes { border:2px solid #ccc; width:1150px; height: 100px; overflow-y: scroll; }	
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
		.ui-page {
			background-color: transparent;
		}
		.ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper {
			text-shadow: none;
		}
		
	</style>

	<script>
		function myFunction() {
			alert("Username or email already used!");
		}
		function myFunction2() {
			alert("Your username or password is incorrect!");
		}
		function myFunction3() {
			alert("You have successfully signed up!");
		}
	</script>

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top " role="navigation">

		<div class="container-fluid" >

			<ul class="nav navbar-nav ">
				<li>
					<a class="page-scroll" href="index.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/logo.png"></span> </a>	
				</li>
				<li>
					<a class="page-scroll" href="index.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/home2.png">Home</span> </a>
				</li>

				<li>
					<a class="page-scroll" href="sale.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/sale22.png">Sale</span></a>

				</li>
				<li>
					<a class="page-scroll " href="rent.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/rent22.png">Rent </span></a>

				</li>
				<li>
					<a class="page-scroll " href="sell.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/sell22.png">Sell</span></a>

				</li>
				<li>
					<a class="page-scroll " href="index.php#search" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/search2.png">Search</a>
				</li>

				<li>
					<a class="page-scroll" href="index.php#contact" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/contactUs2.png">Contact Us</a>
				</li>

				<li>
					<a class="page-scroll" href="#" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/group-chat.png"> About Us</a>
				</li>

				<?php
				if(isset($_SESSION['errormessage'])) {
					echo "<script type='text/javascript'>myFunction();</script>";
					unset($_SESSION['errormessage']);
				}
				if(isset($_SESSION['errorlogin'])) {
					echo "<script type='text/javascript'>myFunction2();</script>";
					unset($_SESSION['errorlogin']);
				}						
				if(isset($_SESSION['signedup'])) {
					echo "<script type='text/javascript'>myFunction3();</script>";
					unset($_SESSION['signedup']);
				}
				?>
			</ul>

			<ul class="nav navbar-nav navbar-right">

				<?php
				if(!isset($_SESSION['id'])) {
					echo"
					<li><a href='#SignUp-modal' data-toggle='modal' data-target='#my-modal-lg' style='color: #FFCC00'>SignUp</a></li>
					<li><a href='#LogIn-modal' data-toggle='modal' data-target='#my-logInmodal-sm' style='color: #FFCC00'>Log in</a></li>";
					}
					else {
						echo "<li><a href='#' style='color: #FFCC00'>" . $_SESSION['id'] . "</a></li><li>
						<a href='logout_inc.php' style='color: #FFCC00'>Log Out</a>
					</li>";
				}
				?>
				<li>
					<a href="#" style="color: #FFCC00"><img src="img/menu/Greece.png"> Ελληνικά</a>
				</li>

				<li>
					<a href="#" style="color: #FFCC00"><img src="img/menu/United Kingdom(Great Britain).png"> English</a>
				</li>
			</ul>
		</div>
		<!-- /.container -->
	</nav>
	<section id="services" class="services bg-primary"style = "background: #fff; background: rgba(255,255,255,0.7);">
		<div class="container">

			<div class="row text-center">

				<div class="col-lg-10 col-lg-offset-1">
					<h1 style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">Terms & Conditions of Empire Estates</h1>

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
	<footer>
		<section id="contact" style =  "background: #fff; background: rgba(255,255,255,0.7); padding: 3em;">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<p>
							Αγχιαλού 11
							<br>
							Λευκωσία,Αγίοι Ομολογητές,Κύπρος
						</p>
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-phone fa-fw"></i> 97-900809
							</li>
							<li>
								<i class="fa fa-envelope-o fa-fw" style="color: #000000"></i><a href="mailto:marygeorgiou85@gmail.com " style="color: #000000">marygeorgiou85@gmail.com</a>
							</li>
						</ul>
						<br>
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com/" title="Facebook"><i class="fa fa-facebook fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://twitter.com/" title="Twitter"><i class="fa fa-twitter fa-fw fa-3x" style="color: #E4B006"></i></a>
							</li>
							<li>
								<a href="https://gr.pinterest.com/" title="Pinterest"><i class="fa fa-pinterest fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://plus.google.com/collections/featured" title="Google+"><i class="fa fa-google-plus fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/" title="Instagram"><i class="fa fa-instagram fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://www.tumblr.com/" title="Tumblr"><i class="fa fa-tumblr fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>

						</ul>
						<hr class="small">
						<p class="text-muted" style="color: #FFFFFF">
							<a style="color: #FFFFFF" href="termsconditions.php">Terms & Conditions</a> | 
							<a style="color: #FFFFFF" href="about.php">About Us</a>
						</p>
						<p class="text-muted" style="color: #FFFFFF">
							Copyright &copy; University of Cyprus
						</p>
					</div>
				</div>
			</div>

			<a id="to-top" href="#top" class="btn btn-circle"><i class="fa fa-angle-double-up fa-fw fa-1x"></i></a>
		</section>
	</footer>
	<!-----------------------------------signUp---------------------------------->
	<div class="modal my-modal-lg" id="my-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">


				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						×
					</button>
					<h3>Please Sign Up</h3>
				</div>

				<div class="modal-body">
					<form role="form" action="signup_inc.php" method="POST">

						<div class="row">
							<small>&nbsp&nbsp&nbsp&nbsp&nbspYOUR NAME</small>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" autocomplete="on">
									<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" autocomplete="on">
								</div>
							</div>
						</div>
						<p></p>
						<small>CHOOSE A USERNAME</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<div class="form-group">
							<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" required>
						</div>
						<p></p>
						<small>EMAIL ADDRESS</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<br>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="e.g. example@domain.com" tabindex="4" autocomplete="on" size="47" required>
						</div>
						<div class="row">
							<p></p>
							<small>&nbsp&nbsp&nbsp&nbsp&nbspCREATE A PASSWORD</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required pattern=".{6,}">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-xs-8 col-sm-9 col-md-9">
								<p>
									<span class="button-checkbox">
										<input type="checkbox" name="t_and_c" id="t_and_c"  value="1" required>
									</span>
									<i> I agree to the <a href="http://www.omegarealestate.gr/en/" data-toggle="modal" data-target="#t_and_c_m"> Terms and Conditions</a> set out by this site, including the Cookie Use. </i>
								</p>
							</div>
						</div>

						<!--</form>-->
					</div>

					<div class="modal-footer">
						<div class="col-xs-12 col-md-6">
							<input type="submit" value="Sign Up" class="btn btn-primary btn-block btn-lg" tabindex="7">
						</div>
						<div class="col-xs-12 col-md-6">
							<input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg" tabindex="7">

							<!--<input type="reset" value="Reset" class="btn btn-default btn-lg" tabindex="7">-->
						</div>
					</div>
				</form>
				<div class="panel-footer">
					Already a Member? <a href="#LogIn-modal" data-toggle="modal" data-target="#my-logInmodal-sm">Sign in here</a>
				</div>
			</div>
		</div>
	</div>
	<!----------------------------end of signUp---------------------------------->

	<!-----------------------------------Log In---------------------------------->

	<div class="modal my-logInmodal-sm" id="my-logInmodal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						×
					</button>
					<h3>Log In</h3>
				</div>

				<div class="modal-body">
					<form id="MyForm" class="form-horizontal" role="form" action="login_inc.php" method="POST">
						<div class="form-group">
							<div class="col-sm-9">
								<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
							</div>
						</div>
					<div class="modal-footer">
						<div class="col-xs-12 col-md-6">
							<input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" tabindex="7">
						</div>
						<div class="col-xs-12 col-md-6">
							<input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg" tabindex="7">
						</div>
					</div>
				</form>
				<div class="panel-footer">
					No account? <a href="#SignUp-modal" data-toggle="modal" data-target="#my-modal-lg">Sign up now</a>
				</div>
			</div>
		</div>
	</div>
	<!----------------------------end of LogIn---------------------------------->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script>
		<!-- Scrolls to the selected menu item on the page -->
		$(function() {
			$('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop : target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		<-- #to-top button appears after scrolling -->
		var fixed = false;
		$(document).scroll(function() {
			if ($(this).scrollTop() > 250) {
				if (!fixed) {
					fixed = true;
					$('#to-top').show("slow", function() {
						$('#to-top').css({
							position : 'fixed',
							display : 'block'
						});
					});
				}
			} else {
				if (fixed) {
					fixed = false;
					$('#to-top').hide("slow", function() {
						$('#to-top').css({
							display : 'none'
						});
					});
				}
			}
		});
		var onMapMouseleaveHandler = function(event) {
			var that = $(this);
			that.on('click', onMapClickHandler);
			that.off('mouseleave', onMapMouseleaveHandler);
			that.find('iframe').css("pointer-events", "none");
		};
		var onMapClickHandler = function(event) {
			var that = $(this);
			<!-- Disable the click handler until the user leaves the map area -->
			that.off('click', onMapClickHandler);
			<!-- Enable scrolling zoom -->
			that.find('iframe').css("pointer-events", "auto");
			<!-- Handle the mouse leave event -->
			that.on('mouseleave', onMapMouseleaveHandler);
		};
		<!-- Enable map zooming with mouse scroll when the user clicks the map -->
		$('.map').on('click', onMapClickHandler);
	</script>

	<!--Password check-->

	<script>
		var passwordSu = document.getElementById("password"),
		confirm_passwordSu = document.getElementById("password_confirmation");

		function validatePassword() {
			if (passwordSu.value != confirm_passwordSu.value) {
				confirm_passwordSu.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_passwordSu.setCustomValidity('');
			}
		}

		passwordSu.onchange = validatePassword;
		confirm_passwordSu.onkeyup = validatePassword;

		var passwordSb = document.getElementById("password2"),
		confirm_passwordSb = document.getElementById("password_confirmation2");

		function validatePasswordSb() {
			if (passwordSb.value != confirm_passwordSb.value) {
				confirm_passwordSb.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_passwordSb.setCustomValidity('');
			}
		}

		passwordSb.onchange = validatePasswordSb;
		confirm_passwordSb.onkeyup = validatePasswordSb;
	</script>
	<!-- Drop Down Menu Sign Up -->
	<script>
		function DropDownFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

	</script>


</body>
