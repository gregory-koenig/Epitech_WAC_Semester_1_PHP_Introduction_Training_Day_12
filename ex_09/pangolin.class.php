<?php
require_once("character.class.php");
require_once("ipangolin.class.php");

class Pangolin extends Character implements iPangolin, iCharacter {
    protected $hp = 120;

    function __construct($name = "Pangolin ") {
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