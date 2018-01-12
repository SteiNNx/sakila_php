<?php

require_once '../db/database_conexion.php';

class DAO_City {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_City() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function getAllCitys() {
        $consulta = "SELECT * FROM city ct INNER JOIN country co ON(ct.country_id=co.country_id)";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
