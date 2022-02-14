<?php
    include "includes/header.php";

    if(isset($_GET['exercice']))
    {
        switch($_GET['exercice']){
            case 1:
                include "exercice1/index.php";
                break;
            case 2:
                include "exercice2/index.php";
                break;
            case 3:
                include "exercice3/index.php";
                break;
            case 4:
                include "exercice4/index.php";
                break;
            case 5:
                include "exercice5/index.php";
                break;
            case 6:
                include "exercice6/index.php";
                break;
            case 7:
                include "exercice7/index.php";
                break;
            case 8:
                include "exercice8/index.php";
                break;
            case 9:
                include "exercice9/index.php";
                break;
            case 10:
                include "exercice10/index.php";
                break;
            case 11:
                include "exercice11/index.php";
                break;
            case 12:
                include "exercice12/index.php";
                break;
            case 13:
                include "exercice13/index.php";
                break;
            case 14:
                include "exercice14/index.php";
                break;
            case 15:
                include "exercice15/index.php";
                break;
            case 16:
                include "exercice16/index.php";
                break;
            case 17:
                include "exercice17/index.php";
                break;
        }
            //Pagination

            
    }else{
        include "includes/accueil.php";
    }

    include "includes/footer.php";
?>