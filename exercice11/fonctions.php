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
                if(!is_numeric($coef)){
                    $arrayErrors[$key] = "Veuillez saisir un nombre";
                }else{
                    if($coef < 10000  || is_int($coef)){

                        $arrayErrors[$key] = "Veuillez saisir un nombre entier positif";
                    }
                }
            }
        }

        function nombre_premier($nbre):bool{
            $n = $nbre/2;
            for($i =2; $i <= $n; $i++)
            {
                if($nbre % $i == 0){
                    return false;
                }

            }
            return true;
    
        }

        function remplir_table($nbr,$moy, array &$arrayPre, array &$arraySup, array &$arrayInf):void{

            for($i=1; $i <= $nbr; $i++){
                if(nombre_premier($i)){
                    $nP = count($arrayPre);
                    $arrayPre[$nP] = $i;
                }
                if($i < $moy){
                    $nP = count($arrayInf);
                    $arrayInf[$nP] = $i;
                }
                if($i > $moy){
                    $nP = count($arraySup);
                    $arraySup[$nP] = $i;
                }
            }

        }

        function moyenne($nbre):float{
            $som = 0;
            for($i=1; $i<=$nbre; $i++){
                $som = $som + $i;
            }

            $moy = $som/$nbre;

            return $moy;
        }

        
?>