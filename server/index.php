<?php 

$csvFile = file('/home/pi/temperature-wireless/temperature.csv');
$data = [];
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
}

var_dump($data);