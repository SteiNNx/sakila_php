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
        <script src="../css/js/jquery-3.2.0.min.js"></script>
        <script>
            $(document).ready(function (event) {
                $("#btnGuardar").click(function () {
                    $("#btnAccion").val("guardar");
                    $.ajax({
                        url: "../controller/arrendarPeli.php",
                        type: "POST",
                        data: $("#formulario").serialize(),
                        success: function (data) {
                            $("#resp2").html(data);
                        }
                    });
                });
            });
        </script>
        <div id="wrapper">
            <?php require_once './core_nav.php'; ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <h2>Arrendar Pelicula</h2>
                        <form id="formulario" >
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Cliente</label>
                                    <select class="form-control" id="sel_cliente" name="sel_cliente">
                                        <?php
                                        require_once '../model/DAO_Customer.php';
                                        $dao_ct = new DAO_Customer();
                                        $cliente = $dao_ct->getAllCustomers();
                                        while ($row = mysqli_fetch_array($cliente)) {
                                            ?>
                                            <option value="<?php echo $row['customer_id']; ?>">
                                                <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Pelicula</label>
                                    <select class="form-control" id="sel_pel" name="sel_pel">
                                        <?php
                                        require_once '../model/DAO_Inventary.php';
                                        $dao_in = new DAO_Inventary();
                                        $pel = $dao_in->getAllInventary();
                                        while ($row2 = mysqli_fetch_array($pel)) {
                                            ?>
                                            <option value="<?php echo $row2['inventory_id']; ?>">
                                                <?php echo $row2['title'] . ' ,Sucursal ' . $row2['address']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="resp2" style="font-size: 30px; color: #18BC9C; width: 500px; "></div>
                                <button type="button" class="btn btn-success btn-lg"  value="guardar" name="btnGuardar" id="btnGuardar">Arrendar</button>
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

