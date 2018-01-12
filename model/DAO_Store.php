<?php

require_once '../db/database_conexion.php';
require_once 'CL_Store.php';

class DAO_Store {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Store() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function getAllStores() {
        $consulta = "SELECT st.store_id,sf.first_name,sf.last_name,ad.address,ci.city,co.country "
                . "FROM store st INNER JOIN staff sf "
                . "ON(st.manager_staff_id=sf.staff_id) "
                . "INNER JOIN address ad "
                . "ON(st.address_id=ad.address_id) "
                . "INNER JOIN city ci "
                . "ON(ad.city_id=ci.city_id)"
                . "INNER JOIN country co "
                . "ON(ci.country_id=co.country_id)";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function insertStore ($param) {
        try {
            $sql = "insert into store(store_id,manager_staff_id,address_id,last_update) "
                    . "values(null,@manager_id,@address_id,'@last_update')";
            $sql = str_replace(null, $param->getStore_id(), $sql);
            $sql = str_replace("@manager_id", $param->getManager_staff_id(), $sql);
            $sql = str_replace("@address_id", $param->getAddress_id(), $sql);
            $sql = str_replace("@last_update", $param->getLast_update(), $sql);
            $resp2 = $this->conexion->sqlOperaciones($sql);
            return $resp2;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }  
}
