<?php
require_once '../db/database_conexion.php';
require_once 'CL_Film_Actor.php';

class DAO_Film_Actor {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Film_Actor() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function deleteFilmActorById($param) {
        try {
            $sql = "DELETE FROM film_actor where actor_id=@id_act AND film_id=@id_film";
            $sql = str_replace("@id_act", $param->getActor_id(), $sql);
            $sql = str_replace("@id_film", $param->getFilm_id(), $sql);
            //echo $sql;
            $resp2 = $this->conexion->sqlOperaciones($sql);
            return $resp2;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}

