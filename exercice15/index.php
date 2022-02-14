<?php
    use function PHPSTORM_META\type;
    session_start();
?>
            <div class="content">
            <p class="titleExo">Exercice 15</p>
                    <p class="para">Coloration Matrice</p>
                    <form method="POST" action="exercice15/controller.php" class="formContact">

                        <label class="erreurTaille <?= isset($_SESSION['champVide']) ?  '' : 'hidden' ?>">Tous les champs sont obligatoire</label>
                        <label class="labelMatrice">Taille de la Matrice Carré</label>
                        <input type="text" name="taille" class="btnTaille" value="<?= isset($_SESSION['taille'])? $_SESSION['taille']: '' ?>">
                        <label class="erreurTaille <?php if(isset($_SESSION['errorTaille'])){ echo '';}else{echo 'hidden';} ?>">Veuillez entrer une taille valide (N>=5)</label>
                        <label class="labelMatrice">Choix du couleur</label>
                        <select name="couleur" id="" class="selectColor" placeholder="Couleur">
                            <option value="">Choisissez une couleur</option>
                            <option value="bleu">Bleu</option>
                            <option value="rouge">Rouge</option>
                        </select>

                        <label class="labelMatrice">Choix de la position</label>
                        <div class="divRadio">
                                <input type="radio" name="position" value="HAUT" checked><label>Haut</label>
                                <input type="radio" name="position" value="BAS"><label>Bas</label>
                        </div>
                        <div>
                            <button type="submit" class="btnContact" name="dessiner">Dessiner</button>
                            <button type="submit" class="btnContact" name="actualiser">Actualiser</button>
                        </div>
                    </form>
                    <div class="matrice">

                        <?php
                            if(isset($_SESSION['taille'])){
                                echo "<table class='tab tab15' style='margin-top:10px'>";
                                for($i=0;$i < $_SESSION['taille'];$i++){
                                    echo "<tr>";
                                    for($j=0;$j < $_SESSION['taille'];$j++){
                                        if($_SESSION['couleur'] == "bleu"){

                                            if($_SESSION['position'] == "HAUT"){
                                                if($i < $j){
                                                    echo "<td class='colorBlue'>$i</td>";
                                                }else{
                                                    echo "<td class=''>$i</td>"; 
                                                }
                                            }else{
                                                if($i > $j){
                                                    echo "<td class='colorBlue'>$i</td>";
                                                }else{
                                                    echo "<td class=''>$i</td>"; 
                                                }
                                            }
                                                
                                        }else{

                                            if($_SESSION['position'] == "HAUT"){
                                                if($i < $j){
                                                    echo "<td class='colorRouge'>$i</td>";
                                                }else{
                                                    echo "<td class=''>$i</td>"; 
                                                }
                                            }else{
                                                if($i > $j){
                                                    echo "<td class='colorRouge'>$i</td>";
                                                }else{
                                                    echo "<td class=''>$i</td>"; 
                                                }
                                            }

                                        }
                                        
                                    }
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                        ?>
                    </div>



                    <?php
                        unset($_SESSION['errorTaille']);
                        unset($_SESSION['champVide']);
                        unset($_SESSION['taille']);
                        include "includes/pagination.php";
                    ?>
                
            </div>


