<?php

class Customer{
    private $customer_id;
    private $store_id;
    private $first_name;
    private $last_name;
    private $email;
    private $address_id;
    private $active;
    private $create_date;
    private $last_update;
    function __construct() {
        
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getStore_id() {
        return $this->store_id;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getEmail() {
        return $this->email;
    }

    function getAddress_id() {
        return $this->address_id;
    }

    function getActive() {
        return $this->active;
    }

    function getCreate_date() {
        return $this->create_date;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setStore_id($store_id) {
        $this->store_id = $store_id;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAddress_id($address_id) {
        $this->address_id = $address_id;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setCreate_date($create_date) {
        $this->create_date = $create_date;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

