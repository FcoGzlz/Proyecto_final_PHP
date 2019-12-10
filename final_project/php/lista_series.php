<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
    <title>Document</title>
</head>

<body>
    <?php
    include('conexion_final_project.php');
    $con = conectar();
    $sql_consulta = "SELECT * FROM serie ORDER BY id ASC";
    $result = mysqli_query($con, $sql_consulta);
    ?>
    <nav>
    <ul class="ulInicio">
              <li><a href="../index.html">Inicio</a></li>
          </ul>
        <ul>
            <li><a href="../movies_form.html">Ingresar Película</a></li>
            <li><a href="lista_peliculas.php">Películas ingresadas</a></li>
            <li><a href="../series_form.html">Puntuar Serie</a></li>
            <li><a class ="active" href="lista_series.php">Series Puntuadas</a></li>
        </ul>
    </nav>
    <div class="myContainer">
        <table id="myTable" class="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Nombre de Serie</th>
                    <th>Puntuacion</th>
                    <th>Idioma</th>
                    <th>Estreno</th>
                    <th>Temporadas</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $correo = $row['correo'];
                    $usuario = $row['usuario'];
                    $nombre = $row['nombre_serie'];
                    $puntuacion = $row['puntuacion_serie'];
                    $idioma = $row['idioma'];
                    $estreno = $row['estreno_serie'];
                    $temporadas = $row['temporadas_serie'];
                    $comentario = $row['comentario'];
                    ?>
                    <tr>
                        <td>
                            <?php echo $id ?>
                        </td>
                        <td>
                            <?php echo $correo ?>
                        </td>
                        <td>
                            <?php echo $usuario ?>
                        </td>
                        <td>
                            <?php echo $nombre ?>
                        </td>
                        <td>
                            <?php echo $puntuacion ?>
                        </td>
                        <td>
                            <?php echo $idioma ?>
                        </td>
                        <td>
                            <?php echo $estreno ?>
                        </td>
                        <td>
                            <?php echo $temporadas ?>
                        </td>
                        <td>
                            <?php echo $comentario ?>
                        </td>
                        <td>
                            <a class="icon-edit" href="actualizar_serie_form.php?id=<?php echo $id ?>"></a>
                        </td>
                        <td>
                        <a class="icon-delete"href="eliminar_serie.php?id=<?php echo $id ?>" onclick="return confirm('¿Borrar registro?')"></a>
                        </td>
                    </tr>

                <?php
                }
                ?>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>