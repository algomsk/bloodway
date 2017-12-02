<?php
/**
 * Created by PhpStorm.
 * User: vijay
 * Date: 07-Oct-17
 * Time: 1:07 PM
 */
include_once '_include/_bbd_functions.php';
$bd = new _bbd_functions();

$allloc = $bd->getAllLatLng();

//    print_r($allloc);
//exit(1);
//     Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

ob_clean();
header("Content-type: text/xml");

foreach ($allloc as $row){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("id", $row['id']);
    $newnode->setAttribute("name", $row['bbname']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['latitude']);
    $newnode->setAttribute("lng", $row['longitude']);
    $newnode->setAttribute("city", $row['city']);
    $newnode->setAttribute("mobile", $row['mobile_n_o']);
}
echo $dom->saveXML();