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
        <script language="javascript" src="../css/js/jquery-3.2.0.min.js"></script>
        <script language="javascript">
            $(document).ready(function () {
                $("#sel_actor").change(function () {
                    $("#sel_actor option:selected").each(function () {
                        eligido = $(this).val();
                        $.post("../controller/peliculas.php", {eligido: eligido}, function (data) {
                            $("#sel_pel").html(data);
                        });
                    });
                });
                $("#btnEliminar").click(function () {
                    $("#btnEliminar").val("eliminar");
                    $.ajax({
                        url: "../controller/eliminarActorPeli.php",
                        type: "POST",
                        data: $("#formulario").serialize(),
                        success: function (data) {
                            $("#resp2").html(data);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div id="wrapper">
            <?php require_once './core_nav.php'; ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <h2>Eliminar Pelicula Asociada a un Actor</h2>
                        <form id="formulario" action="" method="post">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Id / Actor</label>
                                    <select class="form-control" id="sel_actor" name="sel_actor">
                                        <option value="000">Seleccione Un Actor</option>
                                        <?php
                                        require_once '../model/DAO_Actor.php';
                                        $dao_ac = new DAO_Actor;
                                        $actors = $dao_ac->getAllActor();
                                        while ($row1 = mysqli_fetch_array($actors)) {
                                            ?>
                                            <option value="<?php echo $row1['actor_id']; ?>">
                                                <?php echo $row1['actor_id'] . ' ' . $row1['first_name'] . ' ' . $row1['last_name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">Pelicula</label>
                                    <select class="form-control" id="sel_pel" name="sel_pel">
                                        <option value='000'>Seleccione Un Actor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="resp2" style="font-size: 30px; color: #18BC9C; width: 500px; "></div>
                                <button type="button" class="btn btn-success btn-lg"  value="eliminar" name="btnEliminar" id="btnEliminar">Eliminar</button>
                            </div>
                            <input type="hidden" id="btnAccion" name="btnAccion">
                        </form>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <?php require_once './core_js.php'; ?>
    </body>

</html>

