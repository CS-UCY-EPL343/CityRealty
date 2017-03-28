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
					<div class="col-lg-6">

						<form role="form" action="addProperty.php" method="post">
							<div class="form-group">
								<label>Category</label>
								<input class="form-control" name="category">

							</div>
							<div class="form-group">
								<label>Street Name</label>
								<input class="form-control" name="astreet">

							</div>
							<div class="form-group">
								<label>Street No</label>
								<input class="form-control" name="astreet_no">

							</div>
							<div class="form-group">
								<label>Postal Code</label>
								<input class="form-control" name="apostal_code">

							</div>
							<div class="form-group">
								<label>Region Code</label>
								<input class="form-control" name="aregion_code">

							</div>
							<div class="form-group">
								<label>City</label>
								<input class="form-control" name="acity">

							</div>
							<div class="form-group">
								<label>Zone</label>
								<input class="form-control" name="zone">

							</div>
							<div class="form-group">
								<label>Country</label>
								<input class="form-control" name="acountry">

							</div>
							<div class="form-group">
								<label>View</label>
								<input class="form-control" name="view_address">

							</div>
							<div class="form-group">
								<label>Street Position</label>
								<input class="form-control" name="corner">									
							</div>
							<div class="form-group">
								<label>Area (square meters)</label>
								<input class="form-control" name="area_tm">									
							</div>
							<div class="form-group">
								<label>Square Meters</label>
								<input class="form-control" name="tm">									
							</div>
							<div class="form-group">
								<label>Number of Blueprint</label>
								<input class="form-control" name="blueprint_no">

							</div>
							<div class="form-group">
								<label>Building Permission Number</label>
								<input class="form-control" name="arithmos_ad_oik">

							</div>
							<div class="form-group">
								<label>Piece Number</label>
								<input class="form-control" name="piece_no">

							</div>
							<div class="form-group">
								<label>Folder Number</label>
								<input class="form-control" name="folder_no">

							</div>
							<div class="form-group">
								<label>Currency</label>								
								<div class="radio">
									<label>
										<input type="radio" name="currency">
										Euros ()
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="currency">USD ($)
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="currency">
										Yen ()
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="currency">
										rb ()
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="currency">
										SEK ()
									</label>
								</div>
							</div>
							<div class="form-group">
								<label>Initial Price
								</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="initial_price">
							</div>
							<div class="form-group">
								<label>Price</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="price">
							</div>
							<div class="form-group">
								<label>Estimated Price</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="estimated_price">
							</div>
							<div class="form-group">
								<label>Final Price</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="final_price" >
							</div>
							<div class="form-group">
								<label>Vat</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="vat" >
							</div>
							<div class="form-group">
								<label>Price per Square Meter</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="price_per_tm">
							</div>
							<div class="form-group">
								<label>Objective Value</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="objective_value">
							</div>
							<div class="form-group">
								<label>Mortage Loan</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="mortage_loan">
							</div>
							<div class="form-group">
								<label>Legal Control</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="legal_control">
							</div>
							<div class="form-group">
								<label>Estate Rating</label>
								<input class="form-control" name="rating">

							</div>
							<div class="form-group">
								<label>Owner's ID</label>
								<input class="form-control" name="owner_id">

							</div>
							<div class="form-group">
								<label>Owner's Rating</label>
								<input class="form-control" name="owner_rating">

							</div>
							<div class="form-group">
								<label>Registration Purpose</label>
								<input class="form-control" name="registration_purpose">

							</div>
							<div class="form-group">
								<label>Registration Title</label>
								<input class="form-control" name="registration_title">

							</div>
							<div class="form-group">
								<label>Registration Title Number</label>
								<input class="form-control" name="registration_title_no">

							</div>
							<div class="form-group">
								<label>Available From</label>
								<input class="form-control" name="available_from">

							</div>
							<div class="form-group">
								<label>Registration Date</label>
								<input class="form-control" name="date_added">

							</div>
							<div class="form-group">
								<label>Notes</label>
								<textarea class="form-control" name="notes" rows="7"placeholder="Enter notes.." id="message" required data-validation-required-message="Please enter a message."></textarea>

							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="desc" rows="7"placeholder="Enter notes.." id="message" required data-validation-required-message="Please enter a message."></textarea>

							</div>
							<div class="form-group">
								<label>Short Description</label>
								<textarea class="form-control" name="short_desc" rows="3"placeholder="Enter notes.." id="message" required data-validation-required-message="Please enter a message."></textarea>

							</div>
							<div class="form-group">
								<label>Upload pictures</label>
								<input type="file">
							</div>
							<div class="form-group">
								<label>For Rent</label>
								<input class="form-control" name="about_renting">

							</div>
							<div class="form-group">
								<label>Real Estate Status</label>
								<input class="form-control" name="realestate_status">

							</div>
							<div class="form-group">
								<label>Recommended By</label>
								<input class="form-control" name="recommended_by">

							</div>
							<div class="form-group">
								<label>Order Code</label>
								<input class="form-control" name="order_code">

							</div>
							<div class="form-group">
								<label>Order Type</label>
								<input class="form-control" name="type_order">

							</div>
							<div class="form-group">
								<label>Exclusive</label>
								<input class="form-control" name="exclusive">

							</div>
							<div class="form-group">
								<label>Order Start Date</label>
								<input class="form-control" name="order_start">

							</div>
							<div class="form-group">
								<label>Order Finish Date</label>
								<input class="form-control" name="order_stop">

							</div>
							<div class="form-group">
								<label>Cost of transfer</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="transfer_cost">
							</div>
							<div class="form-group">
								<label>Cost of transfer VAT</label>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-eur"></i></span>
								<input type="text" class="form-control" name="transfer_vat">
							</div>
							<div class="form-group">
								<label>Consideration Exchange</label>
								<input class="form-control" name="consideration_exchange">									
							</div>
							<div class="form-group">
								<label>Agent Username</label>
								<input class="form-control" name="username">

							</div>
							<div class="form-group">
								<label>Notify Colleague</label>
								<input class="form-control" name="notify_colleague">

							</div>	
							<div class="form-group">
								<label>Agent Reward</label>
								<input class="form-control" name="agent_reward">

							</div>
							<div class="form-group">
								<label>Agent's Reward Percentage</label>
								<input class="form-control" name="agent_reward_percentage">

							</div>
							<div class="form-group">
								<label>Agent's Rating</label>
								<input class="form-control" name="agent_rating">

							</div>
							<button type="submit" name="send" class="btn btn-success">Submit</button>

							<button type="button" class="btn btn-danger">Cancel</button>

						</form>

					</div>
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
