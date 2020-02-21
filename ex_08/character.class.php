<?php
abstract class Character {
    protected $name;
    protected $strength;
    protected $magic;
    protected $intelligence;
    protected $life;
    protected $hp = 100;

    public function __construct($name = "Character ", $strength = 0,
                                $magic = 0, $intelligence = 0, $life = 100) {
        static $i = 1;
        if ($name == "Character ") {
            $this->name = $name . $i;
        } else {
            $this->name = $name;
        }
        $i++;
        $this->strength = $strength;
        $this->magic = $magic;
        $this->intelligence = $intelligence;
        $this->life = $life;
    }

    public function __toString() {
        return "My name is $this->name.\n";
    }

    protected function getName() {
        return $this->name;
    }

    protected function getStrength() {
        return $this->strength;
    }

    protected function getMagic() {
        return $this->magic;
    }

    protected function getIntelligence() {
        return $this->intelligence;
    }

    protected function getLife() {
        return $this->life;
    }

    public function getPublicName() {
        return $this->name;
    }

    public function attack($opponent) {
        echo '"' . $this->name . '"' . " hits " . '"' .
            $opponent->getPublicName() . '"' . ".\n";
        if ($this->strength > $opponent->getLife()) {
            $dmg = $opponent->getLife();
        } else {
            $dmg = $this->strength;
        }
        echo '"' . $opponent->getPublicName() . '"' . " loses " .
            $dmg . " HP!\n";
        $opponent->life -= $dmg;
        if ($opponent->getLife() == 0) {
            echo '"' . $opponent->getPublicName() . '"' . " died.\n";
        }
    }

    public function heal($opponent = NULL) {
        if ($opponent == NULL) {
            $opponent = $this;
        }
        if ($this->intelligence + $opponent->getLife() >= $opponent->hp) {
            $heal = $opponent->hp - $opponent->getLife();
        } else {
            $heal = $this->intelligence;
        }
        if ($opponent == $this) {
            echo '"' . $this->name . '"' . " heals himself for " .
                $heal . " HP!\n";
        } else {
            echo '"' . $this->name . '"' . " heals " .
                $opponent->getPublicName() . " for " . $heal . " HP!\n";
        }
        $opponent->life += $heal;
    }
}