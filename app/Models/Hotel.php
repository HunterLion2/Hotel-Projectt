<?php
namespace Models;

class Hotel {
    public $name;
    public $location;

    public function __construct($name, $location) {
        $this->name = $name;
        $this->location = $location;
    }
}
