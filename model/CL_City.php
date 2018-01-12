<?php

class City{
    private $city_id;
    private $city;
    private $country_id;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getCity_id() {
        return $this->city_id;
    }

    function getCity() {
        return $this->city;
    }

    function getCountry_id() {
        return $this->country_id;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setCity_id($city_id) {
        $this->city_id = $city_id;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setCountry_id($country_id) {
        $this->country_id = $country_id;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

