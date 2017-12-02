<?php
/**
 * Created by PhpStorm.
 * User: vijay
 * Date: 05-Oct-17
 * Time: 2:36 PM
 */
include_once '_include/_bbd_functions.php';
$bd = new _bbd_functions();

    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
//    $lat = 23.7;
//    $lng = 72.2;

    $currentResult = $bd->getCurrentLocation();

    if(count($currentResult))
        $bd->updateCurrentLocation($lat,$lng,$currentResult['id']);
    else
        $bd->storeCurrentLocation($lat,$lng);

    $allNearby = $bd->getLatLongNearBy($lat,$lng);

//    print_r($allNearby);

//     Start XML file, create parent node
    $dom = new DOMDocument("1.0");
    $node = $dom->createElement("markers");
    $parnode = $dom->appendChild($node);

ob_clean();
    header("Content-type: text/xml");

    foreach ($allNearby as $row){
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