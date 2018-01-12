<?php

require_once '../db/database_conexion.php';

class DAO_Film {

    //SELECT * FROM film WHERE length BETWEEN 90 AND 120;
    private $conexion;

    public function DAO_Film() {
        try {
            $this->conexion = new CL_Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function getAllPeliculas() {
        $consulta = "SELECT * FROM film f "
                . "INNER JOIN language l ON(f.language_id=l.language_id) "
                . "WHERE length BETWEEN 90 AND 120 "
                . "ORDER by f.title ASC;";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPeliculaById($id_pelicula) {
        $consulta = "SELECT * FROM film f "
                . "INNER JOIN language l ON(f.language_id=l.language_id) "
                . "WHERE f.film_id=$id_pelicula "
                . "ORDER by f.title ASC;";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    //SELECT * FROM film_actor fa LEFT JOIN film fl ON(fa.film_id=fl.film_id) WHERE fa.actor_id=200 
    public function getPeliculaByIdActor($id_actor) {
        $consulta = "SELECT * FROM film_actor fa "
                . "LEFT JOIN film fl ON(fa.film_id=fl.film_id) "
                . "WHERE fa.actor_id=$id_actor ORDER BY fa.film_id DESC";
        try {
            return $this->conexion->sqlSelect($consulta);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
