<?php

    function perimetre_carre(int $cote){
            $p = $cote*4;
        return $p;
    }
    
    function surface_carre(int $cote){
        $s = $cote * $cote;
        return $s;
    }

    function diagonale_carre(float $cote){
        $d = $cote*sqrt(2);
        return $d;
    }


?>