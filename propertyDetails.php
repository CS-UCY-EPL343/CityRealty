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

		<title>City Realty</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

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
				background-color: #ffffff;
			}
  #content #mainwrap #extra .column.col3 #title2 h2 {
	 font-family: Arial, Helvetica, sans-serif;
   font-size: 26em;
	 font-style: normal;
	 line-height: normal;
	 font-weight: bold;
	 font-variant: normal;
}
  #content #mainwrap #extra .column.col3 #title3 h2 {
	 font-family: Arial, Helvetica, sans-serif;
	 font-size: 26em;
	 font-style: normal;
	 line-height: normal;
	 font-weight: bold;
	 font-variant: normal;
}
  #content #mainwrap #extra .column.col3 #title4 h2 {
	 font-family: Arial, Helvetica, sans-serif;
	 font-size: 26em;
	 font-style: normal;
	 line-height: normal;
	 font-weight: bold;
	 font-variant: normal;
}
  #content #mainwrap #profile .column.col3 #title2 h2 {
	 font-size: large;
	 font-style: normal;
	 line-height: normal;
   font-weight: bold;
	 font-variant: normal;
	 text-decoration: underline;
}
#content #mainwrap #profile{
  border: 10px solid black;
  border-style: solid;
}
#content #mainwrap #extra{
  border: 10px solid black;
  border-style: solid;
}
#menu {
    width: 500px;
    border: 1px solid black;
    overflow: hidden; /* add this to contain floated children */
}
#menu #li #l2 {
    border: 1px solid green;
    float: left; /* add this */
}
#menu #li #l1 {
    width: 300px;
    float:left; /* add this */
    border: 1px solid red;
}
	</style>

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-fixed-top " role="navigation">

			<div class="container-fluid" style = "background-color:#ffffff">
				<div class="navbar-header">
					<a class="navbar-brand page-scroll" href="index.php"> <span class="light" style="color: #008c99">Home</span> </a>
				</div>

				<ul class="nav navbar-nav ">

					<li class="dropdown">
						<a class="page-scroll " href="#services" style="color: #008c99">Buy</span></a>

					</li>
					<li class="dropdown">
						<a class="page-scroll " href="#services" style="color: #008c99" >Rent </span></a>

					</li>
					<li class="dropdown">
						<a class="page-scroll " href="#services" style="color: #008c99">Sell</span></a>

					</li>
					<li>
						<a class="page-scroll " href="#services" style="color: #008c99">View Properties</a>
					</li>

					<li>
						<a class="page-scroll" href="#contact" style="color: #008c99">Contact Us</a>
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
						<a href="#" style="color: #008c99"><img src="img/Greece.png"> Ελληνικά</a>

					</li>

					<li>
						<a href="#" style="color: #008c99"><img src="img/United Kingdom(Great Britain).png"> English</a>

					</li>

				</ul>
			</div>
			<!-- /.container -->
		</nav>

		<!-- Page Content -->
		<div class="container"style = "background-color:#ABABAB; border:3px solid #666666;">

			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">Property <small style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">#1</small></h1>
					<ol class="breadcrumb">
						<li>
							<a href="index.php" style="color: #008c99">Home</a>
						</li>
						<li>
							<a href="propertyList.php" style="color: #008c99">Property List</a>
						</li>
						<li class="active" style="color: #008c99">
							Property
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->

			<!-- Portfolio Item Row -->
			<div class="row">

				<div class="col-md-8">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img class="img-responsive" src="img/properties/3.jpg" alt="">
							</div>
							<div class="item">
								<img class="img-responsive" src="img/properties/4.jpg" alt="">
							</div>
							<div class="item">
								<img class="img-responsive" src="img/properties/5.jpg" alt="">
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
					</div>
				</div>

      <div class="col-md-4">
					<h3 style="color: #c03e62;">Property Description</h3>
					<p style="color: #008c99">
						Description ...............  
					</p>
           <a><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i> Share</a>
      </div>
          
		<div style="clear:both"></div>
		<div id="content">
    <div id="mainwrap">
			   <div id="menu">
            <div id="l1">
				      <li><a class="profile" href="#profile" title="Profile">Basic Characteristics</a></li>
            </div>
            <div id="l2">
              <li><a class="extra" href="#extra" title="Extra">Extras</a></li>
            </div>
			   </div>
      <div style="clear:both"></div> 
			<div id="profile" class="section">
			    <div class="column col3">
			     <h3 style="color: #c03e62;">Property Description</h3>
            <ul id="menu2">
				      <li style="color: #008c99"><p>Property #ID</p></li>
              <li style="color: #008c99"><p>Area (square meters) </p></li>
              <li style="color: #008c99"><p>Initial Price</p></li>
              <li style="color: #008c99"><p>Estimated Price</p></li>
              <li style="color: #008c99"><p>Final Price</p></li>              
              <li style="color: #008c99"><p>Objective Value/p></li>
			      </ul>
			</div>
      <div class="column col5 pl-50">
          <h2 style="color: #c03e62;">Property Type</h2>
          <ul id="menu4">
				    <li style="color: #008c99"><p>For Sale/Rent</p></li>
				    <li style="color: #008c99"><p>Type</p></li>
            <li style="color: #008c99"><p>Status</p></li>
			    </ul>
      </div>
      <div class="column col4 pl-40">
          <h2 style="color: #c03e62;">Location</h2>
          <ul id="menu5">
				    <li style="color: #008c99"><p>Country</p></li>
				    <li style="color: #008c99"><p>Region</p></li>
            <li style="color: #008c99"><p>Subregion</p></li>
            <li style="color: #008c99"><p>City</p></li>
			    </ul>
		  </div>
				<div class="column col5 pl-50">
        </div>
			</div>
			<div id="extra" class="section">
				<div class="column col3">
          <h1 style="color: #c03e62;">Features<br/></h1>
       	  <span>
          <ul id="menu6">
				     <li style="color: #008c99"><p>Floor</p></li>
				     <li style="color: #008c99"><p>Bedrooms</p></li>
             <li style="color: #008c99"><p>Kitchens</p></li>
             <li style="color: #008c99"><p>Bathrooms</p></li>
             <li style="color: #008c99"><p>WC</p></li>
             <li style="color: #008c99"><p>Heat System</p></li>
             <li style="color: #008c99"><p>Parking</p></li>
             <li style="color: #008c99"><p>View</p></li>
			    </ul>
			</div>
			<div class="column col4">
        <h1 style="color: #c03e62;">Building Information<br/></h1>
        <span>
				<ul id="menu7">
			      <li style="color: #008c99"><p>Floors</p></li>
				    <li style="color: #008c99"><p>Frames</p></li>
				</ul>
			<div id = "facilities">
       <h1 style="color: #c03e62;">Facilities<br/></h1>
       <span>
        <ul id="menu8">
           <li style="color: #008c99"><p>For Students</p></li>
				   <li style="color: #008c99"><p>Elevator</p></li>
           <li style="color: #008c99"><p>Swimming Pool</p></li>
           <li style="color: #008c99"><p>Solar System</p></li>
           <li style="color: #008c99"><p>Double Glasses</p></li>
           <li style="color: #008c99"><p>Storage Room</p></li>
           <li style="color: #008c99"><p>Balcony</p></li>
           <li style="color: #008c99"><p>View</p></li>
      </div>
    </div>
  </div>
 </div> 
</div>

			<!-- /.row -->

			<!-- Related Projects Row -->
			<div class="row">

				<div class="col-lg-12">
					<h2 class="page-header" style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">Related Properties</h2>
				</div>

				<div class="col-sm-3 col-xs-6">
					<a href="#"style="color: #008c99"> <img class="img-responsive img-hover img-related" src="img/properties/1.jpg" alt="">Property #1</a>
				</div>

				<div class="col-sm-3 col-xs-6">
					<a href="#"style="color: #008c99"> <img class="img-responsive img-hover img-related" src="img/properties/2.jpg" alt="">Property #2</a>
				</div>

				<div class="col-sm-3 col-xs-6">
					<a href="#"style="color: #008c99"> <img class="img-responsive img-hover img-related" src="img/properties/7.jpg" alt="">Property #3</a>
				</div>

				<div class="col-sm-3 col-xs-6">
					<a href="#"style="color: #008c99"> <img class="img-responsive img-hover img-related" src="img/properties/8.jpg" alt="">Property #4</a>
				</div>

			</div>
			<!-- /.row -->

			<hr>


		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
			$(document).ready(function() {
			    $(".section").not(":first").hide();
			    $("#menu li:first").addClass("active").show();

			    $("#menu li").click(function() {
			        $("#menu li.active").removeClass("active");
			        $(this).addClass("active");
			        $(".section").slideUp();
			        $($('a',this).attr("href")).slideDown('slow');

			        return false;
			    });

			});
		</script>


	</body>

</html>
