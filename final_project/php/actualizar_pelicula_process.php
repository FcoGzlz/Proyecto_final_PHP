<?php
    include ('conexion_final_project.php');
    $con = conectar();
    $cod = $_POST['cod'];
    $nombre = $_POST['nombre'];
    $estreno = $_POST['estreno'];
    $director = $_POST['director'];
    $productor = $_POST['productor'];
    $categoria = $_POST['categoria'];
    $idioma = $_POST['idioma'];
    $presupuesto = $_POST['presupuesto'];
    $recaudacion = $_POST['recaudacion'];

    $sql = "UPDATE pelicula
        SET nombre_pelicula = '$nombre',
        estreno_pelicula = '$estreno',
        director_pelicula = '$director',
        productor_pelicula = '$productor',
        categoria_pelicula = '$categoria',
        idioma_pelicula = '$idioma',
        presupuesto_pelicula = '$presupuesto',
        recauda_pelicula = '$recaudacion'
        WHERE id_pelicula = '$cod'";

        if (mysqli_query($con,$sql)) 
        {
            echo "Éxito";

            // HEADER("HTTP/1.1 MOVED  TEMPORARILY");
            HEADER("http/1.1 302 moved  temporarily");
            HEADER("LOCATION:/final_project/php/lista_peliculas.php");

            # code...
        } else {
            echo "Error".$sql."<br>".mysqli_error($con);
            # code...
        }
        
?>