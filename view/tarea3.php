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
                    <?php
                    require_once '../model/DAO_Film.php';
                    $aux_peli_id = $_GET["pelicula"];
                    $dao_pe = new DAO_Film();
                    $aux_peli = $dao_pe->getPeliculaById($aux_peli_id);
                    while ($row = mysqli_fetch_array($aux_peli)) {
                        $peli = $row;
                    }
                    ?>
                    <div class="col-lg-12">
                        <h2>Arrendatarios de la Pelicula <?php echo $peli['title']; ?></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre Cliente</th>
                                        <th>Fecha Arriendo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once '../model/DAO_Rental.php';
                                    $dao_rent = new DAO_Rental();
                                    $clientes = $dao_rent->getAllClientByIdFilm($peli['film_id']);
                                    while ($row = mysqli_fetch_array($clientes)) {
                                        echo '<tr>';
                                        echo '<td>' . $row['first_name'] .' '.$row['last_name']. '</td>';
                                        echo '<td>'.$row['rental_date']. '</td>';
                                        echo '</td>';
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
