<?php
    session_start();
    include "fonctions.php";

    if(isset($_POST['getDate'])){
        extract($_POST);

        if(!isVide($date)){

            $_SESSION['post'] = $_POST;

            if(strtotime($date) != false){
    
                $d = date('d/m/Y',strtotime($date));
                echo "<p class='paraNoSuccess'>La date saisie: ".$d."</p>";
                $demain = date('d/m/Y', strtotime($date.'+ 1 day'));
                $hier = date('d/m/Y', strtotime($date.'- 1 day'));
    
                $arrayDate = [];
    
                date_suivante_precedente($d, $arrayDate);
                $_SESSION['date'] = $arrayDate;
                header('location:../index.php?exercice=7');
    
            }
            else{
    
                $error = "Veuillez Saisir un date valide [ex: 12/12/2000] ";
                $_SESSION['error'] = $error;
                header('location:../index.php?exercice=7');
    
            }

        }else{
                $error = "Veuillez renseigner ce champ";
                $_SESSION['error'] = $error;
                header('location:../index.php?exercice=7');
        }


    }
?>