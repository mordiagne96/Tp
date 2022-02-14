<?php

    function affiche_li($nombre){
        for($i=1; $i<= $nombre; $i++)
        {
            echo "<li class=''>".$i."</li>";
        }
    }

    function isVide($nbr):bool
    {
        if(empty($nbr) && $nbr != 0){
            return true;
        }else{
            return false;
        }
    }

    /*function valid($coef, array &$arrayErrors, string $key ):void
    {
        if(isVide($coef)){
            $arrayErrors[$key] = "Veuillez renseigner le champ";
        }else{
            if(!is_numeric($coef)){
                $arrayErrors[$key] = "Veuillez saisir un nombre";
            }else{
                if($coef <= 0){
                $arrayErrors[$key] = "Veuillez saisir un nombre positif";
                }
            }
        }
    }
    */

    function valid($coef, array &$arrayErrors, string $key ):void
    {
        if(isVide($coef)){
            $arrayErrors[$key] = "Veuillez renseigner le champ";
        }else{
            if(!verifierNumero($coef)){
                $arrayErrors[$key] = "Veuillez saisir un nombre entier positif";
            }
        }
    }

    function verifierNumero($numero){
        if(preg_match('/[^0-9]/', $numero)){
            return false;
        }
        return true;
    }
?>