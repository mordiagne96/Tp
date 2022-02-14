<?php
    include "fonctions.php";
    session_start();

    if(isset($_POST['valider'])){
        extract($_POST);

        if($option == "Français"){
            echo "c'est francais";
            $mois = array("Janvier","Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aoüt", "Septembre", "Octobre", "Novembre", "Décembre");
            $_SESSION['langue'] = "Français";
            $_SESSION['mois'] = $mois;

            header('location:../index.php?exercice=12');

        }else{
            $mois = array("January","February","March","April","May","June","July","August","September","October","November","December");
            
            $_SESSION['mois'] = $mois;
            $_SESSION['langue'] = "Anglais";

            header('location:../index.php?exercice=12');

        }

            
        
        
        
    }


?>