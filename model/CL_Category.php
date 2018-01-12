<?php

class Category{
    private $category_id;
    private $name;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getCategory_id() {
        return $this->category_id;
    }

    function getName() {
        return $this->name;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}
