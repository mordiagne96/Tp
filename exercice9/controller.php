<?php
    include "fonctions.php";
    session_start();
    if(isset($_POST['valider'])){

        extract($_POST);
            $arrayErrors = [];

            valid($nombre, $arrayErrors, 'nbr');
            if($arrayErrors != null){
                $_SESSION['error'] = $arrayErrors;
                header('location:../index.php?exercice=9');
            }else{

                $_SESSION['nombre'] = $nombre;
                header('location:../index.php?exercice=9');
            }


    }
?>