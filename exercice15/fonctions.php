<?php
    function verifierNumero($numero){
        if(preg_match('/[^0-9]/', $numero) || $numero < 5){
            return false;
        }
        return true;
    }
?>