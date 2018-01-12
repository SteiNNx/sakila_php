<?php


require_once '../db/database_conexion.php';

class DAO_Staff {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Staff() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    //SELECT * FROM staff;
    public function getAllStaffs() {
        $consulta = "SELECT * FROM staff";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}

