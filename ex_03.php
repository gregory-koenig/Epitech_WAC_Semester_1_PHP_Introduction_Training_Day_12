<?php
function rev_epur_str($chaine = NULL) {
    if (!is_string("$chaine") || $chaine === NULL) {
        return false;
    } else {
        $chaine = trim("$chaine");
        $chaine = preg_replace("#\s+#", " ", "$chaine");
        $chaine = explode(" ", "$chaine");
        $chaine = array_reverse($chaine);
        return $chaine = implode(" ", $chaine);
    }
}