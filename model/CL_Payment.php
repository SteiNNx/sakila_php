<?php

class Payment{
    private $payment_id;
    private $customer_id;
    private $staff_id;
    private $rental_id;
    private $amount;
    private $payment_date;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getPayment_id() {
        return $this->payment_id;
    }

    function getCustomer_id() {
        return $this->customer_id;
    }

    function getStaff_id() {
        return $this->staff_id;
    }

    function getRental_id() {
        return $this->rental_id;
    }

    function getAmount() {
        return $this->amount;
    }

    function getPayment_date() {
        return $this->payment_date;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setPayment_id($payment_id) {
        $this->payment_id = $payment_id;
    }

    function setCustomer_id($customer_id) {
        $this->customer_id = $customer_id;
    }

    function setStaff_id($staff_id) {
        $this->staff_id = $staff_id;
    }

    function setRental_id($rental_id) {
        $this->rental_id = $rental_id;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setPayment_date($payment_date) {
        $this->payment_date = $payment_date;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

