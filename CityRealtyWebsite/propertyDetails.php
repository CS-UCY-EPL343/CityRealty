<?php
session_start();

$reid = $_GET['reid'];
$conn = mysqli_connect("localhost", "CityRealty", "QKSH7XJws7MCpxWR", "CityRealty");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn, "SET NAMES utf8");
$sql = "SELECT * FROM RealEstate WHERE RealEstateNo=$reid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['ACity'] == "?e???s?a") {
  $sql2 = "SELECT RegionName FROM CityNicosia WHERE RegionCode=" . $row['ARegionCode'];
} elseif ($row['ACity'] == "??f??") {
  $sql2 = "SELECT RegionName FROM CityPafos WHERE RegionCode=" . $row['ARegionCode'];
} elseif ($row['ACity'] == "????a?a") {
  $sql2 = "SELECT RegionName FROM CityLarnaca WHERE RegionCode=" . $row['ARegionCode'];
} elseif ($row['ACity'] == "?e�es??") {
  $sql2 = "SELECT RegionName FROM CityLimassol WHERE RegionCode=" . $row['ARegionCode'];
} elseif ($row['ACity'] == "?��???st??") {
  $sql2 = "SELECT RegionName FROM CityFamagusta WHERE RegionCode=" . $row['ARegionCode'];
}
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$sql3 = "SELECT ViewNo FROM REView WHERE RealEstateNo=$reid";
$result3 = mysqli_query($conn, $sql3);
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
    #content #mainwrap #tabs .column.col3 #title2 #title3 #title4 h2 {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 26em;
      font-style: normal;
      line-height: normal;
      font-weight: bold;
      font-variant: normal;
    }
    #content #mainwrap #divtab1 .column.col3 #title2 h2 {
      font-size: large;
      font-style: normal;
      line-height: normal;
      font-weight: bold;
      font-variant: normal;
      text-decoration: underline;
    }
    #content #mainwrap #divtab1 {
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
    }
    .value {
      color: #333333;
      text-decoration: none;
    }
    table {
      border: 0px solid black;
      padding: 5px;
      text-align: left;
      width: 30%;
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
    #divtab1 #tabs {
      overflow-y: scroll;
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
          <a class="page-scroll" href="#services" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/sale22.png">Sale</span></a>

        </li>
        <li>
          <a class="page-scroll " href="#services" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/rent22.png">Rent </span></a>

        </li>
        <li>
          <a class="page-scroll " href="AddProperty.html" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/sell22.png">Sell</span></a>

        </li>
        <li>
          <a class="page-scroll " href="index.php#searchREForm" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/search2.png">Search</a>
        </li>

        <li>
          <a class="page-scroll" href="index.php#contactForm" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/contactUs2.png">Contact Us</a>
        </li>

        <li>
          <a class="page-scroll" href="about.php" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/group-chat.png"> About Us</a>
        </li>

        <?php
        if (isset($_SESSION['errormessage'])) {
          echo "<script type='text/javascript'>myFunction();</script>";
          unset($_SESSION['errormessage']);
        }
        if (isset($_SESSION['errorlogin'])) {
          echo "<script type='text/javascript'>myFunction2();</script>";
          unset($_SESSION['errorlogin']);
        }
        if (isset($_SESSION['signedup'])) {
          echo "<script type='text/javascript'>myFunction3();</script>";
          unset($_SESSION['signedup']);
        }
        ?>
      </ul>

      <ul class="nav navbar-nav navbar-right">

        <?php
        if (!isset($_SESSION['id'])) {
          echo "
          <li class='dropdown'>
            <a href='javascript:void(0)' class='dropbtn' onclick='DropDownFunction()' style='color: #FFCC00'><span class='glyphicon glyphicon-user' aria-hidden='true'></span> SignUp</a>
            <div class='dropdown-content' id='myDropdown'>
              <a href='#SignUp-modal' data-toggle='modal' data-target='#my-modal-lg' style='color: #FFCC00'>As A Client</a>
              <a class='page-scroll' href='#ExBroker-modal' data-toggle='modal' data-target='#ExBromodal-lg' style='color: #FFCC00'>As An Agent </span></a>
            </div>
          </li>
          <li>

            <a href='#LogIn-modal' data-toggle='modal' data-target='#my-logInmodal-sm' style='color: #FFCC00'>Log in</a>";
        } else {
          echo "<li><a href='#' style='color: #FFCC00'>" . $_SESSION['id'] . "</a></li><li>
            <a href='logout_inc.php' style='color: #FFCC00'>Log Out</a>
          </li>";
        }
        ?>
        <li>
          <a href="#" style="color: #FFCC00"><img src="img/menu/Greece.png"> ????????</a>
        </li>

        <li>
          <a href="#" style="color: #FFCC00"><img src="img/menu/United Kingdom(Great Britain).png"> English</a>
        </li>
      </ul>
    </div>
    <!-- /.container -->
  </nav>


  <!-- Page Content -->
  <div class="container" style = "background-color:#ABABAB; border:3px solid #666666;">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header" style="color: #c03e62;text-shadow: 1px 1px 1px #000000;">?????t?<small style="color: #c03e62;text-shadow: 1px 1px 1px #000000;"> #<?php echo $_GET['reid']; ?></small></h1>
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
          <ul id="menu">
            <div>
              <li>
                <a class="tabs" href="#divtab1" title="Tab1">G?????S<br>?????F????S</a>
              </li>
            </div>
            <div>
              <li>
                <a class="tabs" href="#tabs" title="Tab2">?????<br>?????????S????</a>
              </li>
            </div>
            <div>
              <li>
                <a class="tabs" href="#tabs" title="Tab3"></a>
              </li>
            </div>
          </ul>
        </div>

        <div style="clear:both"></div>
        <div id="divtab1" class="section">
          <div class="column col3">
            <h3 class="fieldGroup">?as???? ?????f???e?</h3>
            <ul id="menu2">
              <li style="color: #008c99">?as???? ?????f???e? ?????t??
                <table>
                  <tr>
                    <th class="field">??d???? ?????t??</th>
                    <th><label class="value" id="RealEstateNo"><?php echo $row['RealEstateNo']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field" id="Category">?at?????a</th>
                    <th><label class="value"><?php echo $row['Category']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">S??p?? ????af?? ?????t??</th>
                    <th><label class="value" id="RegistrationPurpose"><?php echo $row['RegistrationPurpose']; ?></label></th>
                  </tr>
                </table>
              </li>

              <li style="color: #008c99">????�?t???? ?????f???e?
                <table>
                  <tr>
                    <th class="field">??�?</th>
                    <th><label class="value" id="Price"><?php echo $row['Price']; ?></label></th>
                    <th><label class="value" id="Currency"><?php echo $row['Currency']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">?��ad?? (t.�.)</th>
                    <th><label class="value" id="AreaTM"><?php echo $row['AreaTM']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">F?? (%)</th>
                    <th><label class="value" id="VAT"><?php echo $row['VAT']; ?></label></th>
                  </tr>
                </table>
              </li>
            </ul>

            <h3 class="fieldGroup">Ge????? ?ept?�??e?e?</h3>
            <ul id="menu2">
              <li style="color: #008c99">Ge????? p????f???e? s?et??? �e t? s???e???�??? a????t?
                <table>
                  <tr>
                    <th class="field">?�e??�???a ?ata????s??</th>
                    <th><label class="value" id="DateRegistered"><?php echo $row['DateRegistered']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">??a?es?�?t?ta ap?</th>
                    <th><label class="value" id="AvailableFrom"><?php echo $row['AvailableFrom']; ?></label></th>
                  </tr>
                </table>
              </li>
            </ul>

            <h3 class="fieldGroup">??p??es?a</h3>
            <ul id="menu2">
              <li style="color: #008c99">
                ??p??es?a a????t??
                <table>
                  <tr>
                    <th class="field">????</th>
                    <th><label class="value" id="ACity"><?php echo $row['ACity']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">?e?????</th>
                    <th><label class="value" id="ARegion"><?php echo $row2['RegionName']; ?></label></th>
                  </tr>
                </table>
              </li>
            </ul>

            <!-- New Map Code -->
            <div class="row">
              <div class="small-12 columns" >
                <section id="map">
                  <h3 class="fieldGroup"><i class="fa fa-map-marker fieldGroup"></i> ???t?? ??p??es?a? <small class="hide" itemscope itemtype="http://schema.org/GeoCoordinates"><span class="latitude" itemprop="latitude">37.5177279637819</span>, <span class="longitude" itemprop="longitude">22.3811034455078</span></small></h3>
                  <script>
                    function initialize() {
                      var image = new google.maps.MarkerImage('/wp-content/themes/omega/img/marker.png', new google.maps.Size(48, 32), new google.maps.Point(0, 0), new google.maps.Point(24, 32));
                      var styles = [{
                        "stylers" : [{
                          "lightness" : -5
                        }, {
                          "saturation" : -39
                        }, {
                          "hue" : "#ff8800"
                        }]
                      }, {
                        "featureType" : "road",
                        "elementType" : "geometry",
                        "stylers" : [{
                          "lightness" : 100
                        }, {
                          "visibility" : "simplified"
                        }]
                      }, {
                        "featureType" : "road",
                        "stylers" : [{
                          "visibility" : "on"
                        }]
                      }, {
                        "featureType" : "water",
                        "stylers" : [{
                          "hue" : "#0077ff"
                        }, {
                          "saturation" : -70
                        }, {
                          "visibility" : "simplified"
                        }, {
                          "lightness" : -51
                        }]
                      }, {
                        "featureType" : "poi",
                        "stylers" : [{
                          "visibility" : "simplified"
                        }]
                      }, {
                        "featureType" : "road.highway",
                        "elementType" : "labels.icon",
                        "stylers" : [{
                          "visibility" : "off"
                        }]
                      }];
                      var myLatlng = new google.maps.LatLng(37.5177279637819, 22.3811034455078);
                      var mapOptions = {
                        zoom : 12,
                        center : myLatlng,
                        scrollwheel : false,
                        mapTypeControl : true,
                        mapTypeControlOptions : {
                          style : google.maps.MapTypeControlStyle.DROPDOWN_MENU
                        },
                        zoomControl : true,
                        zoomControlOptions : {
                          style : google.maps.ZoomControlStyle.SMALL
                        },
                        styles : styles
                      }
                      var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                      var marker = new google.maps.Marker({
                        position : myLatlng,
                        map : map,
                        title : '?????t? #477537',
                        options : {
                          draggable : false,
                          icon : image
                        },
                      });
                      google.maps.event.addDomListener(window, 'resize', initialize);
                    }

                    function loadScript() {
                      var script = document.createElement('script');
                      script.type = 'text/javascript';
                      script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en&' + 'callback=initialize';
                      document.body.appendChild(script);
                    }


                    window.onclick = loadScript;
                  </script>
                  <div id="map_canvas" style="width:100%;height:293px;background:#DDDDDD;"></div>
                </section>
              </div>
            </div>
            <!-- End of Map Section -->

          </div>

        </div>

        <div style="clear:both"></div>
        <div id="tabs" class="section">
          <div class="column col3">

            <h3 class="fieldGroup">Ge???? pe????af?</h3>
            <ul id="menu6">
              <li style="color: #008c99">
                St???e?a s?et??? �e t? ?e???? pe????af? a????t??
                <table>
                  <tr>
                    <th class="field">?at?stas? a????t??</th>
                    <th><label class="value" id="RealEstateStatus"><?php echo $row['RealEstateStatus']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">T?a</th>
                    <th><label class="value" id="View"><?php
                      while ($row3 = mysqli_fetch_assoc($result3)) { $sql4 = "SELECT Description FROM REViewChoices WHERE ViewNo=" . $row3['ViewNo'];
                        $result4 = mysqli_query($conn, $sql4);
                        echo $row['Description'] . " ";
                      }
 ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">G???a??</th>
                    <th><label class="value" id="Corner"><?php
                      if ($row['Corner'] == 1)
                        echo "?a?";
                      else
                        echo "???";
 ?></label></th>
                  </tr>
                </table>
              </li>
            </ul>

            <h3 class="fieldGroup">?ept?�??e?e?</h3>
            <ul id="menu6">
              <li style="color: #008c99">
                ?ept?�??e?e? s?et??? �e t? a????t?
                <table>
                  <tr>
                    <th class="field">?p?????/???e??</th>
                    <th><label class="value" id="MortgageLoan"><?php echo $row['MortgageLoan']; ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">??t???</th>
                    <th><label class="value" id="RegistartionTitle"><?php
                      if ($row['RegistrationPurpose'] == 1)
                        echo "?a?";
                      else
                        echo "???";
 ?></label></th>
                  </tr>
                  <tr>
                    <th class="field">??t?pa???? - a?ta??a??</th>
                    <th><label class="value" id="ConsiderationExchange"><?php
                      if ($row['ConsiderationExchange'] == 1)
                        echo "?a?";
                      else
                        echo "???";
 ?></label></th>
                  </tr>
                </table>
              </li>
            </ul>

          </div>

          <div class="column col4">
            <h3 class="fieldGroup"></h3>
            <ul id="menu7"></ul>
          </div>
          <!-- </div> -->

          <!-- Insert new section -->

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
      $("#menu #li:first").addClass("active").show();
      $("#menu li").click(function() {
        $("#menu li.active").removeClass("active");
        $(this).addClass("active");
        $(".section").slideUp();
        $($('a', this).attr("href")).slideDown('slow');
        return false;
      });
    });
  </script>

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
            �
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
            �
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
            <div class="form-group">
              <div class="col-sm-offset-0 col-sm-9">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"/>
                    Remember me 
                  </label>
                </div>
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
            <a href="https://el-gr.facebook.com/"><img src="img/facebookSI.png"></a>
            <a href="https://accounts.google.com/ServiceLogin?hl=EN#identifier"><img src="img/loginGoogle.png"></a>
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
            �
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
            <small>DATE OF BIRTH  :</small>
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
