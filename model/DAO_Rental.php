<?php

require_once '../db/database_conexion.php';
require_once 'CL_Rental.php';

class DAO_Rental {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Rental() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function insertRental($param) {
        try {
            $sql = "INSERT INTO rental(rental_id, rental_date, inventory_id, customer_id,"
                    . " return_date, staff_id, last_update) "
                    . "VALUES (null,'@rent_dat','@inv_id','@cust_id','@ret_dat','@st_id','@lt_dat')";
            $sql = str_replace(null, $param->getRental_id(), $sql);
            $sql = str_replace("@rent_dat", $param->getRental_date(), $sql);
            $sql = str_replace("@inv_id", $param->getInventory_id(), $sql);
            $sql = str_replace("@cust_id", $param->getCustomer_id(), $sql);
            $sql = str_replace("@ret_dat", $param->getReturn_date(), $sql);
            $sql = str_replace("@st_id", $param->getStaff_id(), $sql);
            $sql = str_replace("@lt_dat", $param->getLast_update(), $sql);
            //echo $sql;
            $resp2 = $this->conexion->sqlOperaciones($sql);
            return $resp2;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //SELECT * FROM rental rt LEFT JOIN inventory iv ON(rt.inventory_id=iv.inventory_id)INNER JOIN customer ct on(rt.customer_id=ct.customer_id)  where iv.film_id=1 ;

    public function getAllClientByIdFilm($idFilm) {
        $consulta = "SELECT * FROM rental rt "
                . "LEFT JOIN inventory iv "
                . "ON(rt.inventory_id=iv.inventory_id)"
                . "INNER JOIN customer ct on(rt.customer_id=ct.customer_id)  "
                . "where iv.film_id=$idFilm ORDER by rt.rental_date desc";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
