<div class="content">
    <p class="titleExo">Exercice 3</p>
    
<?php
    require_once 'fonctions.php';
    
    $nombre1 = rand(1,100);
    $nombre2 = rand(1,100);

    echo "<span class='paraExo1_5'>Resultats des opérations sur les deux nombres <br>N1 = ".$nombre1." et N2=".$nombre2."sont: </span>";

    echo "<span class='paraExo1_5'>La somme: ".somme($nombre1,$nombre2)."</span>";

    echo "<span class='paraExo1_5'>La différence: ".difference($nombre1,$nombre2)."</span>";

    echo "<span class='paraExo1_5'>Le produit: ".produit($nombre1,$nombre2)."</span>";

    echo "<span class='paraExo1_5'>La division: ".division($nombre1,$nombre2)."</span>";
    
    echo "<span class='paraExo1_5'>Le modulo: ".modulo($nombre1,$nombre2)."</span>";

    echo "<span class='paraExo1_5'>Le carré: ".carre_deux_nombre($nombre1,$nombre2)."</span>";

    echo "<span class='paraExo1_5'>L'exponentiel: ".exponentiel($nombre1,$nombre2)."</span>";

    include "includes/pagination.php";
?>

</div>