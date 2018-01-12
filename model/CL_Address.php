<?php

class Address{
    private $address_id;
    private $address;
    private $address2;
    private $distric;
    private $city_id;
    private $postal_code;
    private $phone;
    private $last_update;
    
    function __construct() {
        
    }
    
    function getAddress_id() {
        return $this->address_id;
    }

    function getAddress() {
        return $this->address;
    }

    function getAddress2() {
        return $this->address2;
    }

    function getDistric() {
        return $this->distric;
    }

    function getCity_id() {
        return $this->city_id;
    }

    function getPostal_code() {
        return $this->postal_code;
    }

    function getPhone() {
        return $this->phone;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setAddress_id($address_id) {
        $this->address_id = $address_id;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setAddress2($address2) {
        $this->address2 = $address2;
    }

    function setDistric($distric) {
        $this->distric = $distric;
    }

    function setCity_id($city_id) {
        $this->city_id = $city_id;
    }

    function setPostal_code($postal_code) {
        $this->postal_code = $postal_code;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}