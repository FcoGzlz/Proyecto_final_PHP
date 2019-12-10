<?php
    include('conexion_final_project.php');
    $con = conectar();
    $id = $_GET['id'];
    $sql_consulta = "DELETE FROM pelicula WHERE id_pelicula = $id";
    $result = mysqli_query($con, $sql_consulta);
    HEADER("HTTP/1.1 MOVED  TEMPORARILY");
    HEADER("LOCATION:/final_project/php/lista_peliculas.php");
?>