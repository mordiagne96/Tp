<?php
    function permutation(int &$nombre1, int &$nombre2){
        $tmp = $nombre1;
        $nombre1 = $nombre2;
        $nombre2 = $tmp;
    }
?>