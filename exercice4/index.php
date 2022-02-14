<div class="content">
    <p class="titleExo">Exercice 4</p><?php
    require_once "fonctions.php";
    $nombre1 = rand(1,500);
    $nombre2 = rand(1,500);

    echo "<span class='paraExo1_5'>les nombre avant permutation</span>";

    echo "<span class='paraExo1_5'>Nombre1 = ".$nombre1." et Nombre2 = ".$nombre2."</span>";

        permutation($nombre1, $nombre2);

    echo "<span class='paraExo1_5'>Les nombres après permutations </span>";

    echo "<span class='paraExo1_5'>Nombre1 = ".$nombre1." et Nombre2 = ".$nombre2."</span>";

    include "includes/pagination.php";
?>

</div>