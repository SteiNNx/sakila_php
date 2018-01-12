<?php
include_once '../model/DAO_Store.php';
include_once '../model/DAO_Address.php';
include_once '../model/CL_Store.php';
include_once '../model/CL_Address.php';


if (isset($_POST["btnAccion"])) {
    $accion=$_POST["btnAccion"];
    if ($accion=="guardar") {
        //capto datos
        $aux_manag_id=$_POST["sel_staff"];
        $aux_address=$_POST["txt_address"];
        $aux_city=$_POST["sel_city"];
        $aux_district = $_POST["txt_district"];
        $aux_phone = $_POST["txt_phone"];
        //fecha de hoy
        date_default_timezone_set('Chile/Continental');
        $Fecha = date('Y/m/d G:i');
        //ibject address
        $Address = new Address();
        $Address->setAddress($aux_address);
        $Address->setDistric($aux_district);
        $Address->setCity_id($aux_city);
        $Address->setPhone($aux_phone);
        $Address->setLast_update($Fecha);
        //dao address
        $dao_addr= new DAO_Address();
        $dao_addr->insertAddress($Address);
        //object Store
        $Store = new Store();
        $Store->setManager_staff_id($aux_manag_id);
        $rs=$dao_addr->maxIdAddress();
        while ($aux_row = mysqli_fetch_array($rs)) {
            $id_adr=$aux_row['max'];
        }
        echo ''.$id_adr.' '.$Fecha;
        $Store->setAddress_id($id_adr);
        $Store->setLast_update($Fecha);
        //dao store
        $dao_store = new DAO_Store();
        $dao_store->insertStore($Store);
    }
}