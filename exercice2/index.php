<div class="content">
    <p class="titleExo">Exercice 2</p>
<?php
    require_once "fonctions.php";

    $largeur= rand(1,50);
    $longueur = rand(51,100);

    echo "<span class='paraExo1_5'>Longueur: ".$longueur." Largeur: ".$largeur."</span>";

    echo "<span class='paraExo1_5'>Perimetre: ".perimetre_rectangle($longueur,$largeur)."</span>";

    echo "<span class='paraExo1_5'>La surface: ".surface_rectangle($longueur,$largeur)."</span>";

    echo "<span class='paraExo1_5'>Le diagonale: ".diagonale_rectangle($longueur,$largeur)."</span>";

    include "includes/pagination.php";
?>

</div>