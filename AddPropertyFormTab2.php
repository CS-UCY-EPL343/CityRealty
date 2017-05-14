<?php session_start(); ?>
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

		<script>
			$(document).ready(function() {
				$('#tab1').click(function() {
					$('#RealEstateTab').css({
						'display' : 'block'
					});
					$('#tabs').css({
						'display' : 'none'
					});
				});
				$('#tab2').click(function() {
					$('#RealEstateTab').css({
						'display' : 'none'
					});
					$('#tabs').css({
						'display' : 'block'
					});
				});
			});
		</script>

		<script>
			$(function() {
				$('#gi').hide();
				$('#katoikia').hide();
				$('#epxwros').hide();
				$('#ksenodoxeio').hide();
				$('#category').change(function() {
					if ($('#category').val() == 'Γη') {
						$('#gi').show();
						$('#katoikia').hide();
						$('#epxwros').hide();
						$('#ksenodoxeio').hide();
						$('#nothing').hide();
						$('#gi').children(":input").prop("disabled", false);
						// enable
						$('#katoikia').children(":input").prop("disabled", true);
						// disable
						$('#epxwros').children(":input").prop("disabled", true);
						// disable
						$('#ksenodoxeio').children(":input").prop("disabled", true);
						// disable
					} else if ($('#category').val() == 'Κατοικία') {
						$('#gi').hide();
						$('#katoikia').show();
						$('#epxwros').hide();
						$('#ksenodoxeio').show();
						$('#nothing').hide();
						$('#gi').children(":input").prop("disabled", true);
						// disable
						$('#katoikia').children(":input").prop("disabled", false);
						// enable
						$('#epxwros').children(":input").prop("disabled", true);
						// disable
						$('#ksenodoxeio').children(":input").prop("disabled", false);
						// enable
					} else if ($('#category').val() == 'Επαγγελματικός χώρος') {
						$('#gi').hide();
						$('#katoikia').hide();
						$('#epxwros').show();
						$('#ksenodoxeio').show();
						$('#nothing').hide();
						$('#gi').children(":input").prop("disabled", true);
						// disable
						$('#katoikia').children(":input").prop("disabled", true);
						// disable
						$('#epxwros').children(":input").prop("disabled", false);
						// enable
						$('#ksenodoxeio').children(":input").prop("disabled", false);
						// enable
					} else if ($('#category').val() == 'Ξενοδοχείο') {
						$('#gi').hide();
						$('#katoikia').hide();
						$('#epxwros').hide();
						$('#ksenodoxeio').show();
						$('#nothing').hide();
						$('#gi').children(":input").prop("disabled", true);
						// disable
						$('#katoikia').children(":input").prop("disabled", true);
						// disable
						$('#epxwros').children(":input").prop("disabled", true);
						// disable
						$('#ksenodoxeio').children(":input").prop("disabled", false);
						// enable
					} else {
						$('#gi').hide();
						$('#katoikia').hide();
						$('#epxwros').hide();
						$('#ksenodoxeio').hide();
						$('#nothing').show();
					}
				});
			});

		</script>

		<script>
			function showtemplate(temp) {
				$.ajax({
					type : "POST",
					url : 'showLocations.php',
					data : {
						'section' : temp
					},
					success : function(data) {
						$("#somewhere").html(data);
					}
				});
			}
		</script>

		<script>
			function submitForms() {
				document.forms["form1"].submit();
				document.forms["form2"].submit();

			});
		</script>

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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['id']; ?> <b class="caret"></b></a>
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
						<form role="form" id="form1" action="addProperty.php" method="post">

							<!-- Start of section : TABS (content) -->
							<div style="clear:both"></div>
							<div id="content">
								<div id="mainwrap">
									<!-- Other details -->
									<div>
										<h3 id="title" class="section_title"> Λεπτομέρειες και Χαρακτηριστικά </h3>
									</div>

									<!-- Start of second "tab" -->
									<form role="form" id="form2" action="addProperty.php" method="post">

										<div style="clear:both"></div>
										<div id="RealEstateTab" class="section">
											<div id="gi">
												<div class="col-md-6">
													<!--1i stili-->
													<label>Τύπος ΓΗΣ</label>
													<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
													<select name="LandType" id="LandType" required class="form-control">
														<option value="Έκταση">Έκταση</option>
														<option value="Κτήμα">Κτήμα</option>
														<option value="Οικόπεδο">Οικόπεδο</option>
														<option value="Οικιστικό οικόπεδο">Οικιστικό οικόπεδο</option>
														<option value="Βιομηχανικό οικόπεδο">Βιομηχανικό οικόπεδο</option>
														<option value="Επαγγελματικό οικόπεδο">Επαγγελματικό οικόπεδο</option>
														<option value="Άλλο">Άλλο</option>
													</select>

													<div class="col-md-6">
														<br>
														<label>Τ.Μ. Γης</label>
														<input type="text" class="form-control" placeholder="210.5" name="TMLand">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>Τ.Μ. Κτίσματος</label>
														<input type="text" class="form-control"  placeholder="75.5" name="TMBuilding">
														<br>
													</div>

													<div class="col-md-6">
														<br>
														<label>Δόμηση(τ.μ.)</label>
														<input type="text" class="form-control" placeholder="50.5" name="Builded">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>Υπόλοιπο Δόμησης</label>
														<input type="text" class="form-control"  placeholder="63.5" name="NotBuilded">
														<br>
													</div>

													<div class="col-md-6">
														<label>Σχέδιο πόλεως</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<select name="CityPlan" id="CityPlan" required class="form-control">
															<option value="Εντός σχεδίου">Εντός σχεδίου</option>
															<option value="Εκτός σχεδίου">Εκτός σχεδίου</option>
															<option value="Εντός οικισμού">Εντός οικισμού</option>
															<option value="Εκτός οικισμού">Εκτός οικισμού</option>
															<option value="Άλλο">Άλλο</option>
														</select>
														<br>
													</div>
													<div class="col-md-6">
														<label>Επενδυτική έκταση</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<select name="InvestmentField" id="InvestmentField" required class="form-control">
															<option value="1">Yes</option>
															<option value="0">No</option>
														</select>
														<br>
													</div>
												</div><!--end of 1i stili-->

												<div class="col-md-6">
													<!--2i stili-->
													<label>Με κτίσμα</label>
													<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
													<select name="BuildIn" id="BuildIn" required class="form-control">
														<option value="1">Yes</option>
														<option value="0">No</option>
													</select>

													<div class="col-md-6">
														<br>
														<label>ΣΔ</label>
														<input type="text" class="form-control" placeholder="7.6" name="SD">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>ΣΚ%</label>
														<input type="text" class="form-control"  placeholder="3.2" name="SK">
														<br>
													</div>

													<div class="col-md-6">
														<br>
														<label>Πρόσοψη(m)</label>
														<input type="text" class="form-control" placeholder="20.5" name="Front">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>Βάθος(m)</label>
														<input type="text" class="form-control"  placeholder="30.2" name="Depth">
														<br>
													</div>

													<div class="col-md-6">
														<br>
														<label>Α.Ο.Τ.</label>
														<input type="text" class="form-control" name="AOT">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Οικοπέδων</label>
														<input type="text" class="form-control"  placeholder="2.5" name="NumOfPlots">
														<br>
													</div>

												</div><!--end of 2i stili-->

											</div><!--end of gi-->

											<div id="katoikia">
												<!--start of katoikia-->
												<div class="col-md-6">
													<!--1i stili-->
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
														<br>
														<label>Αριθμός Κουζίνων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="1" name="Kitchen">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Μπάνιων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="1" name="Bathrooms">
														<br>
													</div>

													<br>
													<label>Εμβαδόν Ταράτσας Ιδιοκτήτη (τ.μ.)</label>
													<input type="text" class="form-control" required placeholder="25.6" name="RooftopArea">
													<br>

												</div><!--end of 1i stili-->

												<div class="col-md-6">
													<!--2i stili-->
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
														<br>
														<label>Αριθμός Σαλονιών</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="2" name="LivingRooms">
														<br>
													</div>
													<div class="col-md-6">
														<br>
														<label>Εμβαδόν Μπαλκονιών(τ.μ.)</label>
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
											</div>
											<!--end of katoikia-->

											<div id="epxwros">
												<!--start of epaggelmatikos xwros-->
												<div class="col-md-6">
													<!--1i stili-->
													<label>Τύπος Επαγγελματικού Χώρου</label>
													<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
													<select name="OfficeType" id="OfficeType" required class="form-control">
														<option value="Επαγγελματικός χώρος">Επαγγελματικός χώρος</option>
														<option value="Αποθήκη">Αποθήκη</option>
														<option value="Αίθουσα">Αίθουσα</option>
														<option value="Κτήριο">Κτήριο</option>
														<option value="Κατάστημα">Κατάστημα</option>
														<option value="Γραφεία">Γραφεία</option>
														<option value="Ιατρεία">Ιατρεία</option>
														<option value="Βιομηχανικός χώρος">Βιομηχανικός χώρος</option>
														<option value="Γυμναστήριο">Γυμναστήριο</option>
														<option value="Φροντιστήριο">Φροντιστήριο</option>
														<option value="Εκθεσιακός χώρος">Εκθεσιακός χώρος</option>
														<option value="Άλλο">Άλλο</option>
													</select>

													<div class="col-md-6">
														<br>
														<label>Αριθμός Υπογείων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="1" name="NumOfBasements">
													</div>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Ορόφων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="4" name="NumOfFloors">
													</div>

													<div class="col-md-6">
														<br>
														<label>Βιτρίνα (τ.μ.)</label>
														<input type="text" class="form-control"  placeholder="1" name="StoreFrontArea">
													</div>
													<div class="col-md-6">
														<br>
														<label>Ισόγειο (τ.μ.)</label>
														<input type="text" class="form-control" required placeholder="30.5" name="GroundFloorArea">
														<br>
													</div>

													<label>Με εξοπλισμό</label>
													<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
													<select name="EquipmentIncluded" id="EquipmentIncluded" required class="form-control">
														<option value="1">Yes</option>
														<option value="0">No</option>
													</select>
													<br />

												</div><!--end of 1i stili-->

												<div class="col-md-6">
													<!--2i stili-->
													<label>Επενδυτικό</label>
													<select name="Investment" id="Investment"  class="form-control">
														<option value="1">Yes</option>
														<option value="0">No</option>
													</select>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Εσωτερικών Χώρων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="3" name="NumOfSegments">
													</div>
													<div class="col-md-6">
														<br>
														<label>Τ.Μ. Αναδομής</label>
														<input type="text" class="form-control" placeholder="105.7" name="SurfaceArea">
													</div>

													<div class="col-md-6">
														<br>
														<label>Πατάρι (τ.μ.)</label>
														<input type="text" class="form-control"  placeholder="10.5" name="LoftArea">
													</div>
													<div class="col-md-6">
														<br>
														<label>Υπόγεια (τ.μ.)</label>
														<input type="text" class="form-control" required placeholder="40.5" name="BasementArea">
														<br />
													</div>
													<br>
													<label>Τιμή Αέρα</label>
													<input type="text" class="form-control" required placeholder="100.6" name="AirPrice">
													<br />
												</div><!--end of 2i stili-->
											</div>

											<div id="ksenodoxeio">
												<div class="col-md-6">
													<!--1i stili-->
													<label>Τύπος Κτηρίου</label>
													<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
													<select name="BuildingType" id="BuildingType" required class="form-control">
														<option value="Κατοικία">Κατοικία</option>
														<option value="Επαγγελματικός χώρος">Επαγγελματικός χώρος</option>
														<option value="Ξενοδοχείο">Ξενοδοχείο</option>
														<option value="Άλλο">Άλλο</option>
													</select>
													<div class="col-md-6">
														<br>
														<label>Έτος Κατασκευής</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="2005" name="ConstructionYear">
													</div>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Ορόφων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="4" name="NumOfFloorsB">
													</div>

													<div class="col-md-6">
														<br>
														<label>Αριθμός από Παρκινγκ</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="2" name="ParkingSpots">
													</div>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Δωματίων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<input type="text" class="form-control" required placeholder="4" name="NumOfRooms">
													</div>

													<div class="col-md-6">
														<br>
														<label>Ενεργειακό Πιστοποιητικό</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<select name="EnergyCertificate" id="EnergyCertificate" required class="form-control">
															<option value="Class A">Class A</option>
															<option value="Class B">Class B</option>
															<option value="Class C">Class C</option>
															<option value="Class D">Class D</option>
															<option value="Unknown">Unknown</option>
														</select>
													</div>
													<div class="col-md-6">
														<br>
														<label>Αριθμός Επιπέδων</label>
														<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
														<select name="Levels" id="Levels" required class="form-control">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div><!--end of 1i stili-->

												<div class="col-md-6">
													<!--2i stili-->
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
												</div><!--end of 2i stili-->

											</div><!--end of ksenodoxeio-->
											<div id="nothing">
												Επιλέξτε μια κατηγορία για να μπορέσετε να συμπληρώσετε τις λεπτομέρειες και τα χαρακτηριστικά της κατηγορίας αυτής!
											</div>
											<br>
											<div style="float:right;">
												<button type="submit" name="send" class="btn btn-success">
													Καταχώρηση Ακινήτου
												</button>
											</div>
										</div>
									</form>
									<!-- End of second "tab" -->

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