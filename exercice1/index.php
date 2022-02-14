<div class="content">
    <p class="titleExo">Exercice 1</p>
    <?php
        require_once "fonctions.php";
        $cote = rand(1,100);
        echo "<span class='paraExo1_5'>le coté est de: ".$cote."</span>";
        echo "<span class='paraExo1_5'>Le périmetre est de: ".perimetre_carre($cote)."</span>";

        echo "<span class='paraExo1_5'>La surface est de: ".surface_carre($cote)."</span>";

        echo "<span class='paraExo1_5'>Le diagonale est de: ".diagonale_carre($cote)."</span>";

        include "includes/pagination.php";
    ?>

</div>
