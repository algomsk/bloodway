<?php
/**
 * Created by PhpStorm.
 * User: vijay
 * Date: 03-Oct-17
 * Time: 7:23 PM
 */

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "blood_bank");

ini_set("allow_url_fopen", 1);
$api_url    = 'https://api.data.gov.in/resource/';
$resource   = 'e16c75b6-7ee6-4ade-8e1f-2cd3043ff4c9';

$api_key    = '579b464db66ec23bdd00000187437757eeb9469059e9cb39e0e625ae';
$format     = 'json';

$half_url = "$api_url$resource?format=$format&api-key=$api_key";

$GOOGLE_MAP_API_KEY='AIzaSyBUofPSyZz5lIiHQKJUxfaQCz99l2myHs8';
$Google_map_url = "https://maps.googleapis.com/maps/api/js?key=$GOOGLE_MAP_API_KEY&libraries=places&callback=initMap";