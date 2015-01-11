<?php

function page_not_found()
{
    header("HTTP/1.0 404 Not Found");
    include __DIR__ . '/../view/404.html';
    die();
}

function getCitiesInCountry($country, $cities)
{
	$citiesInCountry = array();
	foreach ($cities as $cityId => $city) {
		if ($city["country"] === $country) {
			$citiesInCountry[$cityId] = $city;
		}
	}
	return $citiesInCountry;
}
