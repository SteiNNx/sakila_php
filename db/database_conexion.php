<?php

class CL_Conexion {

    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $base = "sakila";
    private $cone; //objeto de tipo conexion

    public function Cl_Conexion() {
        try {
            $this->cone = mysqli_connect($this->host, $this->usuario, $this->password, $this->base);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    // metodos para insertar-eliminar-modificar
    public function sqlSelect($sql) {
        try {
            $resp = mysqli_query($this->cone, $sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function sqlOperaciones($sql) {
        try {
            $resp = mysqli_query($this->cone, $sql);
            return mysqli_affected_rows($this->cone);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
