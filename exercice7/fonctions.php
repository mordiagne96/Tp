<?php


    function date_suivante_precedente(string $date, array &$tabDate){

        //$d = date('d/m/Y',strtotime($date));
        $demain = date('d/m/Y', strtotime($date.'+ 1 day'));
        $hier = date('d/m/Y', strtotime($date.'- 1 day'));

        $tabDate['demain'] = $demain;
        $tabDate['hier'] = $hier;

    }

    function isVide($nbr):bool
    {
        if(empty($nbr) && $nbr != 0){
            return true;
        }else{
            return false;
        }
    }



?>