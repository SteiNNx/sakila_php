<?php

class Rental {
    private $rental_id;
    private $rental_date;
    private $inventory_id;
    private $customer_id;
    private $return_date;
    private $staff_id;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getRental_id() {
        return $this->rental_id;
    }

    function getRental_date() {
        return $this->rental_date;
    }

    function getInventory_id() {
        return $this->inventory_id;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getReturn_date() {
        return $this->return_date;
    }

    function getStaff_id() {
        return $this->staff_id;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setRental_id($rental_id) {
        $this->rental_id = $rental_id;
    }

    function setRental_date($rental_date) {
        $this->rental_date = $rental_date;
    }

    function setInventory_id($inventory_id) {
        $this->inventory_id = $inventory_id;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setReturn_date($return_date) {
        $this->return_date = $return_date;
    }

    function setStaff_id($staff_id) {
        $this->staff_id = $staff_id;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

