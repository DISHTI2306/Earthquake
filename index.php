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
   <h2>"It takes an earthquake to remind us that we walk on the crust of an unfinished planet" - </h2>
   <h2>Charles Kuralt</h2>
  </div>
 </div>
</section>
 </div>
</div>

<!-- Information section -->
<div class="factor_main clearfix">
<section id="center_1" class="clearfix">
 <div class="center_1 clearfix">
  <div class="col-sm-6 center_1_left clearfix">
   <div class="center_1_left_inner">
    <h2><span class="runner">Information about </span>Earthquake: </h2>
	<p>Earthquake is a sudden and violet shaking of the ground, causing great destruction, as a result of movements within the Earth's crust. 
		It occurs when two blocks of earth abruptly collide with each other. The location below the earth's surface
		where the earthquake starts is known as the hypocenter, and the location above it on the surface of the earth is known as the epicenter. </p>
	<p>While the edges of faults are attached together, and the rest of the block is moving, and hence, the energy would cause the blocks to 
		collide with one another is being stored up. When the force of the moving blocks surpasses the friction of the fault's sharp edges, 
		it unstuck and all the stored energy is released. The energy radiates outward from the fault in all directions in the form of seismic.</p>
	<h5><a href="https://jimproctor.us/archive/envsalums/hannahsmay/thesis/situating-earthquake-literature/">CHECK MORE</a></h5>
   </div>
  </div>
  <div class="col-sm-6 center_1_right clearfix">
   <div class="center_1_right_inner">
         <p><img src="img/info.jpg" width="100%" /></p>
   </div>
  </div>
 </div>
</section>
</div>
<!-- /information section -->

<!-- Type of earthquake section -->
<h4>The two main types of earthquakes are as follows: </h4>
<section id="Campaigns_2" class="clearfix">
	<div class="center_1 clearfix">
	 <div class="col-sm-5 center_1_left clearfix">
	  <div class="center_1_left_inner">
	   <h2><span class="runner">Tec</span>tonic Earthquake</h2>
	   <p>The earth's crust is composed of loose, cracked fragments of land known as the tectonic plates which are capable 
		of moving slowly and gradually. It is generated by the movement of the tectonic plates when energy is accumulated within
	    plate boundary zones which are discharged. </p>
	  </div>
	 </div>
	 <div class="col-sm-7 center_1_right clearfix">
	  <div class="center_1_right_inner">
	   <p><img src="img/tectonic.jpg" width="60%"/></p>
	  </div>
	 </div>
	</div>
   </section>
   <section id="Campaigns_2" class="clearfix">
	<div class="center_1 clearfix">
	 <div class="col-sm-5 center_1_left clearfix">
	  <div class="center_1_left_inner">
	   <h2><span class="runner">Vol</span>canic Earthquake</h2>
	   <p>It is generated by the abrupt opening of the channels in crustal rocks, 
		excessive accumulation of gas pressure in the crust, rapid changes of motion of
	    magma, roof collapses of subterranean channels emptied of magma.</p>
	  </div>
	 </div>
	 <div class="col-sm-7 center_1_right clearfix">
		<div class="center_1_right_inner">
		 <p><img src="img/volcanic.jpg" width="60%"/></p>
		</div>
	   </div>
	</div>
   </section>
   <!-- /Type of earthquake section -->

   <!-- Countries section -->
   <h5>Some countries where earthquakes occured: </h5>
      <h6>China, Indonesia, Iran, Turkey, Japan, Peru, United States, Italy, Afghanistan, India, Greece and Mexico</h6>
   <section id="gallery_2" class="clearfix">
	<div class="gallery_2 clearfix">
	 <div class="gallery clearfix">
	  <div class="gallery_right clearfix">
	   <div class="gallery_right_inner">
		<div class="col-sm-12 box">
							 <div class="col-sm-4 box_left_new">
							  <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							   <div class="panel panel-default">
								   <div class="panel-body">
									   <a href="img/500/1.jpg" title="Earthquake" class="zoom" data-title="Earthquake" 
									   data-footer="In an earthquake, i shouldn't run out of the house - I should run into it - Tony Danza
									   " data-type="image" data-toggle="lightbox">
										   <img src="img/3.jpg" width="100" height="100" alt="Earthquake">
									   </a>
								   </div>
							   </div>
						   </article></div>
							 </div>
							 <div class="col-sm-4 box_left_new">
							  <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							   <div class="panel panel-default">
								   <div class="panel-body">
									   <a href="img/500/6.jpg" title="Earthquake" class="zoom" data-title="Earthquake" 
									   data-footer="War prosperity is like the prosperity that an earthquake or a plague brings - Ludwig von mises" 
									   data-type="image" data-toggle="lightbox">
										   <img src="img/4.jpg" width="100" height="100" alt="Earthquake">
									   </a>
								   </div>
							   </div>
						   </article></div>
							 </div>
							 <div class="col-sm-4 box_left_new">
							  <div class="av-container av-visible"><article class="aniview animated slideInDown" data-av-animation="slideInDown" style="opacity: 1;">
							   <div class="panel panel-default">
								   <div class="panel-body">
									   <a href="img/500/8.jpg" title="Earthquake" class="zoom" data-title="Earthquake" 
									   data-footer="If one introduces the concept of energy then that is a theoretically derived quantity - Charles Francis Richter" 
									   data-type="image" data-toggle="lightbox">
										   <img src="img/5.jpg" width="100" height="100" alt="Earthquake">
									   </a>
								   </div>
							   </div>
						   </article></div>
							 </div>
							</div>
	   </div>
	  </div>
	 </div>
	</div>
   </section>
   <!-- /Countries section -->
    
   <!-- Learn more section -->
<section id="Campaigns_2" class="clearfix">
 <div class="center_3 clearfix">
  <div class="col-sm-7 center_3_right clearfix">
   <div class="center_3_right_inner">
    <p><iframe width="670" height="432" src="https://www.youtube.com/embed/HL3KGK5eqaw" 
		title="Moment Magnitude Explained—What Happened to the Richter Scale?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
   </div>
  </div>
  <div class="col-sm-5 center_3_left clearfix">
   <div class="center_3_left_inner">
    <h5><span class="runner">Learn more </span>about Earthquake</h5>
	<p>Earthquakes are as old as Earth's crust, outdating humankind by grand
		 scales which occur as fault movements. A fault movement is a phenomenon 
		 that involves two adjacent rock masses moving in opposite directions to 
		 each other along a certain plane. The energy of strain accumulated by plate 
		 motion in the rock mass is released in the form of a seismic wave due to abrupt 
		 faulting.</p>
	<h5><a href="https://www.bgs.ac.uk/discovering-geology/earth-hazards/earthquakes/how-are-earthquakes-detected/">Read More</a></h5>
   </div>
  </div>
 </div>
</section>
<!-- /Learn more section -->

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

<script type="text/javascript">
	$(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 

	</script>
</body>
</html>