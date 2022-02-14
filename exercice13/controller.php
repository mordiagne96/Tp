
<?php
    session_start();
    include "fonctions.php";
    
    if(isset($_POST['valider'])){

        extract($_POST);

            $original = $phrase;
            $arrayPhrase = [];
            $chaine = "";

            $cpt = -1;
            $phrase= preg_replace('/\s\s+/',' ', $phrase);

        for ($i=0; $i < strlen($phrase); $i++){
            
            $chaine=$chaine.$phrase[$i];
            
            if($phrase[$i] == '.'){
                
                if(strlen($chaine) >= 25){
                    
                    if(ctype_alpha($phrase[0]) && !ctype_lower($phrase[0])){

                       $str = preg_replace('/[^a-zA-Z_,!$?.-0-9ÀÁàáâäôÈÉÊËèéêëÇç\'\(\)\s]/','', $chaine);

                                if(strcmp($str, $chaine) == 0){

                                    $cpt++;
                                    $arrayPhrase[$cpt] = $str;
                                }
                            
                        //die();

                    }
                    $phrase = substr($phrase, $i+1);

                }else{
                    
                    $phrase = substr($phrase, $i+1);

                }

                $chaine ="";
                $i=-1;
            }
            
        }
            $phraseCorriger = "";
        for($i=0; $i <= $cpt; $i++){
            $phraseCorriger = $phraseCorriger.$arrayPhrase[$i];
        }


        $_SESSION['phrase'] = $original;
        $_SESSION['correction'] = $phraseCorriger;

        
        

        header('location:../index.php?exercice=13');


    }
    
    if(isset($_POST['actualiser'])){
        echo "ok";
        session_unset();
        header('location:../index.php?exercice=13');

    }



?>