<?php session_start(); 
$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn,"SET NAMES utf8");
$category = $_GET['category'];
$piece_no = $_GET['piece_no'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Insert Property</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!--Navbar style-->
	<style type="text/css">
		#menu {
			overflow: hidden;
		}
		#menu li {
			display: block;
			position: relative;
			float: left;
		}
		#menu li:first-child {
			margin-left: 0px;
			border-bottom: solid #000000
		}
		#menu li:last-child {
			margin-left: 100px;
		}
		#menu li a {
			display: block;
			color: #333;
			font-size: 18px;
			text-align: center;
			text-decoration: none;
			text-transform: uppercase;
		}
		#menu li span {
			display: none;
		}
		#menu li.active span {
			display: block;
			position: absolute;
			width: 100%;
			text-align: center;
		}
		#menu li.active a {
			background-color: #c03e62;
			outline: #FFF;
			outline-style: dashed;
			color: #CCC;
			text-decoration: none;
		}
		#menu li a:hover {
			text-decoration: none;
			background-image: none;
			background-color: #c03e62;
			outline: #FFF;
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

		#content #mainwrap #tabs .column.col3 #title2 #title3 #title4 h2 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 26em;
			font-style: normal;
			line-height: normal;
			font-weight: bold;
			font-variant: normal;
		}
		#content #mainwrap #RealEstateTab .column.col3 #title2 h2 {
			font-size: large;
			font-style: normal;
			line-height: normal;
			font-weight: bold;
			font-variant: normal;
			text-decoration: underline;
		}
		#content #mainwrap #RealEstateTab {
			border: 5px solid black;
			border-style: solid;
			background: #FFFFFF;
		}
		#content #mainwrap #tabs {
			border: 5px solid black;
			border-style: solid;
			background: #FFFFFF;
		}
		.fieldGroup {
			color: #c03e62;
		}
		.field {
			color: #000000;
			width: 30%;
		}
		.value {
			color: #333333;
			text-decoration: none;
		}
		table {
			border: 0px solid black;
			padding: 5px;
			text-align: left;
			width: 100%;
		}
		th, td {
			border: 0px solid black;
			padding: 3px;
			text-align: left;
		}

		#content #mainwrap #menu {
			padding: 20px;
			overflow: hidden;
		}
		#mainwrap {
			overflow: hidden;
			position: relative;
			margin: 0 auto;
		}
		#content {
			overflow: hidden;
			position: relative;
		}

		#pagecontainer {
			position: relative;
			width: 9999px;
		}

		.section {
			float: left;
			position: relative;
			width: 100%;
			padding: 30px;
			overflow: hidden;
		}

		#RealEstateTab #tabs {
			overflow-y: scroll;
		}

		#tabs {
			display: none;
		}

		.section_title {
			color: #c03e62;
			text-shadow: 1px 1px 1px #000000;
		}

		.note {
			bottom: 20px;
			width: 95%;
			padding-left: 50px;
			padding-top: 1000px;
		}
	</style>

</head>

<body>

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
				<a class="navbar-brand" href="#">Προσθήκη νέου ακινήτου</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['id']; ?>
						<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="profile_broker.php"><i class="fa fa-fw fa-user"></i> Profile</a>
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
							<a href="broker_manage.php"><i class="fa fa-fw fa-edit"></i>Διαχείριση Ακινήτων</a>

						</li>
						<li>
							<a href="calendar_broker.php"><i class="fa fa-fw fa-calendar"></i>Ημερολόγιο</a>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">

				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Προσθήκη νέου ακινήτου</h1>
						</div>
					</div>
					<!-- /.row -->

					<div class="row">
						
						<!-- Start of section : TABS (content) -->
						<div style="clear:both"></div>
						<div id="content">
							<div id="mainwrap">
								<!-- Real Estate details -->
								<div>
									<h3 id="title" class="section_title"> Λεπτομέρειες και Χαρακτηριστικά </h3>
								</div>

								<!-- Start of first "tab" -->
								<div style="clear:both"></div>
								<div id="RealEstateTab" class="section">
									<?php echo "<form role='form' id='form1' action='addProperty2.php?piece_no=".$piece_no."&category=".$category."' method='post'>"; ?>

									<div id="katoikia"><!--start of katoikia-->
										<div class="col-md-6"><!--1i stili-->
											<label>Τύπος Κατοικίας</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<select name="ResidenceType" id="ResidenceType" required class="form-control">
												<option value="Ανεξάρτητη κατοικία">Ανεξάρτητη κατοικία</option>
												<option value="Μεζονέτα">Μεζονέτα</option>
												<option value="Διαμέρισμα">Διαμέρισμα</option>
												<option value="Ρετιρέ">Ρετιρέ</option>
												<option value="Άλλο">Άλλο</option>
											</select>
											<div class="col-md-6">
												<br><label>Αριθμός Κουζίνων</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="1" name="Kitchen">
												<br>
											</div>
											<div class="col-md-6">
												<br><label>Αριθμός Μπάνιων</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="1" name="Bathrooms">
												<br>
											</div>

											<br><label>Εμβαδόν Ταράτσας Ιδιοκτήτη (τ.μ.)</label>
											<input type="text" class="form-control" required placeholder="25.6" name="RooftopArea">
											<br>

										</div><!--end of 1i stili-->

										<div class="col-md-6"><!--2i stili-->
											<div class="col-md-6">
												<label>Αριθμός Υπνοδωματίων</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="3" name="TotalBedrooms">
											</div>
											<div class="col-md-6">
												<label>Αριθμός master Υπνοδωματίων</label>
												<input type="text" class="form-control" required placeholder="1" name="MasterBedroom">
											</div>

											<div class="col-md-6">
												<br><label>Αριθμός Σαλονιών</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="2" name="LivingRooms">
												<br>
											</div>
											<div class="col-md-6">
												<br><label>Εμβαδόν Μπαλκονιών(τ.μ.)</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="25.6" name="BalconyArea">
												<br>
											</div>
											<label>Επιπλωμένο</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<select name="Furnished" id="Furnished" required class="form-control">
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select>
											<br>

										</div><!--end of 2i stili-->
									</div> <!--end of katoikia-->
									
									<div id="ksenodoxeio">
										<div class="col-md-6"><!--1i stili-->
											<label>Τύπος Κτηρίου</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<select name="BuildingType" id="BuildingType" required class="form-control">
												<option value="Κατοικία">Κατοικία</option>
												<option value="Επαγγελματικός χώρος">Επαγγελματικός χώρος</option>
												<option value="Ξενοδοχείο">Ξενοδοχείο</option>
												<option value="Άλλο">Άλλο</option>
											</select>
											<div class="col-md-6">
												<br><label>Έτος Κατασκευής</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="2005" name="ConstructionYear">
											</div>
											<div class="col-md-6">
												<br><label>Αριθμός Ορόφων</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="4" name="NumOfFloorsB">
											</div>

											<div class="col-md-6">
												<br><label>Αριθμός από Παρκινγκ</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="2" name="ParkingSpots">
											</div>
											<div class="col-md-6">
												<br><label>Αριθμός Δωματίων</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="4" name="NumOfRooms">
											</div>	

											<div class="col-md-6">
												<br><label>Ενεργειακό Πιστοποιητικό</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="EnergyCertificate" id="EnergyCertificate" required class="form-control">
													<option value="Class A">Class A</option>
													<option value="Class B">Class B</option>
													<option value="Class C">Class C</option>
													<option value="Class D">Class D</option>
													<option value="Unknown">Unknown</option>
												</select><br>
											</div>
											<div class="col-md-6">
												<br><label>Αριθμός Επιπέδων</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="Levels" id="Levels" required class="form-control">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select><br>
											</div>
											<div>
												<br><label>Πληροφορίες Τοποθεσίας</label><br>
												<?php $sql="SELECT * FROM BLocationDetailsChoices";
												$result = mysqli_query($conn, $sql);
												$i=0;
												while($row=mysqli_fetch_assoc($result)) {
													if ($i<6) {
														echo "<div class='col-md-6 checkbox'>";
														if ($i==1)
															echo "<br>";
														echo"<input name='BL".$row['DetailNo']."' type='checkbox' value='".$row['DetailNo']."'> ".$row['Description']."</div>";
													}
													else
														echo "<div class='col-md-6 checkbox'><input name='BL".$row['DetailNo']."' type='checkbox' value='".$row['DetailNo']."'> ".$row['Description']."</div>";
													$i++;
												} ?>
											</div>		
											<div>
												<br><label>Επιπλέον Χαρακτηριστικά</label><br>
												<?php $sql="SELECT * FROM BDetailsChoices";
												$result = mysqli_query($conn, $sql);
												$i=0;
												while($row=mysqli_fetch_assoc($result)) {
													if ($i<6) {
														echo "<div class='col-md-6 checkbox'>";
														if ($i==1)
															echo "<br>";
														echo"<input name='BD".$row['DetailNo']."' type='checkbox' value='".$row['DetailNo']."'> ".$row['Description']."</div>";
													}
													else
														echo "<div class='col-md-6 checkbox'><input name='BD".$row['DetailNo']."' type='checkbox' value='".$row['DetailNo']."'> ".$row['Description']."</div>";
													$i++;
												} ?>
											</div>		
										</div><!--end of 1i stili-->

										<div class="col-md-6"><!--2i stili-->
											<div class="col-md-6">
												<label>Ανακαινισμένο</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="Renovated" id="Renovated" required class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
												<br>
											</div>
											<div class="col-md-6">
												<label>Έτος Ανακαίνισης</label>
												<input type="text" class="form-control" placeholder="2010" name="RenovationYear">
												<br>
											</div>	

											<div class="col-md-6">
												<label>Αριθμός WC</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="2" name="NumOfWC">
												<br>
											</div>
											<div class="col-md-6">
												<label>Αποχέτευση</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="Drainage" id="Drainage" required class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
												<br>
											</div>

											<div class="col-md-6">
												<label>Τύπος Θέρμανσης</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="HeatingFuel" id="HeatingFuel" required class="form-control">
													<option value="Πετρέλαιο">Πετρέλαιο</option>
													<option value="Γκάζι">Γκάζι</option>
													<option value="Ηλεκτρική">Ηλεκτρική</option>
													<option value="Τζάκι">Τζάκι</option>
													<option value="Κλιματισμός">Κλιματισμός</option>
													<option value="Άλλο">Άλλο</option>
												</select>
												<br>
											</div>
											<div class="col-md-6">
												<label>Μέσο Θέρμανσης</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="HeatingType" id="HeatingType" required class="form-control">
													<option value="Κεντρική">Κεντρική</option>
													<option value="Ανεξάρτητη">Ανεξάρτητη</option>
													<option value="Κοινόχρηστη">Κοινόχρηστη</option>
													<option value="Άλλο">Άλλο</option>
												</select>
												<br>
											</div>
											<div class="col-md-6">
												<label>Μηνιαία κοινόχρηστα</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="35.50" name="AvgSharedCosts">
												<br>
											</div>
											<div class="col-md-6">
												<label>Υπό Κατασκευή</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="UnderConstruction" id="UnderConstruction" required class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
												<br>
											</div>
											<div>
												<br><label>Τύπος Δαπέδων</label><br>
												<?php $sql="SELECT * FROM BFloorTypeChoices";
												$result = mysqli_query($conn, $sql);
												$i=0;
												while($row=mysqli_fetch_assoc($result)) {
													if ($i<3) {
														echo "<div class='col-md-6 checkbox'>";
														if ($i==1)
															echo "<br>";
														echo"<input name='BFl".$row['FloorTypeNo']."' type='checkbox' value='".$row['FloorTypeNo']."'> ".$row['Description']."</div>";
													}
													else
														echo "<div class='col-md-6 checkbox'><input name='BFl".$row['FloorTypeNo']."' type='checkbox' value='".$row['FloorTypeNo']."'> ".$row['Description']."</div>";
													$i++;
												} ?>
											</div>	
											<div>
												<br><label>Τύπος Κουφωμάτων</label><br>
												<?php $sql="SELECT * FROM BFramesChoices";
												$result = mysqli_query($conn, $sql);
												$i=0;
												while($row=mysqli_fetch_assoc($result)) {
													if ($i<9) {
														echo "<div class='col-md-6 checkbox'>";
														if ($i==1)
															echo "<br>";
														echo"<input name='BFr".$row['FrameNo']."' type='checkbox' value='".$row['FrameNo']."'> ".$row['Description']."</div>";
													}
													else
														echo "<div class='col-md-6 checkbox'><input name='BFr".$row['FrameNo']."' type='checkbox' value='".$row['FrameNo']."'> ".$row['Description']."</div>";
													$i++;
												} ?>
											</div>
										</div><!--end of 2i stili-->

									</div><!--end of ksenodoxeio-->


									<br>
									<br>
									<br>

									<div style="float:right;">
										<button type="submit" name="send" class="btn btn-success">
											Καταχώρηση Ακινήτου
										</button>
									</div>
								</form>
							</div>

							<!-- End of first "tab" -->

						</div>
						<!-- /.main wrap -->
					</div>
					<!-- /. End of section : TABS (content) -->

				</div>
				<!-- /.row -->

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
