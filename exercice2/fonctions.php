<?php
    function perimetre_rectangle(int $longueur, int $largeur)
    {
        $p = ($longueur+$largeur) * 2;
        return $p;
    }

    function surface_rectangle(int $longueur, int $largeur)
    {
        $s = $longueur * $largeur;
        return $s;
    }
    
    function carre_nombre(float $nombre)
    {
        $c = $nombre * $nombre;
        return $c;
    }

    function diagonale_rectangle($longueur, $largeur)
    {
        $d = sqrt(carre_nombre($longueur)+carre_nombre($largeur));
        return $d;
    }
?>