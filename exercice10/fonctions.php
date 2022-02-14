<?php

    function genere_input(int $nombre)
    {

        for($i=1; $i<=$nombre; $i++)
        {
            $prod = $i*$nombre;
            echo "<input type='text' class='form-control' value='".$i."' readonly>";
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