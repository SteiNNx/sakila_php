<?php

class Country{
    private $country_id;
    private $country;
    private $last_update;
    function __construct() {
        
    }

    
    function getCountry_id() {
        return $this->country_id;
    }

    function getCountry() {
        return $this->country;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setCountry_id($country_id) {
        $this->country_id = $country_id;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

