<?php 

$tempCsvFile = fopen("/home/pi/temperature-wireless/temperature.csv", "r");
$humidCsvFile = fopen("/home/pi/temperature-wireless/humidity.csv", "r");
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
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Température</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css" />
    <script type="text/javascript" src="../assets/script.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div class="container">
    <div class="widget">

        <div class="section section-graph">
            <div class="graph-info">
                <span class="graph-info-big">Température</span>
            </div>
            <div id="graph"></div>
        </div>

        <div class="section section-info">
            <span id=date_heure class="info-time"></span>
            <h3 class="info-title">Le Mans, France</h3>
            <script type="text/javascript">window.onload = date_heure('date_heure');</script>

            <div class="info-block">
                <dl>
                    <dt>Température en Celcius </dt>
                    <meter low="10" high="30" max="50" value=<?php echo $temperature; ?>>B</meter>
                    <dd><?php echo $temperature.' °C'; ?></dd>
                </dl>
            </div>

            <div class="info-block last">
                <dl>
                    <dt>Humidité</dt>
                    <progress id="file" max="100" value=<?php echo $humidity.' %'; ?>> 70% </progress>
                    <dd><?php echo $humidity.' %'; ?></dd>
                </dl>
            </div>
        </div>
        <div class="section"></div>
    </div>
</div>
<div class="jauge-container">
    <div class="gauge-a"></div>
    <div class="gauge-b"></div>
    <div class="gauge-c" style="transform:rotate(.<?= intval($temperature) ?>turn)"></div>
    <div class="gauge-data">
        <h1 id="percent" style="color:azure"><?php  echo $temperature.' °C'; ?></h1>
    </div>
</body>
</html>

