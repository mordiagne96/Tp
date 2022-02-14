<?php
function verif_alpha($str){
    // On cherche tt les caractères autre que [A-z]
    preg_match("/([^A-Za-z\s])/",$str,$result);
    // si on trouve des caractère autre que A-z
    
    return $result;
}