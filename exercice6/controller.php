<?php

    include "fonctions.php";

    session_start();

    if(isset($_POST['resoudre'])){
        extract($_POST);

        $_SESSION['post'] = $_POST;
        $arrayErrors = [];
        $arrayErrorsChaine = [];

        valid($coefA, $arrayErrors, $arrayErrorsChaine, 'coefA');
        valid($coefB, $arrayErrors, $arrayErrorsChaine, 'coefB');
        valid($coefC, $arrayErrors, $arrayErrorsChaine, 'coefC');
        
        if ($arrayErrors != null || $arrayErrorsChaine != null){

            $_SESSION['errorChaine'] = $arrayErrorsChaine;
            $_SESSION['error'] = $arrayErrors;
            header('location:../index.php?exercice=6');

        }else{
            
            if(is_numeric($coefA) && is_numeric($coefB) && is_numeric($coefC))
            {
                $x=null; $x0=null; $x1=null; $x2=null; 
                resoudre($coefA,$coefB,$coefC,$x,$x0,$x1,$x2);
                $_SESSION['x0'] = $x0;
                $_SESSION['x1'] = $x1;
                $_SESSION['x2'] = $x1;
                $_SESSION['x'] = $x;
                $_SESSION['resoudre'] = 0;

                header('location:../index.php?exercice=6');
            }else{
                echo "ok";
            }
            
        }

    }
?>