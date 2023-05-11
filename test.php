<?php

echo "<table border='1'><tr><th>Nombre del lugar</th><th>Descripción</th><th>Municipio</th><th>URL con mas information</th><th>URL de Google Maps</th><th>Imagen</th></tr>";

    //Read the file line to line
    $myfile2 = fopen("data.csv", "r") or die("Unable to open file!");
    while(!feof($myfile2)) {
        $line = fgets($myfile2);
        //Separate the content of every line of the file
        $array_line = explode(";",$line);  
        echo "<tr><td>".$array_line[0]."</td><td>".$array_line[1]."</td><td>".$array_line[2]."</td><td>".$array_line[3]."</td><td>".$array_line[4]."</td><td>".$array_line[5]."</td></tr>";
    }
    fclose($myfile2);

echo "</table>";

?>