<?php
interface iGoblin {
    public function __toString();
    public function getPublicName();
    public function attack($opponent);
    public function heal($opponent = NULL);
}