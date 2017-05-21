<?php session_start(); 
$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn,"SET NAMES utf8");
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
				url : 'showLocations2.php',
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
							<a target="_blank" href="http://accounts.google.com/AccountChooser?continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Frender%3Fpli%3D1&hl=en&service=cl&scc=1"><i class="fa fa-fw fa-calendar"></i>Ημερολόγιο</a>
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
							<div class="form-group">
								<h3 class="section_title">Κατηγορία *</h3>
								<select name="category" class="form-control" id="category" >
									<option value="nothing">--</option>
									<option value="Γη">Γη</option>
									<option  value="Κατοικία">Κατοικία</option>
									<option value="Επαγγελματικός χώρος">Επαγγελματικός χώρος</option>
									<option value="Ξενοδοχείο">Ξενοδοχείο</option>
								</select>
							</div>

							<!-- Start of section : TABS (content) -->
							<div style="clear:both"></div>
							<div id="content">
								<div id="mainwrap">
									<!-- Real Estate details -->
									<div>
										<h3 id="title" class="section_title"> Βασικές Πληροφορίες </h3>
									</div>

									<!-- Start of first "tab" -->
									<div style="clear:both"></div>
									<div id="RealEstateTab" class="section">
										<div class="form-group">
											<br>
											<label>Πόλη/Περιοχή:</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<select name="acity" id="acity" required class="form-control" onchange="showtemplate(this.value)">
												<option value="--">--</option>
												<option value="Λευκωσία">Λευκωσία</option>
												<option value="Λεμεσός">Λεμεσός</option>
												<option value="Λάρνακα">Λάρνακα</option>
												<option value="Πάφος">Πάφος</option>
												<option value="Αμμόχωστος">Αμμόχωστος</option>
											</select>
										</div>
										<div class="row containerwithcheckboxes form-group" id="somewhere"></div>
										<div class="col-md-6">
											<label>Διεύθυνση</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<input type="text" class="form-control" required name="astreet">
											<br />
											<label>Ζώνη</label>
											<input type="text" class="form-control" name="zone">
											<br>
											<label>Εμβαδόν (τ.μ.)</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<input type="text" class="form-control"required  name="area_tm">
											<div class="col-md-6">
												<br>
												<label>Κατάσταση Ακινήτου</label>
												<input type="text" class="form-control" placeholder="π.χ. άριστη, πολύ καλή, χρειάζεται βελτίωση" name="realestate_status">
											</div>
											<div class="col-md-6">
												<br>
												<label>Νομικός έλεγχος</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="legal_control" id="legal_control" required class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
											</div>
											<div class="col-md-6">
												<br>
												<label>Αριθμός τίτλου εγγρ.</label>
												<input type="text" class="form-control" name="RegistrationTitleNo">
											</div>
											<div class="col-md-6">
												<br>
												<label>Αριθμός φυλ. σχεδ.</label>
												<input type="text" class="form-control" name="ArithmosFilSxed">
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<br>
													<label>Νόμισμα:</label>
													<select name="currency" id="currency" class="form-control">
														<option value="EUR">EUR</option>
														<option value="USD">USD</option>
														<option value="GBP">GBP</option>
														<option value="RUS">RUS</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<br>
												<label>ΦΠΑ (%)</label>
												<input type="text" class="form-control" placeholder="9.5" name="vat">
											</div>

											<div class="col-md-6">
												<br>
												<label>Τίτλος εγγραφής</label>
												<input type="text" class="form-control" name="RegistartionTitle">
											</div>
											<br>
											<label>Υπεύθυνος μεσίτης</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<input type="text" class="form-control" placeholder="Γράψτε το username σας" required name="AgentUsername">

											<div class="col-md-6">
												<br>
												<label>Κωδικός Εντολής</label>
												<input type="text" class="form-control" name="OrderCode">
											</div>
											<div class="col-md-6">
												<br>
												<label>Τύπος εντολής</label>
												<input type="text" class="form-control" name="TypeCode">
											</div>

											<div class="col-md-6">
												<br>
												<label>Έναρξη εντολής</label>
												<input type="text" class="form-control" placeholder="2016-11-28" name="OrderStart">
											</div>
											<div class="col-md-6">
												<br>
												<label>Λήξη εντολής</label>
												<input type="text" class="form-control" placeholder="2016-11-28" name="OrderStop">
											</div>

											<div class="col-md-6">
												<br>
												<label>Αμοιβή (%)</label>
												<input type="text" class="form-control" placeholder="15" name="AgentRewardPercentage">
											</div>
											<div class="col-md-6">
												<br>
												<label>Αμοιβή (Ποσό)</label>
												<input type="text" class="form-control" placeholder="350" name="AgentReward">
												<br>
											</div>
											<br>
											<label>Διαθεσιμότητα από</label>
											<input type="text" class="form-control" placeholder="2016-11-28" name="AvailableFrom">

											<div class="col-md-6">
												<br>
												<label>Κόστος μεταβίβασης</label>
												<input type="text" class="form-control" placeholder="100" name="TransferCost">
											</div>
											<div class="col-md-6">
												<br>
												<label>Φόρος Κόστους Μεταβίβασης (VAT)</label>
												<input type="text" class="form-control" placeholder="10" name="TransferVAT">
												<br>
											</div>

											<br>
											<label>Ανέβασε φωτογραφίες</label>
											<input type="file" name="photo">
											<div>
												<br><label>Εμφάνιση</label><br>
												<?php $sql="SELECT * FROM REAppearanceChoices";
												$result = mysqli_query($conn, $sql);
												$i=0;
												while($row=mysqli_fetch_assoc($result)) {
													if ($i<5) {
														echo "<div class='col-md-6 checkbox'>";
														if ($i==1)
															echo "<br>";
														echo"<input name='REA".$row['AppearanceNo']."' type='checkbox' value='".$row['AppearanceNo']."'> ".$row['Description']."</div>";
													}
													else
														echo "<div class='col-md-6 checkbox'><input name='REA".$row['AppearanceNo']."' type='checkbox' value='".$row['AppearanceNo']."'> ".$row['Description']."</div>";
													$i++;
												} ?>
											</div>
										</div><!--end of 1i stili-->

										<div class="col-md-6">
											<div class="col-md-6">
												<label>Αριθμός οδού</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required name="astreet_no">
												<br>
											</div>
											<div class="col-md-6">
												<label>Τ.Κ.</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="2745" name="apostal_code">
												<br>
											</div>

											<label>Xώρα</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<input type="text" class="form-control" required name="acountry">

											<div class="col-md-6">
												<br>
												<label>Latitude</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" placeholder="32.6547" name="Latitude">
												<br>
											</div>
											<div class="col-md-6">
												<br>
												<label>Longitude</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" placeholder="12.36548" name="Longitude">
												<br>
											</div>

											<div class="form-group">
												<br>
												<label>Σκοπός εγγραφής ακινήτου:</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="purpose" id="purpose" class="form-control" required >
													<option value="Πώληση">Πώληση</option>
													<option value="Ενοικίαση">Ενοικίαση</option>
													<option value="Αντιπαροχή">Αντιπαροχή</option>
													<option value="Επένδυση">Επένδυση</option>
												</select>
											</div>
											<div class="col-md-6">
												<label>Αριθμός τεμαχίου:</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" required class="form-control" name="piece_no">
												<br>
											</div>
											<div class="col-md-6">
												<label>Αριθμός φακέλου:</label>
												<input type="text" class="form-control" name="folder_no">
												<br>
											</div>

											<br>
											<label>Αριθμός αδ. οικ.</label>
											<input type="text" class="form-control" name="ArithmosAdOik">

											<div class="col-md-6">
												<br>
												<label>Τιμή</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<input type="text" class="form-control" required placeholder="300" name="price">
												<br>
											</div>
											<div class="col-md-6">
												<br>
												<label>Υποθήκη/Δάνειο</label>
												<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
												<select name="ipothiki" id="ipothiki" required class="form-control">
													<option value="1">Yes</option>
													<option value="0">No</option>
												</select>
												<br>
											</div>
											<div class="form-group">
												<br>
												<label>Σύντομη Περιγραφή</label>
												<textarea class="form-control" name="short_desc" rows="3"placeholder="Enter notes.." id="message" data-validation-required-message="Please enter a message."></textarea>
											</div>
											<div class="form-group">
												<label>Αναλυτική Περιγραφή</label>
												<textarea class="form-control" name="desc" rows="6"placeholder="Enter notes.." id="message"  data-validation-required-message="Please enter a message."></textarea>
											</div>
											<div class="form-group">
												<label>Notes</label>
												<textarea class="form-control" name="notes" rows="5"placeholder="Enter notes.." id="message"  data-validation-required-message="Please enter a message."></textarea>
											</div>
											<label>Αντιπαροχή/Ανταλλαγή</label>
											<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
											<select name="ConsiderationExchange" id="ConsiderationExchange" required class="form-control">
												<option value="1">Yes</option>
												<option value="0">No</option>
												<br>
											</select>
											<div>
											<br><label>Θέα</label><br>
											<?php $sql="SELECT * FROM REViewChoices";
											$result = mysqli_query($conn, $sql);
											$i=0;
											while($row=mysqli_fetch_assoc($result)) {
												if ($i<3) {
													echo "<div class='col-md-6 checkbox'>";
													if ($i==1)
														echo "<br>";
													echo"<input name='REV".$row['ViewNo']."' type='checkbox' value='".$row['ViewNo']."'> ".$row['Description']."</div>";
												}
												else
													echo "<div class='col-md-6 checkbox'><input name='REV".$row['ViewNo']."' type='checkbox' value='".$row['ViewNo']."'> ".$row['Description']."</div>";
												$i++;
											} ?>
										</div>
										</div>
										<br>
										<br>
										<br>

										<div style="float:right;">
											<br>
											<button type="submit" name="next" class="btn btn-success">
												Επόμενο: Λεπτομέρειες και Χαρακτηριστικά
											</button>
										</div>
									</div>
								</form>
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
