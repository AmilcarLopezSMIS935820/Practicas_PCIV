<?php
    //Comentarios de una linea
    /*Comentarios de varias lineas */
    $nombre = "Amilcar"; 
    echo "Bienvenido " . $nombre;
    if(isset($_POST['enviar'])){
        $seleccion = $_POST["seleccion"];
        INCLUDE $seleccion . ".php";
    } else{
        INCLUDE "es.php";
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMIS935820</title>
    </head>
    <body>
        <form action="" method="POST">
            <select name="seleccion" id="">
                <option value="en">English</option>
                <option value="es">Spanish</option>
            </select>
            <input type="submit" name="enviar" value="seleccionar">
        </form>

        <hr>
        <br>
        <h1 style="text-align: center; color:cadetblue;"><?php echo TITLE;?></h1>
        <h2 style="text-align: center;"><?php echo SUBTITLE;?></h2>
    </body>
    </html>
