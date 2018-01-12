<?php

 class Actor{
   private $actor_id;
   private $first_name;
   private $last_name;
   private $last_update;
   
   function __construct() {
       
   }

   
   function getActor_id() {
       return $this->actor_id;
   }

   function getFirst_name() {
       return $this->first_name;
   }

   function getLast_name() {
       return $this->last_name;
   }

   function getLast_update() {
       return $this->last_update;
   }

   function setActor_id($actor_id) {
       $this->actor_id = $actor_id;
   }

   function setFirst_name($first_name) {
       $this->first_name = $first_name;
   }

   function setLast_name($last_name) {
       $this->last_name = $last_name;
   }

   function setLast_update($last_update) {
       $this->last_update = $last_update;
   }


}

