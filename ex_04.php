<?php
function resum_join_str($chaine_1 = NULL, $chaine_2 = NULL) {
    if ($chaine_1 == NULL || $chaine_2 == NULL) {
        return false;
    }
    $chaine_1 = str_pad("$chaine_1", 12, ".");
    $chaine_2 = str_pad("$chaine_2", 8, ".", STR_PAD_LEFT);
    return substr("$chaine_1", 0, 12) . substr("$chaine_2", -8);
}