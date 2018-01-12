<?php
require_once '../db/database_conexion.php';
require_once 'CL_Address.php';
class DAO_Address {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Address() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function insertAddress ($param) {
        try {
            $sql = "insert into address(address_id,address,district,city_id,phone,last_update) "
                    . "values(null,'@addr','@distr',@city,'@phon','@lupdat')";
            $sql = str_replace(null, $param->getAddress_id(), $sql);
            $sql = str_replace("@addr", $param->getAddress(), $sql);
            $sql = str_replace("@distr", $param->getDistric(), $sql);
            $sql = str_replace("@city", $param->getCity_id(), $sql);
            $sql = str_replace("@phon", $param->getPhone(), $sql);
            $sql = str_replace("@lupdat", $param->getLast_update(), $sql);
            $resp2 = $this->conexion->sqlOperaciones($sql);
            return $resp2;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    } 
    
    public function maxIdAddress(){
        $consulta = "SELECT MAX(address_id) as 'max' FROM address;";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
}

