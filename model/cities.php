<?php

include_once __DIR__ . "/functions.php";

$citiesArray = array(
    [ "name" => "San Francisco", "country" => "USA"       ],
    [ "name" => "Paris",         "country" => "France"    ],
    [ "name" => "New York",      "country" => "USA"       ],
    [ "name" => "Berlin",        "country" => "Germany"   ],
    [ "name" => "Bamako",        "country" => "Malia"     ],
    [ "name" => "Buenos Aires",  "country" => "Argentina" ],
    [ "name" => "Santiago",      "country" => "Chile"     ],
    [ "name" => "Bombay",        "country" => "India"     ],
    [ "name" => "Vancouver",     "country" => "Canada"    ],
);

// recover data from the csv file
$citiesCSV = csvToArray(__DIR__ . '/../csv/cities.csv', ';');

if (null === $citiesCSV) {
    // recover data from the array
    $cities = $citiesArray;
} else {
    $cities = $citiesCSV;
}
