<?php 

$tempCsvFile = file("/home/pi/temperature-wireless/temperature.csv");
$humidCsvFile = file("/home/pi/temperature-wireless/humidity.csv");
$datasTemp = [];
$datasHumid = [];

foreach ($tempCsvFile as $line) {
    $datasTemp[] = str_getcsv($line);
}

foreach ($datasTemp as $data){
    $temperature = $data[1];
}

foreach ($humidCsvFile as $line) {
    $datasHumid[] = str_getcsv($line);
}

foreach ($datasHumid as $data){
    $humidity = $data[1];
}
