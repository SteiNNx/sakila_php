<?php

include_once '../model/DAO_Film_Actor.php';
include_once '../model/CL_Film_Actor.php';
if (isset($_POST["btnAccion"])) {
    $accion = $_POST["btnAccion"];
    $id_actor = $_POST["sel_actor"];
    $id_pel = $_POST["sel_pel"];
    //echo 'id actor: '.$id_actor.' id pel: '.$id_pel;
    if ($id_actor != 000 & $id_pel != 000) {
        $objt = new Film_Actor();
        $objt->setFilm_id($id_pel);
        $objt->setActor_id($id_actor);
        $dao= new DAO_Film_Actor();
        $resp=$dao->deleteFilmActorById($objt);
        if ($resp=1) {
            echo 'Eliminado con Exito';
        } else {
            echo 'Fallo, Intentelo dsps';    
        }
    } else {
        echo 'Seleccione un Actor';
    }
}

