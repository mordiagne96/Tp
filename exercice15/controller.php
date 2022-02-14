<?php
    include "fonctions.php";
    session_start();

    if(isset($_POST['dessiner'])){
        //var_dump($_POST);

        extract($_POST);

        if($taille == "" || $couleur == ""){
            $_SESSION['champVide'] = "Tous les champs sont obligatoires";
            
            header('location:../index.php?exercice=15');
        }else{
            if(verifierNumero($taille)){
                $_SESSION['taille'] = $taille;
                $_SESSION['couleur'] = $couleur;
                $_SESSION['position'] = $position;
                header('location:../index.php?exercice=15');
                
            }else{
                $_SESSION['errorTaille'] = "";
                header('location:../index.php?exercice=15');
            }

        }
        


    }

    if(isset($_POST['actualiser'])){
        session_unset();
        header('location:../index.php?exercice=15');
    }
?>