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
    <script>
      var myCity = new google.maps.Circle({
        center : new google.maps.LatLng(35, 33),
        readius : 123000,
        strokeColor : "#0000FF",
        strokeOpacity : 0.8,
        strokeWeight : 2,
        fillColor : "#0000FF",
        fillOpacity : 0.5
      });
      myCity.setMap(map);

      var map;
      var src = 'https://www.google.com/maps/d/u/0/edit?mid=1iDLlxWD53t-qG5TVm4M2mHsYczU&ll=35.49561757750095%2C32.81524549352264&z=8';
      /**
       * Initializes the map and calls the function that loads the KML layer.
       */
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center : new google.maps.LatLng(-19.257753, 146.823688),
          zoom : 2,
          mapTypeId : 'terrain'
        });
        loadKmlLayer(src, map);
      }

      /**
       * Adds a KMLLayer based on the URL passed. Clicking on a marker
       * results in the balloon content being loaded into the right-hand div.
       * @param {string} src A URL for a KML file.
       */
      function loadKmlLayer(src, map) {
        var kmlLayer = new google.maps.KmlLayer(src, {
          suppressInfoWindows : true,
          preserveViewport : false,
          map : map
        });
        google.maps.event.addListener(kmlLayer, 'click', function(event) {
          var content = event.featureData.infoWindowHtml;
          var testimonial = document.getElementById('capture');
          testimonial.innerHTML = content;
        });
      }

      // Disable Google Maps scrolling
      // See http://stackoverflow.com/a/25904582/1607849
      // Disable scroll zooming and bind back the click event
      var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
      };
      var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
      };
      // Enable map zooming with mouse scroll when the user clicks the map
      $('.map').on('click', onMapClickHandler);
      var marker = new google.maps.Marker({
        map : map,
        position : new google.maps.LatLng(35, -33),
        title : 'Nicosia'
      });
      // Add circle overlay and bind to marker
      var circle = new google.maps.Circle({
        map : map,
        radius : 16093, // 10 miles in metres
        fillColor : '#AA0000'
      });
      circle.bindTo('center', marker, 'position');
    </script>

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
      }
      #content #mainwrap #tabs {
        border: 5px solid black;
        border-style: solid;
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
              <li>
                <a class="tab1" href="#divtab1" title="Tab1">Basic Characteristics</a>
              </li>
              <div>
                <li>
                  <a class="tabs" href="#tabs" title="Tab2">Extras1</a>
                </li>
              </div>
              <div>
                <li>
                  <a class="tabs" href="#tabs" title="Tab3">Extras2</a>
                </li>
              </div>
              <div>
                <li>
                  <a class="tabs" href="#tabs" title="Tab4">Extras3</a>
                </li>
              </div>
            </ul>

            <div style="clear:both"></div>
            <div id="divtab1" class="section">
              <div class="column col3">
                <h3 style="color: #c03e62;">Property Description</h3>
                <ul id="menu2">
                  <li style="color: #008c99">
                    <p>
                      Property #ID
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Area (square meters)
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Initial Price
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Estimated Price
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Final Price
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Objective Value/p>
                  </li>
                </ul>
              </div>
              <div class="column col5 pl-50">
                <h2 style="color: #c03e62;">Property Type</h2>
                <ul id="menu4">
                  <li style="color: #008c99">
                    <p>
                      For Sale/Rent
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Type
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Status
                    </p>
                  </li>
                </ul>
              </div>
              <div class="column col4 pl-40">
                <h2 style="color: #c03e62;">Location</h2>
                <ul id="menu5">
                  <li style="color: #008c99">
                    <p>
                      Country
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Region
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      Subregion
                    </p>
                  </li>
                  <li style="color: #008c99">
                    <p>
                      City
                    </p>
                  </li>
                </ul>
              </div>
              <div class="column col5 pl-50"></div>
            </div>
            <div id="tabs" class="section">
              <div class="column col3">
                <h1 style="color: #c03e62;">Features
                <br/>
                </h1>
                <span>
                  <ul id="menu6">
                    <li style="color: #008c99">
                      <p>
                        Floor
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        Bedrooms
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        Kitchens
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        Bathrooms
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        WC
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        Heat System
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        Parking
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        View
                      </p>
                    </li>
                  </ul>
              </div>
              <div class="column col4">
                <h1 style="color: #c03e62;">Building Information
                <br/>
                </h1>
                <span>
                  <ul id="menu7">
                    <li style="color: #008c99">
                      <p>
                        Floors
                      </p>
                    </li>
                    <li style="color: #008c99">
                      <p>
                        Frames
                      </p>
                    </li>
                  </ul>
                  <div id = "facilities">
                    <h1 style="color: #c03e62;">Facilities
                    <br/>
                    </h1>
                    <span>
                      <ul id="menu8">
                        <li style="color: #008c99">
                          <p>
                            For Students
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            Elevator
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            Swimming Pool
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            Solar System
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            Double Glasses
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            Storage Room
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            Balcony
                          </p>
                        </li>
                        <li style="color: #008c99">
                          <p>
                            View
                          </p>
                        </li>
                  </div>
              </div>
              <!-- Map -->
              <!-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417906.1679578008!2d32.79202249830512!3d35.08443270516032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1767ca494d55%3A0xbfa61172e2b992ff!2zzpvOtc-FzrrPic-Dzq_OsSwgzprPjc-Az4HOv8-C!5e0!3m2!1sel!2sus!4v1479281118979" -->
              <section id="map" class="map">

                <iframe width="50%" height="50%" frameborder="0" scrolling="no" marginheight="100" marginwidth="0" src="https://www.google.com/maps/d/u/0/embed?mid=1iDLlxWD53t-qG5TVm4M2mHsYczU"></iframe>
                <br />
                <small> <a href="https://www.google.com/maps/d/u/0/embed?mid=1iDLlxWD53t-qG5TVm4M2mHsYczU"></a> </small>
                </iframe>
              </section >
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
