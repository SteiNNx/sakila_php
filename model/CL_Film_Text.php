<?php

class Film_Text{
    private $film_id;
    private $tittle;
    private $description;
    
    function __construct() {
        
    }

    function getFilm_id() {
        return $this->film_id;
    }

    function getTittle() {
        return $this->tittle;
    }

    function getDescription() {
        return $this->description;
    }

    function setFilm_id($film_id) {
        $this->film_id = $film_id;
    }

    function setTittle($tittle) {
        $this->tittle = $tittle;
    }

    function setDescription($description) {
        $this->description = $description;
    }


}

