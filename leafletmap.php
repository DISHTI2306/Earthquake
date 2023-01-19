<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1" />
<title>Information about Earthquakes</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
   <!--<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
	 <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">  
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		  crossorigin="" />
       
     <script type="text/javascript"  src="js/jquery-2.1.1.min.js"></script>
     <script  type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="./js/ekko-lightbox.js"></script>
	 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
			integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
			crossorigin=""></script>
     
	<style>
		html, body {
			height: 100%;
			padding: 0;
			margin: 0;
		}

		#map {
			/* configure the size of the map */
			width: 100%;
			height: 100%;
		}
	</style>

</head>
<body>

<div class="top_box clearfix">
 <div class="top_box_inner_1 clearfix">
  <section id="header">
	<nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                
                </button>
                <a class="navbar-brand heading_tag" href="index.php"><i class="fa fa-spinner"></i>Earthquake </a>            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="tag_menu active_tab" href="index.php">HOME</a></li>   
                    <li><a class="tag_menu" href="QuakeML.php">QUAKEML</a></li>	
					<li><a class="tag_menu" href="GeoJson.php">GEOJSON</a></li> 
					<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    id="dropdown03">FUNCTIONALITIES<span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                    <li><a runat="server" class="dropdown-item"
                                        href="Ajaxsearch.php">QuakeML1</a></li>
                                    <li><a runat="server" class="dropdown-item"
                                        href="leafletmap.php">GeoJson1</a></li>
									<li><a runat="server" class="dropdown-item"
                                        href="GeoJson2.php">GeoJson2</a></li>
                                </ul>
                    </li>				
                </ul>
            </div>
            <!-- /.navbar-collapse -->
           
    </nav>
</section>
 </div>
 <div class="top_box_inner_2  clearfix">
  <section id="top" class="clearfix">
 <div class="top clearfix">
  <div class="top_main clearfix">
   <h2>"Natural disaster chooses no skin colour or status, it just picks anyone anytime" - </h2>
   <h2>Rsokho</h2>
  </div>
 </div>
</section>
 </div>
</div>

<br/>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 class="text-center text-uppercase" style="font-size:30px;"><b>Earthquake Details: </b></h2>
    </div>
    <br/>

<!-- Create a DOM element where the map will be displayed on the web page-->
<div id="map"></div>
	<script>
		// initialize Leaflet
		var map = L.map('map').setView({ lon: 0, lat: 0 }, 2);

		// add the OpenStreetMap tiles
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 15,
			attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
		}).addTo(map);

		//Nat Geo World Map
        var NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
        maxZoom: 16
        });
        //It will overide the tiles to the NatGeoWorldMap map
        NatGeoWorldMap.addTo(map);

		//show the scale bar on the lower left corner
		L.control.scale().addTo(map);

		var darshinee = 'https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.geojson';
		
		/*The L.geoJson() function is used to convert the GeoJSON coordinates to LatLng point, that is,
		  it accepts an object in GeoJSON format to display on the map*/
		var Geo = L.geoJson([], {
			
			/*onEachFeature() function is called on each created feature layer
			  with its style from GeoJSON file and it will bind the popup to the layer.*/
			onEachFeature: function (feature, layer) {

				var eq = feature.properties;
				var qe = feature.geometry;

				//It binds the popup to the marker click
				//Display the location, latitude, longitude and magnitude of the specific earthquake
				layer.bindPopup('Location: ' + '<b>' + eq.place + '</b>' + '<br/>' + 'Latitude: ' + '<b>' + qe.coordinates[0] +
           			' °S' + '</b>' + '<br/>' + 'Longitude: ' + '<b>' + qe.coordinates[1] + ' °E' + '</b>' + '<br/>' + 'Magnitude: ' + '<b>' + eq.mag + ' km' + '</b>');
			},
			// function for creating layers for GeoJSON point features
			// GeoJSON layer is added to the map once the file is loaded
			pointToLayer: function (feature, latlng) {
				
				var color, mag, radius, weight;
				//Get the location, latitude, longitude and magnitude of the specific earthquake out of the loaded JSON
				//if the magnitude is not null, it will display the size/radius of the circle which depends on the magnitude of the earthquake
				//for example: highest magnitude will display bigger circle
				mag = feature.properties.mag;
				if (mag != null) {
					color = 'black';
					//highest value
					radius = 2 * Math.max(mag, 1);
					weight = 0.7;
				}
				//The L.circleMarker() instantiates the circle marker given the geographical point and  an options object.
				return L.circleMarker(latlng, {
					color: color,
					radius: radius,
					weight: weight
				});
			}
		}).addTo(map);

		/*The fetch command is entered to load the json file; 
		and then the path ("darshinee") of json file is entered */
		fetch(darshinee, {
			method: 'GET'
		})
		    //A response.json() method is called to return a JSON object of the result.
			.then(response => response.json())
			.then(json => {
				// add more GeoJSON data
				Geo.addData(json);
			});

	</script>

<br/>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <h3>Earthquake</h3>
      <p>It is not light that we need, but fire; it is not the gentleshower,
		but thunder. We need the storm, the whirldwind, and the earthquake - Federick Douglass 
	  </p>
      <div class="social-links">
	        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>EarthQuake</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Dishti</a>
      </div>
    </div>
  </footer>

</body>
</html>