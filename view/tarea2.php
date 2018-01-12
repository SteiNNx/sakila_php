<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Practica Prueba - Jorge Reyes</title>
        <?php require_once './core_head.php'; ?>
    </head>
    <body>

        <div id="wrapper">
            <?php require_once './core_nav.php'; ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <h2>Listado de Peliculas entre 90 - 120 mins</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Lanzamiento</th>
                                        <th>Lenguaje</th>
                                        <th>Duracion</th>
                                        <th>Costo</th>
                                        <th>Rating</th>
                                        <th>Arrendatarios</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once '../model/DAO_Film.php';
                                    $dao = new DAO_Film();
                                    $peliculas=$dao->getAllPeliculas();
                                    while ($row = mysqli_fetch_array($peliculas)) {
                                        echo '<tr>';
                                        echo '<td>'.$row['title'].'</td>';
                                        echo '<td>'.$row['description'].'</td>';
                                        echo '<td>'.$row['release_year'].'</td>';
                                        echo '<td>'.$row['name'].'</td>';
                                        echo '<td>'.$row['length'].'</td>';
                                        echo '<td>'.$row['replacement_cost'].'</td>';
                                        echo '<td>'.$row['rating'].'</td>';
                                        echo '<td><a href="tarea3.php?pelicula='.$row['film_id'].'">Click</a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <?php require_once './core_js.php'; ?>
    </body>

</html>

