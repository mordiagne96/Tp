<?php

        echo "<div class='divPagination'>";

        $prec = $_GET['exercice']-1;
        $suiv = $_GET['exercice']+1;
        if($prec >=1){
            echo "<a href='?exercice=$prec'><button class='btnPagination'>Precedent</button></a>";
        }else{
            echo "<a href='?exercice=$prec' style:'cursor:copy'><button class='btnPagination' disabled>Precedent</button></a>";
        }

        if($suiv <=15){
            echo "<a href='?exercice=$suiv'><button class='btnPagination'>Suivant</button></a>";
        }else{
            echo "<a href='?exercice=$suiv' style:'cursor:copy'><button class='btnPagination' disabled>Suivant</button></a>";
        }

        echo "</div>";

?>