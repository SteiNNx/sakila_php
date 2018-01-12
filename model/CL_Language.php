<?php

class Language{
    private $language_id;
    private $name;
    private $last_update;
    
    function __construct() {
        
    }

    
    function getLanguage_id() {
        return $this->language_id;
    }

    function getName() {
        return $this->name;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setLanguage_id($language_id) {
        $this->language_id = $language_id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

