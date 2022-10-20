<?php

$domDoc = new DOMDocument();
$domDoc->load("searchresult.xml");

$x=$domDoc->getElementsByTagName('links');
 

//get the q parameter from URL
$getQueryString=$_GET["q"];

 //lookup all links from the xml file if length of q>0
if (strlen($getQueryString)>0) {
    $hint="";

    for($k=0; $k<($x->length); $k++) {
        $y=$x->item($k)->getElementsByTagName('title'); 
        $z=$x->item($k)->getElementsByTagName('url'); 
    
        if ($y->item(0)->nodeType==1){
                   //find a link matching the search text
            if (stristr($y->item(0)->childNodes->item(0)->nodeValue, $getQueryString)) {
                if ($hint=="") {
                    $hint="<a href='" . 
                    $z->item(0)->childNodes->item(0)->nodeValue .
                    "'>" . 
                    $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                } else {
                    $hint=$hint . "<br /><a href='" . 
                    $z->item(0)->childNodes->item(0)->nodeValue . 
                    "'>" . 
                    $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values

if ($hint=="") {
    $outputResult="<h4>Oops! I'm sorry<h4>";
} else {
    $outputResult=$hint ;
}

//Output the response
echo $outputResult;

?>