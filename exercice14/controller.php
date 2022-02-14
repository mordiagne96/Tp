<?php
    include "fonctions.php";
    session_start();
    if(isset($_POST['validNum'])){

        extract($_POST);
        $origineNum = $numeroTel;

        if(verifierNumero($numeroTel)){
            $_SESSION['hidden'] = "ok";
            $_SESSION['origineNum'] = $origineNum;
            header('location:../index.php?exercice=14');
        }else{
            $_SESSION['errorNum'] = "Numéro incorrecte (Ex: 77 100 00 00)";
            unset($_SESSION['hidden']);
            header('location:../index.php?exercice=14');
        }
    }

    if(isset($_POST['Ajouter'])){
        extract($_POST);
        
        if(verif_alpha_Num($nomcomplet)){

            unset($_SESSION['hidden']);
            unset($_SESSION['origineNum']);

            if(!isset($_SESSION['tabNum'])){
                $_SESSION['ope']['orange'] = 0;
                $_SESSION['ope']['free'] = 0;
                $_SESSION['ope']['expresso'] = 0;
                $_SESSION['ope']['promobile'] = 0;
            }

            cptOperateur($numeroTel);
            
            if(!isset($_SESSION['tabNum'])){
                $_SESSION['tabNum'] = [];
                $_SESSION['tabNomComplet'] = [];
                $_SESSION['tabNum'][] = $numeroTel;
                $_SESSION['tabNomComplet'][] = $nomcomplet;
                //var_dump($_SESSION['tabNum']);
                header('location:../index.php?exercice=14');
            }else{
                $_SESSION['tabNum'][] = $numeroTel;
                $_SESSION['tabNomComplet'][] = $nomcomplet;
                
                header('location:../index.php?exercice=14');
            }
        }else{
            $_SESSION['errorNomComplet'] = "Veuillez Entrer un nom valide (Ex: Mon Nom)";
            header('location:../index.php?exercice=14');
        }
    }


    if(isset($_POST['reinitialiser'])){
        session_unset();
        header('location:../index.php?exercice=14');
    }
?>