<?php

class Film_Actor{
    private $actor_id;
    private $film_id;
    private $last_update;
    
    function __construct() {
        
    }

    function getActor_id() {
        return $this->actor_id;
    }

    function getFilm_id() {
        return $this->film_id;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setActor_id($actor_id) {
        $this->actor_id = $actor_id;
    }

    function setFilm_id($film_id) {
        $this->film_id = $film_id;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

