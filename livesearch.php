<!-- Search the QuakeML file for texts matching the search string and returns the result.-->
<!-- childNodes: returns a collection (list) of an elements's child nodes.-->
<!-- nodeValue: sets or returns the value of a node.-->
<!-- nodeType: returns the node type, as a number, of the specified node.-->
<?php
//A new DOM document is created
$xmlDoc = new DOMDocument();
//xmlDoc will load the QuakeML file
$xmlDoc->load("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.quakeml");
//getElementByTagName returns a collection of all elements with a specified tag name (description).
$x=$xmlDoc->getElementsByTagName('description');
//Get the "a" parameter from URL
$a=$_GET["a"];
 
//If the string length is greater than "0", an empty variable hellhound is created.
//Loop through all the <text> elements to find matches from the text sent from the JavaScript
//The correct "text" and "type" are set to the $response variable; if there is more than one match, they will be added to the variable
//If there is no match, the $response variable is set to "No result found".
if(strlen($a)>0){
      $hellhound="";
      for($i=0; $i<($x->length); $i++){
         $y=$x->item($i)->getElementsByTagName('text');
         $z=$x->item($i)->getElementsByTagName('type');
            if($y->item(0)->nodeType==1){

            //find the description matching the search text
            if(stristr($y->item(0)->childNodes->item(0)->nodeValue,$a)){
                if($hellhound==""){
                    $hellhound= $z->item(0)->childNodes->item(0)->nodeValue.": " .
                    $y->item(0)->childNodes->item(0)->nodeValue;
                }
                else{
                     $hellhound=$hellhound . "<br/>" . $z->item(0)->childNodes->item(0)->nodeValue .": ".
                     $y->item(0)->childNodes->item(0)->nodeValue;
                    }
            }
         }
        }
     }
 
//Output "No result found" if no hellhound was found
if($hellhound==""){
   $response = "No result found";
}
else{
    $response=$hellhound;
}
 
//output the response
echo $response;

?>