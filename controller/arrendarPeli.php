<?php

include_once '../model/CL_Rental.php';
include_once '../model/DAO_Rental.php';
include_once '../model/DAO_Inventary.php';

if (isset($_POST["btnAccion"])) {
    $accion = $_POST["btnAccion"];
    if ($accion) {
        $aux_id_cliente = $_POST["sel_cliente"];
        $aux_inv_id = $_POST["sel_pel"];
        //echo 'cliente: '.$aux_id_cliente.' invent id: '.$aux_inv_id;
        $dao_invent = new DAO_Inventary();
        $rss = $dao_invent->getById($aux_inv_id);
        while ($sd = mysqli_fetch_array($rss)) {
            $idAux = $sd['manager_staff_id'];
        }
        //echo 'cliente: '.$aux_id_cliente.' invent id: '.$aux_inv_id.' manager: '.$idAux;
        date_default_timezone_set('Chile/Continental');
        $Fecha = date('Y/m/d G:i');
        $fecha_aux=strtotime ( '+3 day' , strtotime ( $Fecha ) ) ;
        $fecha_dev = date ( 'Y/m/d G:i' , $fecha_aux );
        
        $objt = new Rental();
        $objt->setRental_date($Fecha);
        $objt->setInventory_id($aux_inv_id);
        $objt->setCustomer_id($aux_id_cliente);
        $objt->setReturn_date($fecha_dev);
        $objt->setStaff_id($idAux);
        $objt->setLast_update($Fecha);
        
        $dao_rent=new DAO_Rental();
        $resp=$dao_rent->insertRental($objt);
        if ($resp==1) {
            echo 'Arrendada Exitosamente';
        }else{
            echo 'Problemas, Intentelo mas tarde';
        }
    }
}

