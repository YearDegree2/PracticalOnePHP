<?php

include __DIR__ . '/../model/cities.php';
include __DIR__ . '/functions.php';

// retrieve id from url parameter
$cityId = $_GET["id"];
if (!isset($cityId) || !is_numeric($cityId) || !isset($cities[$cityId])) {
    // No id given or invalid id
    page_not_found();
}

// retrieve city from dataset
$city  = $cities[$cityId];
// define some more variables
$title = sprintf("Country %s", $city["country"]);
$citiesInCountry = getCitiesInCountry($city["country"], $cities);

// include view
include __DIR__ . '/../view/country.php';
