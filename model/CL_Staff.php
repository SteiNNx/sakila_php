<?php

class Staff{
    private $staff_id;
    private $first_name;
    private $last_name;
    private $address_id;
    private $picture;
    private $email;
    private $store_id;
    private $active;
    private $username;
    private $password;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getStaff_id() {
        return $this->staff_id;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getAddress_id() {
        return $this->address_id;
    }

    function getPicture() {
        return $this->picture;
    }

    function getEmail() {
        return $this->email;
    }

    function getStore_id() {
        return $this->store_id;
    }

    function getActive() {
        return $this->active;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setStaff_id($staff_id) {
        $this->staff_id = $staff_id;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setAddress_id($address_id) {
        $this->address_id = $address_id;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setStore_id($store_id) {
        $this->store_id = $store_id;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

