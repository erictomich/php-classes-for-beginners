<?php

class GroupClass {

    private $id;
    private $name;
    private $description;
    private $events = array();

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function setEvent($event) {
        array_push($this->events, $event);
    }
    
    function getEvents() {
        return $this->events;
    }

}