<?php

class Inventory{
    private $inventory_id;
    private $film_id;
    private $store_id;
    private $last_update;
    
    function __construct() {
        
    }

    function getInventory_id() {
        return $this->inventory_id;
    }

    function getFilm_id() {
        return $this->film_id;
    }

    function getStore_id() {
        return $this->store_id;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setInventory_id($inventory_id) {
        $this->inventory_id = $inventory_id;
    }

    function setFilm_id($film_id) {
        $this->film_id = $film_id;
    }

    function setStore_id($store_id) {
        $this->store_id = $store_id;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}
