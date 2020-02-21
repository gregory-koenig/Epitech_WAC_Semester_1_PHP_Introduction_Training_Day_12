<?php
interface iGame {
    public function __construct();
    public function addPlayer($object);
    public function player($players);
}