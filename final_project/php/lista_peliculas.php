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
    $sql_consulta = "SELECT * FROM pelicula ORDER BY id_pelicula ASC";
    $result = mysqli_query($con, $sql_consulta);
    ?>
    <nav>
    <ul class="ulInicio">
              <li><a href="../index.html">Inicio</a></li>
          </ul>
        <ul>
            <li><a href="../movies_form.html">Ingresar Película</a></li>
            <li><a class="active" href="lista_peliculas.php">Películas ingresadas</a></li>
            <li><a href="../series_form.html">Puntuar Serie</a></li>
            <li><a href="lista_series.php">Series Puntuadas</a></li>
        </ul>
    </nav>
    <div class="myContainer">
        <table id="myTable" class="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estreno</th>
                    <th>Director</th>
                    <th>Productor</th>
                    <th>Categoría</th>
                    <th>Idioma</th>
                    <th>Presupuesto</th>
                    <th>Recaudación</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id_pelicula'];
                    $nombre = $row['nombre_pelicula'];
                    $estreno = $row['estreno_pelicula'];
                    $director = $row['director_pelicula'];
                    $productor = $row['productor_pelicula'];
                    $categoria = $row['categoria_pelicula'];
                    $idioma = $row['idioma_pelicula'];
                    $presupuesto = $row['presupuesto_pelicula'];
                    $recaudacion = $row['recauda_pelicula'];
                    ?>
                    <tr>
                        <td>
                            <?php echo $id ?>
                        </td>
                        <td>
                            <?php echo $nombre ?>
                        </td>
                        <td>
                            <?php echo $estreno ?>
                        </td>
                        <td>
                            <?php echo $director ?>
                        </td>
                        <td>
                            <?php echo $productor ?>
                        </td>
                        <td>
                            <?php echo $categoria ?>
                        </td>
                        <td>
                            <?php echo $idioma ?>
                        </td>
                        <td>
                            <?php echo $presupuesto ?>
                        </td>
                        <td>
                            <?php echo $recaudacion ?>
                        </td>
                        <td>
                            <a class="icon-edit" href="actualizar_pelicula_form.php?id=<?php echo $id ?>"></a>
                        </td>
                        <td>
                        <a class="icon-delete"href="eliminar_pelicula.php?id=<?php echo $id ?>" onclick="return confirm('¿Borrar registro?')"></a>
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