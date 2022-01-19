
<!DOCTYPE html>

<<<<<<< HEAD
<head>
    <style>
        h1 {
            text-align:center;
            font-family: Tahoma, sans-serif;
        }
        table {
            margin: 0 auto;
            margin-top: 25px;
        }
        .wrapper{
            display: flex;
            flex-direction: row;
            font-family: Tahoma, sans-serif;
        }
        .gauche{
            width: 50%;
            height: 100vh;
            text-align: center;
        }
        .droite{
            width: 50%;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>
<h1>Données de température et humidité de la pièce </h1>
=======
    <head>
        <style>
            h1 {
                text-align:center;
                font-family: Tahoma, sans-serif;
            }
            table {
                margin: 0 auto;
                margin-top: 25px;
            }
            .wrapper{
                display: flex;
                flex-direction: row;
                font-family: Tahoma, sans-serif;
            }
            .gauche{
                width: 50%;
                height: 100vh;
                text-align: center;
            }
            .droite{
                width: 50%;
                height: 100vh;
                text-align: center;
            }
        </style>
    </head>
        <h1>Données de température et humidité de la pièce </h1>
>>>>>>> 1d4c0fe860e227aa4ccbc7aeec5fc0a9c94a890b
    <?php
        // Open a files
        $fileTemp = fopen("/home/pi/temperature-wireless/temperature.csv", "r");
        $fileHum = fopen("/home/pi/temperature-wireless/humidity.csv", "r");

        echo '<div class="wrapper">';
            echo '<div class="gauche">';
                echo "<table>";
                    echo"Température";
                    // Fetching data from csv file row by row
                    while (($data = fgetcsv($fileTemp)) !== false) {
                        // HTML tag for placing in row format
                        echo "<tr>";
                            foreach ($data as $i) {
                                echo "<td>" . htmlspecialchars($i) . "</td>";
                            }
                        echo "</tr>\n";
                        echo"<tr><td><br/></td></tr>";
                    }
                echo "</table>";
            echo '</div>';

<<<<<<< HEAD
        foreach ($data as $j) {
            echo "<td>" . htmlspecialchars($j)
                . "</td>";
        }
        echo "</tr> \n";
    }
    // Closing the files
    fclose($fileTemp);
    fclose($fileHum);
    echo "\n</table></center></body></html>";

    $dataPoints = [];
    function getDataPointsFromCSV($csv){
        $dataPoints = $csvLines = $points = array();
         $csvLines = preg_split("/[\r?\n|\r|\n]+/", $csv);
        for ($i = 0; $i < sizeof($csvLines); $i++){
            if (strlen($csvLines[$i]) > 0) {
                $points = explode($csvLines[$i], ",");
                $x= floatval($points[0]);
                $y= floatval($points[1]);
                array_push($dataPoints,$x,$y);
            }
        }
        return $dataPoints;
    }

    var_dump($dataPoints)
    
=======
            echo '<div class="droite">';
                echo "<table>";
                    echo"Humidité";
                    // Fetching data from csv file row by row
                    while (($data = fgetcsv($fileHum)) !== false) {
                        // HTML tag for placing in row format
                        echo "<tr>";
                        foreach ($data as $j) {
                            echo "<td>" . htmlspecialchars($j) . "</td>";
                        }
                        echo "</tr> \n";
                        echo"<tr><td><br/></td></tr>";
                     }
                echo "</table>";
            echo '</div>';
        echo '</div>';
        // Closing the files
        fclose($fileHum);
>>>>>>> 1d4c0fe860e227aa4ccbc7aeec5fc0a9c94a890b
    ?>
