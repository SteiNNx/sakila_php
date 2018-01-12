<?php

class Store{
    private $store_id;
    private $manager_staff_id;
    private $address_id;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getStore_id() {
        return $this->store_id;
    }

    function getManager_staff_id() {
        return $this->manager_staff_id;
    }

    function getAddress_id() {
        return $this->address_id;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setStore_id($store_id) {
        $this->store_id = $store_id;
    }

    function setManager_staff_id($manager_staff_id) {
        $this->manager_staff_id = $manager_staff_id;
    }

    function setAddress_id($address_id) {
        $this->address_id = $address_id;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}
