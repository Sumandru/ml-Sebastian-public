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
        <tr class="table-head">
            <th>Visitado</th>
            <th>Nombre del lugar</th>
            <th>Description</th>
            <th>Municipio</th>
            <th>URL con mas information</th>
            <th>URL de Google Maps</th>
            <th>Imagen</th>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td>Playa de Las Canteras</td>
            <td>La mejor playa de la isla</td>
            <td>Las Palmas de Gran Canaria</td>
            <td><a href="https://miplayadelascanteras.com">https://miplayadelascanteras.com</a></td>
            <td><a href="https://goo.gl/maps/nyKroNfJ1MfViGpm7">https://goo.gl/maps/nyKroNfJ1MfViGpm7</a></td>
            <td style="text-align: center;"><img src="./page_2/playa de las palmas.jfif" alt="Playa de Las Canteras" width="200px"></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td>Mirador del Anden Verde</td>
            <td>Un mirador impresionante</td>
            <td>La Aldea de San Nicolas</td>
            <td><a href="http://www.grancanaria.com/patronato_turismo/Anden-Verde.28252.0.html">http://www.grancanaria.com/patronato_turismo/Anden-Verde.28252.0.html</a></td>
            <td><a href="https://goo.gl/maps/nyKroNfJ1MfViGpm7">https://goo.gl/maps/nyKroNfJ1MfViGpm7</a></td>
            <td style="text-align: center;"><img src="./page_2/mirador-del-balcon-1.jpg" alt="Playa de Las Canteras" width="200px"></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td><?php$nombre=$_POST["Nombre_del_lugar"];echo ":$nombre";?></td>
            <td><?php$description=$_POST["Descripcion"];echo ":$description";?></td>
            <td><?php$municipio=$_POST["Municipio"];echo ":$municipio";?></td>
            <td><?php$information=$_POST["informacion"];echo ":$information";?></td>
            <td><?php$maps=$_POST["Google_Maps"];echo ":$maps";?></td>
            <td><?php$imagen=$_POST["Imagen"];echo ":$imagen";?></td>
        </tr>
    </table>
</body>
</html>