<?php
function my_sort(&$tableau) {
    $tableau_first = array_shift($tableau);
    $tableau_end = array_pop($tableau);
    array_unshift($tableau, $tableau_end);
    array_push($tableau, $tableau_first);
    static $count = 1;
    return $count++;
}