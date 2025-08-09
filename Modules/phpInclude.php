<?php
session_start();
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
include($rootPath . 'Includes/php/dbConnection.php');

$protocol = isset($_SERVER["HTTPS"]) ? "https://" : "http://";
$host = $_SERVER["HTTP_HOST"];
$serverPath = $protocol . $host . "/EcoRoute/";

$dashboardPath = $serverPath . "redirect.php?active=dashboard";
$travelersPath = $serverPath . "redirect.php?active=travelers";
$touristspotPath = $serverPath . "redirect.php?active=touristspot";
$sustainabilityPath = $serverPath . "redirect.php?active=sustainability";
$mobileAppPath = $serverPath . "redirect.php?active=mobileapp";

$sessionActive = !empty($_SESSION['active']) ? $_SESSION['active'] : '';
$getActive  = (!empty($GET['active'])) ? $_GET['active'] : $sessionActive;

switch($getActive) {
    case "dashboard":
        $dashboardClass = "active";
        break;
    case "travelers" :
        $travelersClass = "active";
        break;
    case "touristspot":
        $touristspotClass = "active";
        break;
    case "sustainability": 
        $sustainabilityClass = "active";
        break;
    case "mobileapp": 
        $mobileAppClass = "active";
        break;
    case "adminprofile":
        $adminProfileClass = "active";
        break;
    case "settings":
        $settingsClass = "active";
        break;
    default:
        $dashboardClass = "";
        $travelersClass = "";
        $touristspotClass = "";
        $sustainabilityClass = "";
        $mobileAppClass = "";
        $adminProfileClass = "";
        $settingsClass = "";
        break;
}
?>