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
       
     <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
     crossorigin="anonymous"></script>
     <script  type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="./js/ekko-lightbox.js"></script>

     <!-- If the input field is not empty, the DisplayEarthquake() function is executed;
          an XMLHttpRequest object is created, the function will execute once
          the server response is ready, a request is sent to the QuakeML file on the server-->
     <script>
        //When a character is entered in the text field, the function "DisplayEarthquake()" is executed
        function DisplayEarthquake(str){
            //If the input field is empty, the function clears the content of the earthquakesearch placeholder
            //and exits the function
            if(str.length==0){
                document.getElementById("earthquakesearch").innerHTML="";
                document.getElementById("earthquakesearch").style.border="0px";
                return;
            }
            if(window.XMLHttpRequest){
            // Code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }else{
                //Code for IE6, IE5
                xmlhttp=new ActiveXobject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        document.getElementById("earthquakesearch").innerHTML=xmlhttp.responseText;
                        document.getElementById("earthquakesearch").style.border="0px solid #2E8B57";
                }
            }
            //A parameter "a" is added to the URL with the content of the input field
            xmlhttp.open("GET", "livesearch.php?a=" + str,true);
            xmlhttp.send();
        }
</script>

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

       h3 {
        font-family: Cooper;
        font-size: 25px;
        text-align: center;
        color:seagreen;
        padding-bottom: 5px;
       }

       .hi{
        padding-left: 585px;
       }

       input {
        border: 2px solid seagreen;
       }

      #earthquakesearch{
        padding-left: 580px;
        font-family: 'Times New Roman';
        font-weight: 600;
        font-size: 18px;
        color: seagreen;
      }

      h4{
        text-align: center;
        color: black;
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

<!-- Live search using XML and PHP where we get the search results while you type;
     The function is triggered by the "onKeyUp" event-->
<form>
    <h4>QuakeML Earthquake Search</h4> 
    <br/>
    <h3>Search Here...</h3>
     
    <div class="hi">
         <input type="text" size="50" placeholder="Enter description of earthquake" onKeyUp="DisplayEarthquake(this.value)">
    </div>
    <div id="earthquakesearch"></div>
</form>
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
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>

</script>

</body>
</html>