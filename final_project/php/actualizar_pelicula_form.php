<?php
include('conexion_final_project.php');
$con = conectar();
$id = $_GET['id'];
$sql_consulta = "SELECT * FROM pelicula WHERE id_pelicula = $id";
$result = mysqli_query($con, $sql_consulta);
while ($row = mysqli_fetch_array($result)) {
    $cod = $row['id_pelicula'];
    $nombre = $row['nombre_pelicula'];
    $estreno = $row['estreno_pelicula'];
    $director = $row['director_pelicula'];
    $productor = $row['productor_pelicula'];
    $categoria = $row['categoria_pelicula'];
    $idioma = $row['idioma_pelicula'];
    $presupesto = $row['presupuesto_pelicula'];
    $recaudacion = $row['recauda_pelicula'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css" />
    <script src="../js/validar_editar.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="myContainer">
        <form class="formBoxEdit" action="actualizar_pelicula_process.php" method="POST">
            <div class="salir"><a class="icon-close" href="lista_peliculas.php"></a>
            </div>
            <input type="hidden" value="<?php echo $cod ?>" name="cod">
            <label class="myLabel" for="nombre">Nombre</label>
            <input class="myInput" id="nombre" type="text" value="<?php echo $nombre ?>" name="nombre">

            <label class="myLabel" for="estreno">Estreno</label>
            <input class="myInput" id="estreno" type="text" value="<?php echo $estreno ?>" name="estreno">

            <label class="myLabel" for="director">Director</label>
            <input class="myInput" id="director" type="text" value="<?php echo $director ?>" name="director">

            <label class="myLabel" for="productor">Productor</label>
            <input class="myInput" id="productor" type="text" value="<?php echo $productor ?>" name="productor">

            <label class="myLabel" for="categoria">Categoria</label>
            <select class="mySelect" id="categoria" name="categoria">
                <option selected value="<?php echo $categoria ?>"><?php echo $categoria ?></option>
                <option value="Comedia">Comedia</option>
                <option value="Acción">Acción</option>
                <option value="Drama">Drama</option>
                <option value="Trhiller">Trhiller</option>
                <option value="Suspenso">Suspenso</option>
                <option value="Terror">Terror</option>
                <option value="Romance">Romance</option>
                <option value="Super Heroes">Super Héroes</option>
                <option value="Ciencia Ficcion">Ciencia Ficción</option>
            </select>

            <label class="myLabel" for="idioma">Idioma</label>
            <input class="myInput" id="idioma" type="text" value="<?php echo $idioma ?>" name="idioma">

            <label class="myLabel" for="presupuesto">Rresupuesto</label>
            <input class="myInput" id="presupuesto" type="text" value="<?php echo $presupesto ?>" name="presupuesto">

            <label class="myLabel" for="recaudacion">Recaudacion</label>
            <input class="myInput" id="recaudacion" type="text" value="<?php echo $recaudacion ?>" name="recaudacion">
            <button class="btn" id="enviarEditar">Guardar Cambios</button>
        </form>
    </div>
</body>

</html>