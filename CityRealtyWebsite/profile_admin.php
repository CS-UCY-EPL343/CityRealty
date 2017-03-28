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

	<title>Profile</title>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

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
				<a class="navbar-brand">Προφίλ</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['id']; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-user"></i> Προφίλ</a>
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
						<a href="admin.php"><i class="fa fa-fw fa-edit"></i>Διαχείριση ακινήτων</a>

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
						<h1 class="page-header">Προφίλ</h1>
					</div>
				</div>

				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
							<form role="form" method="POST" action="updateAdmin.php">
								<?php 
								$conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DATABASE");

								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}

								mysqli_query($conn,"SET NAMES utf8");
								$id = $_SESSION['id'];
								$sql =  "SELECT US.Username, US.Password, US.Name, US.Surname, US.Email, UE.PrivatePhone, UE.ANumber, UE.AStreet, UE.ACity, UE.ACountry FROM UserSimple US, UserExtended UE WHERE US.Username ='$id' AND US.Username=UE.Username";
								$result = mysqli_query($conn, $sql); 

								$row=mysqli_fetch_assoc($result);

								?>
								<div class="row">
								<small>Όνομα</small>
								<br>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="first_name" id="first_name" class="form-control input-lg" tabindex="1" value="<?php echo $row['Name']; ?>" autocomplete="on" required>
										<input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" value="<?php echo $row['Surname']; ?>" autocomplete="on" required>
									</div>
								</div>
							</div>

							<small> Username</small>
							<div class="form-group">
								<input type="text" name="display_name" id="display_name" class="form-control input-lg" tabindex="3" value="<?php echo $row['Username']; ?>" required>
							</div>

							<small>Διεύθυνση</small>
							<div class="form-group">
								<input type="text" name="Street" id="Street" class="form-control input-lg" tabindex="3" value="<?php echo $row['AStreet']; ?>" required>
								<input type="text" name="Street_num" id="Street_num" class="form-control input-lg" tabindex="3" value="<?php echo $row['ANumber']; ?>" required>
							</div>
							<div>
								<input type="text" name="City" id="City" class="form-control input-lg" tabindex="3" value="<?php echo $row['ACity']; ?>" required>
							</div>
							<div class="form-group">
								<input type="text" name="country_name" id="country_name" class="form-control input-lg" tabindex="3" value="<?php echo $row['ACountry']; ?>" required>
							</div>

							<small>Email Address</small>
							<br>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" tabindex="4" autocomplete="on" size="47" value="<?php echo $row['Email']; ?>" required>
							</div>

							<small>Τηλέφωνο</small>
							<br>
							<div class="form-group">
								<input type="tel" name="phone" id="phone" class="form-control input-lg" tabindex="4" value="<?php echo $row['PrivatePhone']; ?>" required>
							</div>
							<div class="row">
								<small>Κωδικός</small>
								<br>
								<div class="form-group">
									<input type="password" name="old_password" id="old_password" class="form-control input-lg" tabindex="5" value="<?php echo $row['Password']; ?>" required pattern=".{6,}" readonly>
								</div>
								<div class="form-group">
									<input type="password" name="new_password" id="new_password" class="form-control input-lg" tabindex="5" value="<?php echo $row['Password']; ?>" required pattern=".{6,}">
								</div>
								<div class="form-group">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" value="<?php echo $row['Password']; ?>" required>
								</div>
							</div>
							<div class="row">
								<input type="submit" value="Αλλαγή" class="btn btn-primary btn-block btn-lg" tabindex="7">
							</div>
						</form>
						<?php

					mysqli_close($conn); 
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Custom Theme JavaScript -->

	<script>
		var password = document.getElementById("password"),
		confirm_password = document.getElementById("password_confirmation");
		function validatePassword() {
			if (password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_password.setCustomValidity('');
			}
		}
		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>

</div>

</body>
</html>
