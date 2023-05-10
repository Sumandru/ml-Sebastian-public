<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Receiving data from the form</h1>

    <?php
    $myfile = fopen("data.csv", "a") or die("Unable to open file!");
    //Recibimos los datos enviados a traves del formiulario
    $nombre=$_POST["Nombre_del_lugar"];
    fwrite($myfile, "$nombre;");
    $description=$_POST["Descripcion"];
    fwrite($myfile, "$description;");
    $municipio=$_POST["Municipio"];
    fwrite($myfile, "$municipio;");
    $information=$_POST["informacion"];
    fwrite($myfile, "$information;");
    $maps=$_POST["Google_Maps"];
    fwrite($myfile, "$maps;");
    $imagen=$_POST["Imagen"];
    fwrite($myfile, "$imagen\n");
    echo "<br>The name of the place is: $nombre";
    echo "<br>The description of the place is: $description";
    echo "<br>The municipio of the place is: $municipio";
    echo "<br>The information of the place is: $information";
    echo "<br>The place on the maps is: $maps";
    echo "<br>The name of the image is: $imagen";
    
    // Validamos los datos
    if ($nombre == "") {
        echo "<br>ERROR: The name field is empty";
    }
    else
    {

        if ((strlen($nombre) > 20))
        {
            echo "<br>ERROR: The lenght of the name is > 20";
        }
        
    }

    if ($description == "") {
        echo "<br>ERROR: The description field is empty";
    }
    else
    {

        if ((strlen($description) > 100))
        {
            echo "<br>ERROR: The lenght of the description is > 100";
        }
        
    }

    if ($maps == "") {
        echo "<br>ERROR: The Google Maps URL field is empty";
    }
    else
    {

        if ((strlen($maps) > 100))
        {
            echo "<br>ERROR: The lenght of the Google Maps URL is > 100";
        }
    
        
    }
    // Mostramos los diferentes campos
    //echo "<br>The description of the place is...$descriptionPlace";
    fclose($myfile);
    ?>
    



</body>
</html>