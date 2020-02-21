<?php
require_once("character.class.php");

class Troll extends Character {
    protected $hp = 200;

    public function __construct($name = "Troll ") {
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