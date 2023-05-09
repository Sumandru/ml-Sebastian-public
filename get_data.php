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
    //Recibimos los datos enviados a traves del formiulario
    $nombre=$_POST["Nombre_del_lugar"];
    $description=$_POST["Descripcion"];
    $municipio=$_POST["Municipio"];
    $information=$_POST["informacion"];
    $maps=$_POST["Google_Maps"];
    $imagen=$_POST["Imagen"];
    echo "<br>The name of the place is: $nombre";
    echo "<br>The description of the place is: $description";
    echo "<br>The municipio of the place is: $municipio";
    echo "<br>The information of the place is: $information";
    echo "<br>The place on the maps is: $maps";
    echo "<br>The image of the place is: $imagen";

    //Validamos los datos
    if($nombre==""){
        echo "<br>ERROR: The name of the field is empty";
    }
    else {
        if((strlen($nombre)>10)){
            echo "<br>ERROR: The lenght of the name is > 10";
        }
        else {
            echo "<br>The name of the place is $nombre";
        }
    }


    ?>

</body>
</html>