<?php
include('conexion_final_project.php');
$con = conectar();
$id = $_GET['id'];
$sql_consulta = "SELECT * FROM serie WHERE id = $id";
$result = mysqli_query($con, $sql_consulta);
while ($row = mysqli_fetch_array($result)) {
    $cod = $row['id'];
    $correo = $row['correo'];
    $usuario = $row['usuario'];
    $nombre = $row['nombre_serie'];
    $puntuacion = $row['puntuacion_serie'];
    $idioma = $row['idioma'];
    $estreno = $row['estreno_serie'];
    $temporadas = $row['temporadas_serie'];
    $comentario = $row['comentario'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/validar_editar_serie.js"></script>
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="css/estilo.css" />
        <script src="js/scripts.js"></script>
        <title>Document</title>
    </head>

    <body>
        <div class="myContainer">
            <form class="formBoxEdit" action="actualizar_serie_process.php" method="POST" id="movies_form">
            <div class="salir">
                <a class="icon-close" href="lista_series.php"></a>
            </div>
                <input type="hidden" name="cod" value="<?php echo $id ?>">
                <label class="myLabel" for="correo">Email</label>
                <input class="myInput" type="email" name="correo" id="correo" value="<?php echo $correo ?>" />

                <label class="myLabel" for="usuario">Usuario</label>
                <input class="myInput" type="text" name="usuario" id="usuario" value="<?php echo $usuario ?>" />

                <label class="myLabel" for="nombre">Nombre de Serie</label>
                <input class="myInput" type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>" />

                <label class="myLabel" for="puntuacion">Puntuación</label>
                <input class="myInput" type="text" name="puntuacion" id="puntuacion" value="<?php echo $puntuacion ?>" />

                <label class="myLabel" for="idioma">Idioma</label>
                <input class="myInput" type="text" name="idioma" id="idioma" value="<?php echo $idioma ?>" />

                <label class="myLabel" for="estreno">Estreno</label>
                <input class="myInput" type="text" name="estreno" id="estreno" value="<?php echo $estreno ?>" />

                <label class="myLabel" for="temporadas">Temporadas</label>
                <input class="myInput" type="text" name="temporadas" id="temporadas" value="<?php echo $temporadas ?>" />

                <label class="myLabel" for="comentario">Comentario</label>
                <label class="myLabel" for="comentario">Comentario</label>
            <textarea class="myInput"
            type="textarea"
            name="comentario"
            id="comentario">
            <?php echo $comentario ?>
            </textarea>
                <button class="btn" id="enviarSerieEdit">Guardar Cambios</button>
            </form>
        </div>
    </body>

    </html>
</body>

</html>