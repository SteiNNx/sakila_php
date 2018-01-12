<?php

class Film{
    private $film_id;
    private $tittle;
    private $description;
    private $release_year;
    private $lenguage_id;
    private $original_lenguage_id;
    private $rental_duration;
    private $rental_rate;
    private $lenght;
    private $replacement_cost;
    private $rating;
    private $special_features;
    private $last_update;
    
    function __construct() {
        
    }

    function getFilm_id() {
        return $this->film_id;
    }

    function getTittle() {
        return $this->tittle;
    }

    function getDescription() {
        return $this->description;
    }

    function getRelease_year() {
        return $this->release_year;
    }

    function getLenguage_id() {
        return $this->lenguage_id;
    }

    function getOriginal_lenguage_id() {
        return $this->original_lenguage_id;
    }

    function getRental_duration() {
        return $this->rental_duration;
    }

    function getRental_rate() {
        return $this->rental_rate;
    }

    function getLenght() {
        return $this->lenght;
    }

    function getReplacement_cost() {
        return $this->replacement_cost;
    }

    function getRating() {
        return $this->rating;
    }

    function getSpecial_features() {
        return $this->special_features;
    }

    function getLast_update() {
        return $this->last_update;
    }

    function setFilm_id($film_id) {
        $this->film_id = $film_id;
    }

    function setTittle($tittle) {
        $this->tittle = $tittle;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setRelease_year($release_year) {
        $this->release_year = $release_year;
    }

    function setLenguage_id($lenguage_id) {
        $this->lenguage_id = $lenguage_id;
    }

    function setOriginal_lenguage_id($original_lenguage_id) {
        $this->original_lenguage_id = $original_lenguage_id;
    }

    function setRental_duration($rental_duration) {
        $this->rental_duration = $rental_duration;
    }

    function setRental_rate($rental_rate) {
        $this->rental_rate = $rental_rate;
    }

    function setLenght($lenght) {
        $this->lenght = $lenght;
    }

    function setReplacement_cost($replacement_cost) {
        $this->replacement_cost = $replacement_cost;
    }

    function setRating($rating) {
        $this->rating = $rating;
    }

    function setSpecial_features($special_features) {
        $this->special_features = $special_features;
    }

    function setLast_update($last_update) {
        $this->last_update = $last_update;
    }


}

