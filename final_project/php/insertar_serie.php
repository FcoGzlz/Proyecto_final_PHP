<?php
include ('conexion_final_project.php');
$con = conectar();
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$puntuacion = $_POST['puntuacion'];
$idioma = $_POST['idioma'];
$estreno = $_POST['estreno'];
$temporadas = $_POST['temporadas'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO serie(
    correo,
    usuario,
    nombre_serie,
    puntuacion_serie,
    idioma,
    estreno_serie,
    temporadas_serie,
    comentario)
    VALUES(
        '$correo',
        '$usuario',
        '$nombre',
        '$puntuacion',
        '$idioma',
        '$estreno',
        '$temporadas',
        '$comentario'
)";

if(mysqli_query($con, $sql)) {
    HEADER("HTTP/1.1 MOVED  TEMPORARILY");
    HEADER("LOCATION:/final_project/php/lista_series.php");
}else {
    echo "Error".$sql.mysqli_error($con);
    # code...
}


?>