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

	<title>Empire Estate</title>

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
					<a class="page-scroll" href="about.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/group-chat.png"> About Us</a>
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
	
	<!-- Search Property ID -->
	<div class="col-md-2">
		<form action="propertyList.php" method="POST">
			<div class="form-group">
				<label>ID Ακινήτου:</label>
				<input type="text" name="REid" class="form-control" placeholder="ID Ακινήτου" id="REid">
				<input type="submit" style="position: absolute; left: -9999px"/>
				<p class="help-block text-danger"></p>
			</div>
		</form>
	</div>

					<?php
					$num_rec_per_page=10;
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page; 

					$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					mysqli_query($conn,"SET NAMES utf8");
          
          echo "<div style='padding-top:80px'>
	<div class='container' style = 'background: rgba(255,255,255,0.5); border:3px solid #666666; width: 85%'>

		<div class='row'>

			<div class='col-md-3' style = 'background-color:#939393;'>
				<p class='lead'>
					<h1 style='color: #fdc029; text-align: center; 1px 1px 1px #000000;'>Δημοφιλέστερα</h1>
				</p>

				<div class='list-group'>";                   
          
          $sqlpopular = "SELECT RealEstateNo, Category, ACity, ARegionCode, AvailableFrom, Price, RegistrationPurpose FROM RealEstate WHERE REState='Published' ORDER BY TimesViewed DESC LIMIT 5";
          $resultpopular = mysqli_query($conn, $sqlpopular);
          while($rowpopular = mysqli_fetch_assoc($resultpopular)) {
          	$REid = $rowpopular['RealEstateNo'];
            if (($rowpopular['Category']=="Κατοικία") || ($rowpopular['Category']=="Επαγγελματικός χώρος") || ($rowpopular['Category']=="Ξενοδοχείο")) {
								  $sqlpopular2 =  "SELECT B.NumOfRooms, B.NumOfWC FROM RealEstate RE, Building B WHERE RE.RealEstateNo=$REid AND RE.RealEstateNo=B.RealEstateNo";
								  $sqlpopular4 = "SELECT * FROM BDetails WHERE RealEstateNo=$REid AND DetailNo=11";
						$resultpopular4 = mysqli_query($conn, $sqlpopular4); 
							}
						if ($rowpopular['ACity']=="Λευκωσία") {
							$Region = $rowpopular['ARegionCode'];
							$sqlpopular3 =  "SELECT RegionName FROM CityNicosia WHERE RegionCode=$Region";
						}
						elseif ($rowpopular['ACity']=="Πάφος") {
							$Region = $rowpopular['ARegionCode'];
							$sqlpopular3 =  "SELECT RegionName FROM CityPafos WHERE RegionCode=$Region";
						}
						elseif ($rowpopular['ACity']=="Λάρνακα") {
							$Region = $rowpopular['ARegionCode'];
							$sqlpopular3 =  "SELECT RegionName FROM CityLarnaca WHERE RegionCode=$Region";
						}
						elseif ($rowpopular['ACity']=="Λεμεσός") {
							$Region = $rowpopular['ARegionCode'];
							$sqlpopular3 =  "SELECT RegionName FROM CityLimassol WHERE RegionCode=$Region";
						}
						elseif ($rowpopular['ACity']=="Αμμόχωστος") {
							$Region = $rowpopular['ARegionCode'];
							$sqlpopular3 =  "SELECT RegionName FROM CityFamagusta WHERE RegionCode=$Region";
						}
						$resultpopular2 = mysqli_query($conn, $sqlpopular2); 
						$rowpopular2=mysqli_fetch_assoc($resultpopular2);
            $resultpopular3 = mysqli_query($conn, $sqlpopular3); 
						$rowpopular3=mysqli_fetch_assoc($resultpopular3);
            
            echo "<div class='thumbnailPopular'>
						<a href='propertyDetails.php?reid=".$REid."'><img class='img-responsive img-hover img-related' src='img/properties/8.jpg' alt='image not available'></a>
						<div class='caption'>
							<h4 class='pull-right'>€".$rowpopular['Price']."</h4>
							<h4><a href='propertyDetails.php?reid=".$REid."'>Κωδικός: ".$rowpopular['RealEstateNo']."</a></h4>
						<p>
									".$rowpopular3['RegionName'].", ".$rowpopular['ACity']."
								</p>
								<p>
									Διαθέσιμο από: ".$rowpopular['AvailableFrom']."</p>
						</div>
						<div class='ratings'>

							<p>
								".$rowpopular['RegistrationPurpose']."
							</p>";
              if (($rowpopular['Category']=="Κατοικία") || ($rowpopular['Category']=="Επαγγελματικός χώρος") || ($rowpopular['Category']=="Ξενοδοχείο")) {
								echo "<p>".$rowpopular['Category']." με ".$rowpopular2['NumOfRooms']." <i class='fa fa-bed' style='color: #c03e62; font-size:24px'></i> ".$rowpopular2['NumOfWC']." <i class='fa fa-bath' style='color: #c03e62; font-size:24px'></i>";
									if (mysqli_num_rows($resultpopular4)==0)
									echo " Όχι ";
								else
									echo " Ναι ";
								echo"<i class='fa fa-paw' style='color: #c03e62; font-size:22px'></i></p>";  
              }
              else {
                echo "<p>".$rowpopular['Category']."</p>";
              }
							echo "
						</div>
					</div>";
            }
                   
            echo "</div></div>	<div class='col-md-8'>";

					if(!isset($_SESSION['sql2'])) {
						$sql2 = "SELECT RealEstateNo, ARegionCode, ACity, AvailableFrom, Price, Category, RegistrationPurpose, REState FROM RealEstate WHERE RegistrationPurpose='Πώληση'";
						$result2 = mysqli_query($conn, $sql2); 
						$_SESSION['sql2'] = $sql2;
					} else {
						$sql2 = $_SESSION['sql2'];
						$result2 = mysqli_query($conn, $sql2); 
					}
					$total_records = mysqli_num_rows($result2);
					$sql2 = $sql2 . " LIMIT $start_from, $num_rec_per_page"; 

					$total_pages = ceil($total_records / $num_rec_per_page); 
					$result2 = mysqli_query($conn, $sql2); 

					while($row=mysqli_fetch_assoc($result2)) {
						if ($row['ACity']=="Λευκωσία") {
							$Region = $row['ARegionCode'];
							$sql3 =  "SELECT RegionName FROM CityNicosia WHERE RegionCode=$Region";
						}
						elseif ($row['ACity']=="Πάφος") {
							$Region = $row['ARegionCode'];
							$sql3 =  "SELECT RegionName FROM CityPafos WHERE RegionCode=$Region";
						}
						elseif ($row['ACity']=="Λάρνακα") {
							$Region = $row['ARegionCode'];
							$sql3 =  "SELECT RegionName FROM CityLarnaca WHERE RegionCode=$Region";
						}
						elseif ($row['ACity']=="Λεμεσός") {
							$Region = $row['ARegionCode'];
							$sql3 =  "SELECT RegionName FROM CityLimassol WHERE RegionCode=$Region";
						}
						elseif ($row['ACity']=="Αμμόχωστος") {
							$Region = $row['ARegionCode'];
							$sql3 =  "SELECT RegionName FROM CityFamagusta WHERE RegionCode=$Region";
						}
						$result3 = mysqli_query($conn, $sql3); 
						$row3=mysqli_fetch_assoc($result3);
						$reid = $row['RealEstateNo'];
						echo "<div class='col-md-6'>
						<div class='thumbnail'>
							<a href='propertyDetails.php'><img class='img-responsive img-hover img-related' src='img/properties/3.jpg' alt='image not available'></a>
							<div class='caption'>
								<h3 class='pull-right'>€".$row['Price']."</h3>
								<h3><a href='propertyDetails.php?reid=".$reid."' style='color: #171820'>Κωδικός: ".$row['RealEstateNo']."</a></h3>
								<p>
									".$row3['RegionName'].", ".$row['ACity']."
								</p>
								<p>
									Διαθέσιμο από: ".$row['AvailableFrom']."</p>
								</div>
								<div class='ratings'>
									<p style='font-size:24px' style='color: #008c99'>".$row['RegistrationPurpose']."</p><h3> "; 
										if (($row['Category']=="Κατοικία") || ($row['Category']=="Επαγγελματικός χώρος") || ($row['Category']=="Ξενοδοχείο")) {
											$sql4 =  "SELECT B.NumOfRooms, B.NumOfWC FROM RealEstate RE, Building B WHERE RE.RealEstateNo=$reid AND RE.RealEstateNo=B.RealEstateNo";
											$result4 = mysqli_query($conn, $sql4); 
											$row4=mysqli_fetch_assoc($result4);
											$sql5 = "SELECT * FROM BDetails WHERE RealEstateNo=$reid AND DetailNo=11";
									$result5 = mysqli_query($conn, $sql5);
											echo $row['Category']." με ".$row4['NumOfRooms']." <i class='fa fa-bed' style='color: #c03e62; font-size:24px'></i> ".$row4['NumOfWC']." <i class='fa fa-bath' style='color: #c03e62; font-size:24px'></i>"; 
											if (mysqli_num_rows($result5)==0)
										echo " Όχι ";
									else
										echo " Ναι ";
									echo "<i class='fa fa-paw' style='color: #c03e62; font-size:22px'></i> ";
                      } 
											else {
												echo $row['Category'];
											} 
											echo "</h3>
										</p>
									</div>
								</div>
							</div>";
						}

						echo "<div class='row text-center'><div class='col-lg-12'><ul class='pagination'>
						<li> <a style='color: #008c99' href='sale.php?page=1'>&laquo;</a></li>";  

						for ($i=1; $i<=$total_pages; $i++) { 
							if ($page==$i) {
								echo "<li class='active'><a style='color: #008c99' href='sale.php?page=".$i."'>".$i."</a></li>";
							} else {
								echo "<li><a style='color: #008c99' href='sale.php?page=".$i."'>".$i."</a></li>"; 
							}
						} 
						echo "<li><a style='color: #008c99' href='sale.php?page=$total_pages'>&raquo;</a></li></ul></div></div>";  

						mysqli_close($conn);
						?>
					</div>
				</div>
			</div>
		</div>
</div>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

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
						</div>

						<div class="modal-footer">
							<div class="col-xs-12 col-md-6">
								<input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" tabindex="7">
							</div>
							<div class="col-xs-12 col-md-6">
								<input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg" tabindex="7">

								<!--<input type="reset" value="Reset" class="btn btn-default btn-lg" tabindex="7">-->
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

		<!----------------------------Sign Up Broker---------------------------------->
		<div class="modal my-ExBromodal-lg" id="ExBromodal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							×
						</button>
						<h3>Sign Up As A Broker</h3>
					</div>

					<div class="modal-body">
						<form role="form" action="signup2_inc.php" method="POST">
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
							<small>GENDER</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<p></p>
							<div class="col-md-8 ">
								<label>
									<input type="radio" name="gender" value="0" required>
									Male
								</label>
								<label>
									<input type="radio" name="gender" value="1" required>
									Female 
								</label>
							</div>
							<p>
								<br>
							</p>
							<small>DATE OF BIRTH	:</small>
							<select class="form-control" name="month">
								<option value="01">January</option>
								<option value="02">February</option>
								<option value="03">March</option>
								<option value="04">April</option>
								<option value="05">May</option>
								<option value="06">June</option>
								<option value="07">July</option>
								<option value="08">August</option>
								<option value="09">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
								<option selected value="">---</option>
							</select>
							<select name="day" class="form-control">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option selected value="">--</option>
							</select>
							<select name="year" class="form-control">
								<option value="2012">2016</option>
								<option value="2012">2015</option>
								<option value="2012">2014</option>
								<option value="2012">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option selected value="">---</option>
							</select>

							<p></p>
							<small>EMAIL ADDRESS</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<br>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="e.g. example@domain.com" tabindex="4" autocomplete="on" size="47" required>
							</div>
							<p></p>
							<small>PHONE</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<br>
							<div class="form-group">
								<input type="tel" name="phone" id="phone" class="form-control input-lg" placeholder="Phone Number" tabindex="4" required>
							</div>
							<div class="row">
								<p></p>
								<small>&nbsp&nbsp&nbsp&nbsp&nbspCREATE A PASSWORD</small>
								<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
								<br>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password" tabindex="5" required pattern=".{6,}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password_confirmation2" id="password_confirmation2" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-xs-8 col-sm-9 col-md-9">
									<p>
										<span class="button-checkbox">
											<input type="checkbox" name="t_and_c" id="t_and_c"  value="1" required>
										</span>
										<i> I agree to the <a href="http://www.omegarealestate.gr/en/" data-toggle="modal" data-target="#t_and_c_m"> Terms and Conditions</a> set out by this site, including the Cookie Use. 
										</i>
									</p>
								</div>
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
					</div>
				</div>
			</div>
		</div>
		<!----------------------------end of Sign Up Broker---------------------------------->
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

	</html>
