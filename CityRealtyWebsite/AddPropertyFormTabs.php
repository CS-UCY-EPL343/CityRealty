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
		.containerwithcheckboxes {
			border: 2px solid #ccc;
			width: 1150px;
			height: 100px;
			overflow-y: scroll;
		}

		.navbar {
			position: relative;
			min-height: 50px;
			margin-bottom: 1px;
			border: 1px solid transparent;
			background-color: transparent;
			width: 100%
		}

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
		/*#RealEstateTab{
			display: none;
		}*/
		#tabs{
			display: none;	
		}
	</style>
	
	

	
	<script>
$(document).ready(function(){
    $('#tab1').click(function(){
        $('#RealEstateTab').css({'display':'block'});
        $('#tabs').css({'display':'none'});
    });
    $('#tab2').click(function(){
        $('#RealEstateTab').css({'display':'none'});
        $('#tabs').css({'display':'block'});
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
			if ($('#category').val() == 'gi') {
				$('#gi').show();
				$('#katoikia').hide();
				$('#epxwros').hide();
				$('#ksenodoxeio').hide();
				$('#nothing').hide();
			}else if ($('#category').val() == 'katoikia') {
				$('#gi').hide();
				$('#katoikia').show();
				$('#epxwros').hide();
				$('#ksenodoxeio').hide();
				$('#nothing').hide();
			} else if ($('#category').val() == 'epxwros') {
				$('#gi').hide();
				$('#katoikia').hide();
				$('#epxwros').show();
				$('#ksenodoxeio').hide();
				$('#nothing').hide();
			} else if ($('#category').val() == 'ksenodoxeio') {
				$('#gi').hide();
				$('#katoikia').hide();
				$('#epxwros').hide();
				$('#ksenodoxeio').show();
				$('#nothing').hide();
			} else{
				$('#gi').hide();
				$('#katoikia').hide();
				$('#epxwros').hide();
				$('#ksenodoxeio').hide();
				$('#nothing').show();
			}
		});
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
					
		<div class="form-group">
		<label>Κατηγορία</label>
			<select name="Type" class="form-control" id="category" >
					<option value="nothing">--</option>
					<option value="gi">Γη</option>
					<option  value="katoikia">Κατοικία</option>
					<option value="epxwros">Επαγγελματικός χώρος</option>
					<option value="ksenodoxeio">Ξενοδοχείο</option>
			</select>
		</div>
																				
			<!-- Start of section : TABS (content) -->
			<div style="clear:both"></div>
			<div id="content">
				<div id="mainwrap">
					<ul id="menu">
						<!-- Real Estate details -->
						<div>
							<li>
								<a href="#RealEstateTab" id="tab1" title="Tab1">Βασικές Πληροφορίες</a>
							</li>
						</div>
						<!-- Extra details -->
						<div>
							<li>
								<a href="#tabs" id="tab2" title="Tab2">Λεπτομέρεις και Χαρακτηριστικά</a>
							</li>
						</div>
					</ul>

					<!-- Start of first tab -->
					<div style="clear:both"></div>
					<div id="RealEstateTab" class="section">
						<form role="form" action="addProperty.php" method="post">
							<div class="col-md-6">
								<label>Διεύθυνση</label>
								<input class="form-control" name="astreet">
								<div class="form-group">
									<br><label>Πόλη/Περιοχή:</label>
									<select name="Location" id="Location" class="form-control" onchange="showtemplate(this.value)">
										<option value="--">--</option>
										<option value="Λευκωσία">Λευκωσία</option>
										<option value="Λεμεσός">Λεμεσός</option>
										<option value="Λάρνακα">Λάρνακα</option>
										<option value="Πάφος">Πάφος</option>
										<option value="Αμμόχωστος">Αμμόχωστος</option>
									</select>
								</div>
								<label>Ζώνη</label>
								<input class="form-control" name="zone">
								<br><label>Εμβαδόν (τ.μ.)</label>
								<input class="form-control" name="area_tm">
								<div class="col-md-6">
								<br><label>Κατάσταση Ακινήτου</label>
								<input class="form-control" placeholder="π.χ. άριστη, πολύ καλή, χρειάζεται βελτίωση" name="blueprint_no">	
								</div>
								<div class="col-md-6">	
									<br><label>Building Permission Number</label>
								<input class="form-control" name="arithmos_ad_oik">
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<br><label>Νόμισμα:</label>
									<select name="currency" id="currency" class="form-control">
										<option value="EUR">EUR</option>
										<option value="USD">USD</option>
										<option value="GBP">GBP</option>
										<option value="RUS">RUS</option>
									</select>
								</div>
								</div>
							 <div class="col-md-6">
								<br><label>ΦΠΑ (%)</label>
								<input type="text" class="form-control" placeholder="9.5" name="price">
							</div>
							
							</div>
							
							<div class="col-md-6">
								<div class="col-md-6">
									<label>Street No</label>
									<input class="form-control" name="astreet_no"><br>
								</div>
								<div class="col-md-6">
									<label>Τ.Κ.</label>
									<input class="form-control" placeholder="2745" name="apostal_code"><br>
								</div>
								
								<label>Xώρα</label>
								<input class="form-control" name="acountry">
								<br><label>Street Position</label>
								<input class="form-control" name="corner">
								<div class="form-group">
									<br><label>Σκοπός εγγραφής ακινήτου:</label>
									<select name="purpose" id="purpose" class="form-control" require>
										<option value="none">--</option>
										<option value="pwlisi">Πώληση</option>
										<option value="enoikiasi">Ενοικίαση</option>
										<option value="antiparoxi">Αντιπαροχή</option>
										<option value="ependisi">Επένδυση</option>
									</select>
								</div>							
								<div class="col-md-6">	
									<br><label>Αριθμός τεμαχίου:</label>
									<input class="form-control" name="piece_no">
								</div>
								<div class="col-md-6">	
									<br><label>Αριθμός φακέλου:</label>
									<input class="form-control" name="folder_no">	
								</div>	
								<div class="col-md-6">
								<br><label>Τιμή</label>
								<input type="text" class="form-control" placeholder="300" name="price">
								</div>
								<div class="col-md-6">
								
								</div>
								
							</div>

							
						</form>
					</div>
					<!-- End of first tab -->

					<!-- Start of second tab -->
					<div style="clear:both"></div>
					<div id="tabs" class="section">
						<div id="gi">gi</div>
	<div id="katoikia">katoikia</div> 
	<div id="epxwros">epaggelmatikos xwros</div>
	<div id="ksenodoxeio">ksenodoxeio</div>
	<div id="nothing">Επιλέξτε μια κατηγορία για να μπορέσετε να συμπληρώσετε τις λεπτομέρειες και τα χαρακτηριστικά της κατηγορίας αυτής!</div>
	
					</div>
					<!-- End of second tab -->

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