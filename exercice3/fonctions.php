<?php

    function somme(int $nombre1, int $nombre2)
    {
        $som = $nombre1 + $nombre2;
        return $som;
    }

    function difference(int $nombre1, int $nombre2)
    {
        $diff = $nombre1 - $nombre2;
        return $diff;
    }

    function produit(int $nombre1, int $nombre2)
    {
        $prod = $nombre1 * $nombre2;
        return $prod;
    }

    function modulo(int $nombre1, int $nombre2)
    {
        $mod = $nombre1 % $nombre2;
        return $mod;
    }

    function division(int $nombre1, int $nombre2)
    {
        $div = $nombre1 / $nombre2;
        return $div;
    }

    function carre(int $nombre){
        $car = $nombre * $nombre;
        return $car;
    }
    function carre_deux_nombre(int $nombre1, int $nombre2)
    {
        $c = carre($nombre1+$nombre2);
        return $c;
    }

    function exponentiel($nombre1, $nombre2)
    {
        $expo = $nombre1 ** $nombre2;
        return $expo;
    }

?>