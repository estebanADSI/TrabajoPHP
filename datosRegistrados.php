
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    </head>
    <body>
        <center>
            <h1 class="mt-3">Datos JSP</h1>

            <table class="table table-striped mt-3">

                <th>Id</th>
                <th>Link</th>
                <th>Duracion</th>
                <th>Distancia</th>
                <?php
                include('conexion.php');


                while($usser = mysqli_fetch_array($select)){?>
                <tr>
                    <td><?php echo $usser['id_dato']?></td>
                    <td><?php echo $usser['link']?></td>
                    <td><?php echo $usser['duracion']?></td>
                    <td><?php echo $usser['distancia']?></td>
                </tr>
                <?php }?>          
            </table>
            <a class="btn btn-primary" href="index.html" role="button">Volver</a>
            <a class="btn btn-primary" href="excel.php" role="button">Descargar Excel</a>
            <a class="btn btn-danger" href="" role="button">Borrar Datos</a>
        </center>

    </body>
</html>






