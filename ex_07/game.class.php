<?php
require_once("character.class.php");

class Game {
    private $length = 0;
    private $players = array();

    public function __construct() {
        echo "New game !\n";
    }

    public function addPlayer($object) {
        array_push($this->players, $object);
        echo "New player " . '"' . $object->getPublicName() . '"' . ".\n";
    }

    public function player($players) {
        return $this->players[$players];
    }
}