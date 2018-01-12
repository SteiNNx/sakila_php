<?php

class Film_Category{
    private $film_id;
    private $category_id;
    private $last_update;
    
    function __construct() {
        
    }

    function getFilm_id() {
        return $this->film_id;
    }

    function getCategory_id() {
        return $this->category_id;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setFilm_id($film_id) {
        $this->film_id = $film_id;
    }

    function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

