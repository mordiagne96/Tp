<?php

    function table_multiplication(int $nombre)
    {

        for($i=0; $i<=12; $i++)
        {
            $prod = $i*$nombre;
            echo "<li class='list-group-item'>".$i." X ".$nombre." = ".$prod."</li>";
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

    function valid($coef, array &$arrayErrors, string $key ):void
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
?>