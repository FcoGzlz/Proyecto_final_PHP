<?php
include ('conexion_final_project.php');
$con = conectar();
$nombre = $_POST['nombre'];
$estreno = $_POST['estreno'];
$director = $_POST['director'];
$productor = $_POST['productor'];
$categoria = $_POST['categoria'];
$idioma = $_POST['idioma'];
$presupuesto = $_POST['presupuesto'];
$recaudacion = $_POST['recaudacion'];

$sql = "INSERT INTO pelicula(
    nombre_pelicula,
    estreno_pelicula,
    director_pelicula,
    productor_pelicula,
    categoria_pelicula,
    idioma_pelicula,
    presupuesto_pelicula,
    recauda_pelicula)
    VALUES(
        '$nombre',
        '$estreno',
        '$director',
        '$productor',
        '$categoria',
        '$idioma',
        '$presupuesto',
        '$recaudacion'
)";

if(mysqli_query($con, $sql)) {
    HEADER("HTTP/1.1 MOVED  TEMPORARILY");
    HEADER("LOCATION:/final_project/php/lista_peliculas.php");
}else {
    echo "Error".$sql.mysqli_error($con);
    # code...
}


?>