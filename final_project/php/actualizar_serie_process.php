<?php
    include ('conexion_final_project.php');
    $con = conectar();
    $cod = $_POST['cod'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $puntuacion = $_POST['puntuacion'];
    $idioma = $_POST['idioma'];
    $estreno = $_POST['estreno'];
    $temporadas = $_POST['temporadas'];
    $comentario = $_POST['comentario'];

    $sql = "UPDATE serie
        SET correo = '$correo',
        usuario = '$usuario',
        nombre_serie = '$nombre',
        puntuacion_serie = '$puntuacion',
        idioma = '$idioma',
        estreno_serie = '$estreno',
        temporadas_serie = '$temporadas',
        comentario = '$comentario'
        WHERE id = '$cod'";

        if (mysqli_query($con,$sql)) 
        {
            echo "Éxito";

            // HEADER("HTTP/1.1 MOVED  TEMPORARILY");
            HEADER("http/1.1 302 moved  temporarily");
            HEADER("LOCATION:/final_project/php/lista_series.php");

            # code...
        } else {
            echo "Error".$sql."<br>".mysqli_error($con);
            # code...
        }
        
?>