<!DOCTYPE html>

    <head>
        <style>
            h1 {
                text-align:center;
                font-family: Tahoma, sans-serif;
            }
            table {
                align-self: center;
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
    <?php
        // Open a files
        $fileTemp = fopen("temperature.csv", "r");
        $fileHum = fopen("humidity.csv", "r");

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
    ?>
