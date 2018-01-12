<?php

require_once '../db/database_conexion.php';

class DAO_Actor {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Actor() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function getAllActor() {
        $consulta = "SELECT * FROM actor ORDER BY actor_id desc";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
