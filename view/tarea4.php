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
                        url: "../controller/crearStore.php",
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
                        <h2>Listado de Tiendas</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Tienda Id</th>
                                        <th>Funcionario a Cargo</th>
                                        <th>Direccion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once '../model/DAO_Store.php';
                                    $dao_st = new DAO_Store();
                                    $tiendas = $dao_st->getAllStores();
                                    while ($row = mysqli_fetch_array($tiendas)) {
                                        echo '<tr>';
                                        echo '<td>' . $row['store_id'] . '</td>';
                                        echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
                                        echo '<td>' . $row['address'] . ', ' . $row['city'] . ', ' . $row['country'] . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <h2>Formulario de Nueva Tienda</h2>
                        <form id="formulario" action="" method="post">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Manager Staff</label>
                                    <select class="form-control" id="sel_staff" name="sel_staff">
                                        <?php
                                        require_once '../model/DAO_Staff.php';
                                        $dao_sf = new DAO_Staff();
                                        $staff = $dao_sf->getAllStaffs();
                                        while ($row1 = mysqli_fetch_array($staff)) {
                                            ?>
                                            <option value="<?php echo $row1['staff_id']; ?>">
                                                <?php echo $row1['first_name'] . ' ' . $row1['last_name']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Direccion</label>
                                    <input class="form-control input-md" type="text" id="txt_address" name="txt_address"> 
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Ciudad</label>
                                    <select class="form-control" id="sel_city" name="sel_city">
                                        <?php
                                        require_once '../model/DAO_City.php';
                                        $dao_ct = new DAO_City();
                                        $city = $dao_ct->getAllCitys();
                                        while ($row2 = mysqli_fetch_array($city)) {
                                            ?>
                                            <option value="<?php echo $row2['city_id']; ?>">
                                                <?php echo $row2['city'] . ', ' . $row2['country']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Distrito</label>
                                    <input class="form-control input-md" type="text" id="txt_district" name="txt_district"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Telefono</label>
                                    <input class="form-control input-md" type="number" id="txt_phone" name="txt_phone"> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="resp2" style="font-size: 30px; color: #18BC9C; width: 500px; "></div>
                                <button type="button" class="btn btn-success btn-lg"  value="guardar" name="btnGuardar" id="btnGuardar">Crear</button>
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



