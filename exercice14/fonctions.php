<?php

    function verifierNumero($numero){
        $str = preg_replace('/\s+/','', $numero);
        
        if (preg_match('/(^78|77|75|76|70)[0-9]{7}/', $str) && strlen($str) == 9) {
            return true;
        }else {
            return false;
        }
    }


    function verif_alpha_Num($str){
        // On cherche tt les caractères autre que [A-z]
        if(preg_match('/[^a-zA-Z0-9ÀÁàáâäôÈÉÊËèéêëÇç\s]/', $str)){
            return false;
        }
        return true;
    }

    function verifierOperateur($numero):string{
        if(preg_match('/(^78|77)/', $numero)){
            return "Orange";
        }

        if(preg_match('/(^76)/', $numero)){
            return "Free";
        }

        if(preg_match('/(^70)/', $numero)){
            return "Expresso";
        }

        if(preg_match('/(^75)/', $numero)){
            return "Promobile";
        }
    }

    function cptOperateur($numero){
        switch(verifierOperateur($numero)){
            case "Orange":
                    $_SESSION['ope']['orange'] = $_SESSION['ope']['orange'] + 1;
                break;
            case "Free":
                    $_SESSION['ope']['free'] += 1;
                break;
            case "Expresso":
                $_SESSION['ope']['expresso'] += 1;
                break;
            case "Promobile":
                $_SESSION['ope']['promobile'] += 1;
                break;
        }
    }
?>