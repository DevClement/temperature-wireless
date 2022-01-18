<!DOCTYPE html>
<center>
    <head>
        <style>
            h1 {color:red;}
            table {color:blue;}

        </style>
    </head>

        <h1>Température et humidité</h1>

    <?php
    echo "<html><body><table>\n\n";
    // Open a files

    $fileTemp = fopen("/home/pi/temperature-wireless/temperature.csv", "r");
    $fileHum = fopen("/home/pi/temperature-wireless/humidity.csv", "r");

    // Fetching data from csv file row by row
    while (($data = fgetcsv($fileTemp)) !== false) {

        // HTML tag for placing in row format
        echo "<tr>";

        foreach ($data as $i) {
            echo "<td>" . htmlspecialchars($i)
                . "</td>";
        }
        echo "</tr> \n";

    }
    while (($data = fgetcsv($fileHum)) !== false) {

        // HTML tag for placing in row format
        echo "<tr>";

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
    ?>
