<?php

function csvToArray($csvFile, $separator)
{
    $citiesFile = fopen($csvFile, 'r');
    if ($citiesFile) {
        $cities = array();
        while (($data = fgetcsv($citiesFile, 1000, $separator)) !== FALSE) {
            $city = array(
                "name"     => $data[0],
                "country"  => $data[1],
            );
            array_push($cities, $city);
        }
        fclose($citiesFile);

        return $cities;
    }

    return null;
}
