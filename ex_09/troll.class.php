<?php
require_once("character.class.php");
require_once("itroll.class.php");

class Troll extends Character implements iTroll, iCharacter {
    protected $hp = 200;

    function __construct($name = "Troll ") {
        static $i = 1;
        if ($name == "Troll ") {
            $this->name = $name . $i;
        } else {
            $this->name = $name;
        }
        $i++;
        $this->strength = 50;
        $this->magic = 15;
        $this->intelligence = 10;
        $this->life = 200;
    }
}