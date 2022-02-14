<?php
    include "fonctions.php";
    session_start();
    // $array = [];
    // $premier = array(1,2,10);
    // $superieur = array("fjsljk",20,"hsfjhk",33);

    // $array['premier'] = $premier;
    // $array['superieur'] = $superieur;

    // echo $array['premier'][2]."</br>";

    // echo $array['superieur'][2]."</br>";

    if(isset($_POST['valider'])){
        extract($_POST);

        
            $arrayErrors = [];
            
            valid($nombre, $arrayErrors, 'nbr');

            if($arrayErrors != null){
                $_SESSION['error'] = $arrayErrors;
                header('location:../index.php?exercice=11');
            }else{

                $moy = moyenne($nombre);

                $arrayTab = [];
                $arrayPremier = [];
                $arrayInferieur = [];
                $arraySuperieur = [];

                remplir_table($nombre, $moy, $arrayPremier, $arraySuperieur, $arrayInferieur);

                $arrayTab['premier'] = $arrayPremier;
                $arrayTab['superieur'] = $arraySuperieur;
                $arrayTab['inferieur'] = $arrayInferieur;

                $_SESSION['tab'] = $arrayTab;
                $_SESSION['nombre'] = $nombre;
                
                header('location:../index.php?exercice=11');
            }
            
        
        
        
    }


?>