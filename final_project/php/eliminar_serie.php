<?php
    include('conexion_final_project.php');
    $con = conectar();
    $id = $_GET['id'];
    $sql_consulta = "DELETE FROM serie WHERE id = $id";
    $result = mysqli_query($con, $sql_consulta);
    HEADER("HTTP/1.1 MOVED  TEMPORARILY");
    HEADER("LOCATION:/final_project/php/lista_series.php");
?>