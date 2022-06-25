<?php
/**
 * creating new document with UTF-8 encoding
 */
$xml = new DomDocument("1.0", 'UTF-8');
$xml -> formatOutput = true;
$xml -> preserveWhiteSpace = false;
$xml -> load("test.xml");
/**
 * checks if the list is empty
 */
if(!$xml){
    $test = $xml -> createElement("test");
    $xml -> appendChild($test);
}else{
    $test = $xml -> firstChild;
}
/**
 * checks if the list is null or not so it can proceed to parse the data to the xml file
 * in case it isn't null
 */
if(isset($_POST['submit'])){
$fname = $_POST['name'];
$femail = $_POST['email'];
$fcomments = $_POST['comments'];
/**
 * initialization of a new list of children for name email and comments
 */
$emp = $xml -> createElement("name", $fname);
$kak -> appendChild($emp);
$emp = $xml -> createElement("email", $femail);
$kak -> appendChild($emp);
$emp = $xml -> createElement("comments", $fcomments);
$kak -> appendChild($emp);
echo"<xmp>".$xml->saveXML()."</xmp>";
$xml -> save("kak.xml");
}
?>