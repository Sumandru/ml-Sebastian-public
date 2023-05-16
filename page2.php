<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./page_2/page2.css">
    <title>Document</title>
</head>
<body>
<?php

// Open the file. Read mode
$file = fopen("data1.csv", "r"); 

// New array. One position - One file line
$places = array();

// Read the file until End Of File
while(!feof($file)) {
    // One position of the array - One file
    // We use explode funtion to separate the fields
    $places[] = explode(";",fgets($file));
}

//  DEBUG CODE
/*
echo "<pre>";
print_r($places);
echo "</pre>";
*/


?>
    <div class="div1">
        <h2 class="title"> <a href="./index.html" style="text-decoration: none; color:white; cursor: pointer;">Descubriendo Gran Canaria</a></h2>
    </div>
    <div class="div2">
        <table>
            <td class="td1" onclick="document.location='./page1.html'">Nuevo lugar que visitar</td>
            <td class="td2">Lugares que no me puedo perder</td>
        </table>
    </div>
    <h2 class="title1">Lugares que no me puedo perder</h2>
    <table class="table">
        <thead>
            <tr class="table-head">
                <th>Visitado</th>
                <th>Nombre del lugar</th>
                <th>Description</th>
                <th>Municipio</th>
                <th>URL con mas information</th>
                <th>URL de Google Maps</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            //Iterate over the $places array
            //$place will contain one place on every iteration
            foreach($places as $place){
                echo "<tr>
                <td><input type='checkbox' checked='unchecked'></td>
                <td>$place[0]</td>
                <td>$place[1]</td>
                <td>$place[2]</td>
                <td><a href='$place[3]'>$place[3]</a></td>
                <td><a href='$place[4]'>$place[4]</a></td>
                <td><img src='images/".$place[5]."' width='200px'></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>