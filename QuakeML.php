<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1" />
<title>Information about Earthquakes</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
	 <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">  
       
     <script type="text/javascript"  src="js/jquery-2.1.1.min.js"></script> 
     <script  type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="./js/ekko-lightbox.js"></script>

    <style>
        th, td {
        font-family: Cooper;
        font-size: 15px;
        text-align: center;
       }

       td {
        background-color: rgba(0,128,0, 0.3);
       }

       .container {
           padding-left: 25px;
           padding-right: 25px;
       }

       .hi {
        text-align: center;
        font-style: Cooper;
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
   <h2>"All Earthquakes And Disasters Are Warnings; There's Too Much Corruption In The World" - </h2>
   <h2>Aristotle</h2>
  </div>
 </div>
</section>
 </div>
</div>

<!-- save and manually save XML file to provide information about the earthquake details -->
<!-- The simplexml_load_file() function converts an XML document to an object-->
<?php
$url = 'https://earthquake.usgs.gov/fdsnws/event/1/query?format=quakeml&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00';
$xmlDoc = simplexml_load_file($url) or die("Error: Cannot create XML object");
?>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 class="text-center text-uppercase" style="font-size:30px;"><b>List Of Earthquakes: </b></h2>
    </div>
    <br/>

<div class="table-responsive-lg">
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr style="color:green; font-weight:700; font-size:16px;">
                <th><b>LOCATION</b></th>
                <th><b>CREATION TIME<b></th>
                <th><b>MAGNITUDE<b></th>
                <th><b>LATITUDE<b></th>
                <th><b>LONGITUDE<b></th>
                <th><b>DEPTH<b></th>
                <th><b>DISTANCE<b></th>
                <th><b>QUAKE MAP<b></th>
            </tr>
    </thead>
    <tbody>

    <!-- The foreach loop iterates/loops over the array and each value for the array element is assigned to $earth.
         The parameter is passed to a method and stored in a variable. 
         The values are fetched from the 
         "https://earthquake.usgs.gov/fdsnws/event/1/query?format=quakeml&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00"-->
    
    <?php foreach($xmlDoc->eventParameters->event as $earth): ?>

    <?php 
          $latitude = $earth->origin->latitude->value;
          $longitude =  $earth->origin->longitude->value;
          $magnitude = $earth->magnitude->mag->value;
    ?>
    <tr class="text-center">

      <!-- Display the location of the Earthquake.-->
      <td><?php echo $earth->description->text?></td>

      <!-- Display the creation time of the Earthquake.-->
      <td><?php echo $earth->creationInfo->creationTime?></td>

      <!-- Display the magnitude of the Earthquake.-->
      <td><?php echo $earth->magnitude->mag->value?></td>

      <!-- Display the latitude of the Earthquake.-->
      <td><?php echo $earth->origin->latitude->value?></td>

      <!-- Display the longitude of the Earthquake.-->
      <td><?php echo $earth->origin->longitude->value?></td>

      <!-- Display the depth of the Earthquake.-->
      <td><?php echo $earth->origin->depth->value?></td>

      <!-- Display the minimum distance of the Earthquake.-->
      <td><?php echo $earth->origin->quality->minimumDistance?></td>

      <!-- Display the exact location on map when the user clicks on the "Click Here..." button-->
      <td><?php echo '<a class="btn" href="QuakeMLMap.php?Latitude='.$latitude.'&Longitude='.$longitude.
      '&Magnitude='.$magnitude.'" >Click Here...</a>'."<br/>"?></td>

    </tr>

<!-- End of endforeach loop-->
<?php endforeach; ?>

   </tbody>
   </table>
  </div>
</div>

<!-- Count function to get the total number of earthquakes-->
   <?php
     //A new DOM document is created
     $xmlDoc = new DOMDocument();
     //xmlDoc will load the QuakeML file from the $url.
     $xmlDoc->load($url);
     //getElementByTagName returns a collection of all elements with a specified tag name (description).
     $description = $xmlDoc->getElementsByTagName("description");
     // count all earthquakes
     $total = $description->length;
     echo '<b>Total number of earthquakes: </b>';
     echo $total;

    ?>

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
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>
</html>