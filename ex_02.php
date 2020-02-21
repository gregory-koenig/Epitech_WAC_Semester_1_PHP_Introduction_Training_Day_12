<?php
function cesar2($chaine) {
    $chaine = strtolower("$chaine");
    echo ($chaine = strtr("$chaine", "abcdefghijklmnopqrstuvwxyz",
        "cdefghijklmnopqrstuvwxyzab")) . "\n";
}