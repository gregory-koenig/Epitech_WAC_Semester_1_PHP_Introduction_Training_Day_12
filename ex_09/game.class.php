<?php
require_once("character.class.php");
require_once("troll.class.php");
require_once("goblin.class.php");
require_once("pangolin.class.php");
require_once("igame.class.php");

class Game implements iGame {
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