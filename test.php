<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./page_1/page1.css">
    <title>Document</title>
</head>
    <body>
    <div class="div1">
        <h2 class="title"> <a href="./index.html" style="text-decoration: none; color:white; cursor: pointer;">Descubriendo Gran Canaria</a></h2>
    </div>
    <div class="div2">
        <table>
            <td class="td1">Nuevo lugar que visitar</td>
            <td class="td2" onclick="document.location='./page2.php'">Lugares que no me puedo perder</td>
        </table>
    </div>


<?php

function validateRequired($fieldvalue){
    
}


// DEGUB CODE
/*
echo "<pre>";
echo "<h1>Contenido del array _POST</h1>";
print_r($_POST);

echo "<h1>Contenido del array _FILES</h1>";
print_r($_FILES);
echo "</pre>";
^*/

/*echo "<pre>";
echo "<h2>FILES</h2>";
print_r($_FILES);
echo "<h2>POST</h2>";
print_r($_POST);
echo "</pre>";*/

$arrayErrors = array();

// Recibimos los datos enviados a través del formulario
$nombre=$_POST["Nombre_del_lugar"];
$description=$_POST["Descripcion"];
$municipio=$_POST["Municipio"];
$information=$_POST["informacion"];
$maps=$_POST["Google_Maps"];
$imagen=$_FILES["imagen"]["name"];

// Validamos los datos
if ($nombre == "") {
    $arrayErrors[] = "<li>ERROR: The name field is empty";
}
if ($description == "") {
    $arrayErrors[] = "<li>ERROR: The description field is empty";
}
if ($municipio == "") {
    $arrayErrors[] = "<li>ERROR: The town field is empty";
}
if ($information == "") {
    $arrayErrors[] = "<li>ERROR: The URL (info) field is empty";
}
if ($maps == "") {
    $arrayErrors[] = "<li>ERROR: The URL (Google Maps) field is empty";
}
if ($imagen == "") {
    $arrayErrors[] = "<li>ERROR: The image field is empty";
}

if (strlen($nombre) > 40) {
    $arrayErrors[] = "<li>ERROR: The size of the name field greater than 20 characters";
}
if (strlen($description) > 100) {
    $arrayErrors[] = "<li>ERROR: The size of the description field greater than 100 characters";
}
if (strlen($information) > 100) {
    $arrayErrors[] = "<li>ERROR: The size of the URL (info) field greater than 100 characters";
}
if (strlen($maps) > 100) {
    $arrayErrors[] = "<li>ERROR: The size of the URL (Google Maps) field greater than 100 characters";
}



// Mostramos los diferentes campos
if (sizeof($arrayErrors) > 0)
{
    echo "<H2>Detected some errors</H2>";    
    echo "<ul>";
    foreach($arrayErrors as $errorMessage)
    {
        echo $errorMessage;
    }
    echo "</ul>";
    echo "<a href='page1.html'>Try again</a>";
}
else
{
    echo "<H2>The data is OK. We are going to insert into the database</H2>";
    echo "<ul>";
    echo "<li>The name of the place is...$nombre";
    echo "<li>The description of the place is...$description";
    echo "<li>The URL with info of the place is...$information";
    echo "<li>The URL with the map of the place is...$maps";
    echo "<li>The image name is...$imagen";
    echo "</ul>";

    $fileUploadDir = "./images";

    if (!(move_uploaded_file($_FILES["imagen"]["tmp_name"], $fileUploadDir."/".$_FILES["imagen"]["name"])))
        echo "<br>Error al subir el fichero";

    $myfile = fopen("data1.csv", "a") or die("Unable to open file!");
    $txt = "\n$nombre;$description;$municipio;$information;$maps;$imagen";
    fwrite($myfile, $txt);
    fclose($myfile);
}

?>
    </body>

</html>