<?php

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

// recover data fro the csv file
$citiesFile = fopen(__DIR__ .'/../csv/cities.csv', 'r');
if ($citiesFile) {
	$citiesFinal = array();
	while (($data = fgetcsv($citiesFile, 1000, ";")) !== FALSE) {
        $citiesCSV = array(
	        "name"     => $data[0],
	        "country"  => $data[1],
        );
        array_push($citiesFinal, $citiesCSV);
    }
    fclose($citiesFile);
    $cities = $citiesFinal;
}

// recover data from the array
// $cities = $citiesArray;
