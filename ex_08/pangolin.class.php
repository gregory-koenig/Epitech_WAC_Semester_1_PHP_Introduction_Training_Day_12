<?php
require_once("character.class.php");

class Pangolin extends Character {
    protected $hp = 120;

    public function __construct($name = "Pangolin ") {
        static $i = 1;
        if ($name == "Pangolin ") {
            $this->name = $name . $i;
        } else {
            $this->name = $name;
        }
        $i++;
        $this->strength = 40;
        $this->magic = 10;
        $this->intelligence = 55;
        $this->life = 120;
    }
}