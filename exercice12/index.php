<?php

use function PHPSTORM_META\type;
session_start();
    ?>
            <div class="content">
            <p class="titleExo">Exercice 12</p>
                    <p class="para">Choisissez une langue</p>
                    <form method="POST" action="exercice12/controller.php" class="formCalcule">
                        <select name="option" class="option">
                            <option>Français</option>
                            <option>Anglais</option>
                        </select>
                        <input  type="submit" class="btnResoudre" value="Valider" name="valider">
                    </form>

                    <table class="tab tab12">
                        <thead>
                            <tr class=" <?php  if(isset($_SESSION['langue']) && $_SESSION['langue']== "Anglais"){ echo "tr_tab";}?>">
                                <td colspan="4">Les mois de l'année <?php if(isset($_SESSION['langue']) && $_SESSION['langue']== "Français"){echo " en Français";}else{if(isset($_SESSION['langue']) && $_SESSION['langue']== "Anglais"){echo " en Anglais";}} ?></td>
                            </tr>

                            <?php

                                if(isset($_SESSION['mois'])){
                                    for($i=0; $i < 3; $i++){
                                        $cpt= 0;
                                        echo "<tr>";
                                        $j=$i;
    
                                            do{
                                                echo "<td>".$_SESSION['mois'][$j]."</td>";
                                                $cpt++;
                                                $j = $j+3;
                                            }while($cpt < 4);
    
                                        echo "<tr>";
                                    }
                                }


                                include "includes/pagination.php";
                                session_unset();
                                
                            ?>

                        </thead>
                    </table>
                    
            </div>
</body>
</html>