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
       th{
        font-family: 'Papyrus';
        font-weight: bolder;
        font-size: 13px;
        text-align: center;
       }
       
       td {
        font-family: Cooper;
        font-size: 15px;
        background-color: rgba(0,128,0, 0.3);
        text-align: center;
       }

       .container {
           padding-left: 25px;
           padding-right: 25px;
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

<!-- save and manually save JSON file to provide information about the earthquake details -->
<!-- The json_decode() is an inbuilt function which is used to decode  or convert a JSON object to a PHP object-->
<?php
$readJSONFile = file_get_contents("https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00");
$readJSONFile = json_decode($readJSONFile, true);
?>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 class="text-center text-uppercase" style="font-size:30px;"><b>List Of Earthquakes: </b></h2>
    </div>
    <br/>

 <div class="table-responsive-md">
  <div class="container">
    <table class="table table-bordered">
    <thead>
        <tr style="color:green; font-weight:700; font-size:16px;">
            <th><b>LOCATION</b></th>
			<th><b>CODE</b></th>
            <th><b>MAGNITUDE</b></th>
            <th><b>LATITUDE</b></th>
            <th><b>LONGITUDE</b></th>
            <th><b>ID</b></th>
        </tr>
    </thead>
    <tbody>

    <!-- The foreach loop iterates/loops over the array and each value for the array element is assigned to $earthQ.
         The parameter is passed to a method and stored in a variable. 
         The values are fetched from the 
         "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00-->
    <?php foreach($readJSONFile["features"] as $dishti): ?>

    <tr class="text-center">
      <!-- Display the description of the Earthquake.-->
      <td><?php echo $dishti["properties"]["place"]?></td>

      <!-- Display the code of the Earthquake.-->
      <td><?php echo $dishti["properties"]["code"]?></td>

      <!-- Display the magnitude of the Earthquake.-->
      <td><?php echo $dishti["properties"]["mag"]?></td>

      <!-- Display the latitude of the Earthquake.-->
      <td><?php echo $dishti["geometry"]["coordinates"][0]?></td>

      <!-- Display the longitude of the Earthquake.-->
      <td><?php echo $dishti["geometry"]["coordinates"][1]?></td>

      <!-- Display the ID of the Earthquake.-->
      <td><?php echo $dishti["id"]?></td>

    </tr>

<!-- End of endforeach loop-->
<?php endforeach; ?>

  </tbody>
  </table>
  </div>
</div>

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