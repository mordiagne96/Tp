<?php

    function difference(int $nombre1, int $nombre2)
    {
        $diff = $nombre1 - $nombre2;
        return $diff;
    }

    function carre(int $nombre){
        $car = $nombre * $nombre;
        return $car;
    }

    function somme(int $nombre1, int $nombre2)
    {
        $som = $nombre1 + $nombre2;
        return $som;
    }

    function distance_deux_points(int $xA,int $xB, int $yA, int $yB)
    {
        $dist = sqrt(somme(carre( difference($xB,$xA)), carre(difference($yB,$yA))));
        return $dist;
    }

?>