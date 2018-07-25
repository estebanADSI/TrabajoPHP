<?php
include('conexion.php');


//Recibo el link jsp
$link = $_POST['link'];

$jsonurl = $link;

$json = file_get_contents($jsonurl);
//Json_decode convierte el json en una variable 
$objeto = json_decode($json);
//var_dump($objeto);


$arreglo = (array)$objeto;

///print_r($arreglo);
// print_r($recorrido);


$rutas = $arreglo["routes"];
//var_dump($rutas);
$arreglo2 = (array)$rutas;
$arreglo3 = (array)$arreglo2[0];




echo "<center>";

echo "<h3>Duracion </h3> <br>";
print_r($arreglo3["duration"]);

echo "<h3> Distancia </h3>";
print_r($arreglo3["distance"]);

echo "</center>";




$duracion = $arreglo3["duration"];
$distancia = $arreglo3["distance"];

mysqli_query($conexion,"INSERT INTO datos(link,duracion,distancia) VALUES( '$link','$duracion', '$distancia')")or die("Fallo al insertar datos");
?>
<hr>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    </head>
    <body>
        <center>
            <a class="btn btn-outline-dark " href="datosRegistrados.php" role="button">Registros</a>
            <a class="btn btn-primary" href="index.html" role="button">Volver</a>
        </center>

    </body>
</html>
