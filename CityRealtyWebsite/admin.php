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

	<title>Administrator Page</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="css/plugins/morris.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<script>
		function myFunction() {
			alert("You've successfully updated the property!");
		}
	</script>
	<script>
		function myFunction2() {
			alert("You've successfully updated your profile!");
		}
	</script>
</head>

<body>
	<?php
	if(isset($_SESSION['updatedProperty'])) {
		echo "<script type='text/javascript'>myFunction();</script>";
		unset($_SESSION['updatedProperty']);
	}
	if(isset($_SESSION['updatedAdmin'])) {
		echo "<script type='text/javascript'>myFunction()2;</script>";
		unset($_SESSION['updatedAdmin']);
	}
	?>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">Διαχείριση ακινήτων</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['id']; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="profile_admin.php"><i class="fa fa-fw fa-user"></i> Προφίλ</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="logout_inc.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li>
						<a href="#"><i class="fa fa-fw fa-edit"></i>Διαχείριση ακινήτων</a>

					</li>
					<li>
						<a href="calendar_admin.php"><i class="fa fa-fw fa-calendar"></i>Ημερολόγιο</a>
					</li>
					<li>
						<a href="newBroker.php"><i class="fa fa-users"></i> Νέος Μεσίτης</a>
					</li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="row" >
					<div class="col-lg-12">
						<h1 class="page-header">Διαχείριση ακινήτων</h1>
					</div>
				</div>
				<!-- /.row -->
				<?php
				$num_rec_per_page=21;
				if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
				$start_from = ($page-1) * $num_rec_per_page; 

				$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				mysqli_query($conn,"SET NAMES utf8");

				if(!isset($_SESSION['sql1'])) {
					$sql2 = "SELECT RealEstateNo, ARegionCode, ACity, AvailableFrom, Price, Category, RegistrationPurpose, REState FROM RealEstate";
					$result2 = mysqli_query($conn, $sql2); 
					$_SESSION['sql1'] = $sql2;
				} else {
					$sql2 = $_SESSION['sql1'];
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
					echo "<div class='col-sm-4 col-lg-4 col-md-4'>
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
							<a href='updateREForm_admin.php?reid=".$reid."' class='btn btn-primary'>Edit</a>
							<a href='publish.php?reid=".$reid."' class='btn btn-success'>"; 
								if ($row['REState']=="To be published" || $row['REState']=="Unpublished") 
									echo "Publish"; else if ($row['REState']=="Published") 
								echo "Unpublish"; echo "</a>
								<a href='delete.php?reid=".$reid."' class='btn btn-danger'>Delete</a>
							</div>
						</div>
					</div>";
				}

				echo "<div class='row text-center'><div class='col-lg-12'><ul class='pagination'>
				<li> <a style='color: #008c99' href='admin.php?page=1'>&laquo;</a></li>";  

				for ($i=1; $i<=$total_pages; $i++) { 
					if ($page==$i) {
						echo "<li class='active'><a style='color: #008c99' href='admin.php?page=".$i."'>".$i."</a></li>";
					} else {
						echo "<li><a style='color: #008c99' href='admin.php?page=".$i."'>".$i."</a></li>"; 
					}
				} 
				echo "<li><a style='color: #008c99' href='admin.php?page=$total_pages'>&raquo;</a></li></ul></div></div>"; 

				mysqli_close($conn);
				?>





			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>



</body>

</html>
