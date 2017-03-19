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
            echo "
          <li>
            <a href='#' style='color: #2F4F4F'>" . $_SESSION['id'] . "</a>
          </li>
          <li>
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
            <ul id="menu">
              <div>
                <li>
                  <a class="tabs" href="#divtab1" title="Tab1">Γενικες
                  <br>
                  Πληροφοριες</a>
                </li>
              </div>
              <div>
                <li>
                  <a class="tabs" href="#tabs" title="Tab2">Κοινα
                  <br>
                  Χαρακτηριστικα</a>
                </li>
              </div>
              <div>
                <li>
                  <a class="tabs" href="#tabs" title="Tab3"></a>
                </li>
              </div>
            </ul>

            <div style="clear:both"></div>
            <div id="divtab1" class="section">
              <div class="column col3">
                <h3 class="fieldGroup">Βασικές πληροφορίες</h3>
                <ul id="menu2">
                  <li style="color: #008c99">
                    Βασικές πληροφορίες ακινήτου
                    <table>
                      <tr>
                        <th class="field">Κωδικός ακινήτου</th>
                        <th><label class="value" id="RealEstateNo">12345678</label></th>
                      </tr>
                      <tr>
                        <th class="field" id="Category">Κατηγορία</th>
                        <th><label class="value">Γη</label></th>
                      </tr>
                      <tr>
                        <th class="field">Σκοπός εγγραφής ακινήτου</th>
                        <th><label class="value" id="RegistrationPurpose">Πώληση</label></th>
                      </tr>
                    </table>
                  </li>

                  <li style="color: #008c99">
                    Αριθμητικές Πληροφορίες
                    <table>
                      <tr>
                        <th class="field">Τιμή</th>
                        <th><label class="value" id="Price">450,000</label><label class="value" id="Currency">EUR</label></th>
                      </tr>
                      <tr>
                        <th class="field">Εμβαδόν (τ.μ.)</th>
                        <th><label class="value" id="AreaTM">300</label></th>
                      </tr>
                      <tr>
                        <th class="field">ΦΠΑ (%)</th>
                        <th><label class="value" id="VAT">0.19</label></th>
                      </tr>
                    </table>
                  </li>
                </ul>

                <h3 class="fieldGroup">Γενικές Λεπτομέρειες</h3>
                <ul id="menu2">
                  <li style="color: #008c99">
                    Γενικές πληροφορίες σχετικά με το συγκεκριμένο ακίνητο
                    <table>
                      <tr>
                        <th class="field">Ημερομηνία Καταχώρισης</th>
                        <th><label class="value" id="DateRegistered">07/07/2007</label></th>
                      </tr>
                      <tr>
                        <th class="field">Διαθεσιμότητα από</th>
                        <th><label class="value" id="AvailableFrom">07/08/2007</label></th>
                      </tr>
                    </table>
                  </li>
                </ul>

                <h3 class="fieldGroup">Τοποθεσία</h3>
                <ul id="menu2">
                  <li style="color: #008c99">
                    Τοποθεσία ακινήτου
                    <table>
                      <tr>
                        <th class="field">Πόλη</th>
                        <th><label class="value" id="ACity">Λευκωσία</label></th>
                      </tr>
                      <tr>
                        <th class="field">Περιοχή</th>
                        <th><label class="value" id="ARegion">Άγιος Δομέτιος</label></th>
                      </tr>
                    </table>
                  </li>
                </ul>

                <!-- New Map Code -->
                <div class="row">
                  <div class="small-12 columns" >
                    <section id="map">
                      <h3 class="fieldGroup"><i class="fa fa-map-marker fieldGroup"></i> Χάρτης Τοποθεσίας <small class="hide" itemscope itemtype="http://schema.org/GeoCoordinates"><span class="latitude" itemprop="latitude">37.5177279637819</span>, <span class="longitude" itemprop="longitude">22.3811034455078</span></small></h3>
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
                            title : 'Ακίνητο #477537',
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

                <h3 class="fieldGroup">Γενική περιγραφή</h3>
                <ul id="menu6">
                  <li style="color: #008c99">
                    Στοιχεία σχετικά με τη γενική περιγραφή ακινήτου
                    <table>
                      <tr>
                        <th class="field">Κατάσταση ακινήτου</th>
                        <th><label class="value" id="RealEstateStatus">Άριστη</label></th>
                      </tr>
                      <tr>
                        <th class="field">Θέα</th>
                        <th><label class="value" id="View">Υπέροχη, Κεντρική, Πάρκο</label></th>
                      </tr>
                      <tr>
                        <th class="field">Γωνιακό</th>
                        <th><label class="value" id="RealEstateStatus">Ναι</label></th>
                      </tr>
                    </table>
                </ul>

                <h3 class="fieldGroup">Λεπτομέρειες</h3>
                <ul id="menu6">
                  <li style="color: #008c99">
                    Λεπτομέρειες σχετικά με το ακίνητο
                    <table>
                      <tr>
                        <th class="field">Υποθήκη/Δάνειο</th>
                        <th><label class="value" id="MortgageLoan">Όχι</label></th>
                      </tr>
                      <tr>
                        <th class="field">Τίτλος</th>
                        <th><label class="value" id="RegistartionTitle">Ναι</label></th>
                      </tr>
                      <tr>
                        <th class="field">Αντιπαροχή - ανταλλαγή</th>
                        <th><label class="value" id="ConsiderationExchange">Ναι</label></th>
                      </tr>
                    </table>
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

  </body>

</html>
