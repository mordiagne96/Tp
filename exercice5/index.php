<div class="content">
    <p class="titleExo">Exercice 5</p>
<?php
    require_once "fonctions.php";

    $xA = rand(1,100); $yA = rand(1,100);
    $xB = rand(1,100); $yB = rand(1,100);
    
    echo "<span class='paraExo1_5'>La distance des points A(".$xA.", ".$yA.") et B(".$xB.",".$yB.") est de: </span>";
    $distance = distance_deux_points($xA, $xB, $yA, $yB);

    echo "<span class='paraExo1_5'>distance = ".$distance."</span>";
    
    include "includes/pagination.php";
?>

</div>