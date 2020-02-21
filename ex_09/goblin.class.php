<?php
require_once("character.class.php");
require_once("igoblin.class.php");

class Goblin extends Character implements iGoblin {
    protected $hp = 150;

    function __construct($name = "Goblin ") {
        static $i = 1;
        if ($name == "Goblin ") {
            $this->name = $name . $i;
        } else {
            $this->name = $name;
        }
        $i++;
        $this->strength = 35;
        $this->magic = 20;
        $this->intelligence = 40;
        $this->life = 150;
    }

    public function attack($opponent) {
        echo '"' . $this->name . '"' . " hits " . '"' .
            $opponent->getPublicName() . '"' . ".\n";
        if ($this->magic > $opponent->getLife()) {
            $dmg = $opponent->getLife();
        } else {
            $dmg = $this->magic;
        }
        echo '"' . $opponent->getPublicName() . '"' . " loses " .
            $dmg . " HP!\n";
        $opponent->life -= $dmg;
        if ($opponent->getLife() == 0) {
            echo '"' . $opponent->getPublicName() . '"' . " died.\n";
        }
    }
}