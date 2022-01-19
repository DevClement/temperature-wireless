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




/*foreach ($datas as $data){
    $time = $data[0];
    echo $time;
}

foreach ($datas as $data){
    $temperature = $data[1];
    echo $temperature;
}

if ($temperature) {
    echo "Temperature is ${temperature}C\n";
} else {
    echo "Unable to get temperature\n";
}*/




/*
result of datas
array(555) { 
    [0]=> array(2) { 
        [0]=> string(13) "1642427403000" [1]=> string(4) "21.0" 
    }
}*/