<?php

require_once '../db/database_conexion.php';

class DAO_Inventary {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Inventary() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function getAllInventary() {
        $consulta = "SELECT * FROM inventory iv 
            INNER JOIN film fl ON(iv.film_id=fl.film_id) 
            LEFT join store st ON(iv.store_id=st.store_id) 
            LEFT JOIN address ad ON(st.address_id=ad.address_id)";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //SELECT * FROM inventory inv LEFT JOIN store st ON(inv.store_id=st.store_id) WHERE inv.inventory_id=1;
    public function getById($id) {
        $consulta = "SELECT * FROM inventory inv "
                . "LEFT JOIN store st ON(inv.store_id=st.store_id) WHERE inv.inventory_id=".$id."";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
