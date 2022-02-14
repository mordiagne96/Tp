<?php

use function PHPSTORM_META\type;
session_start();

    ?>
            <div class="content">

            <p class="titleExo">Exercice 13</p>
                <div class="content13">
                    <div class="div_content13">

                        <p class="para">Veuillez saisir du texte</p>

                        <form method="POST" action="exercice13/controller.php" class="formCalcule">  

                                <?php 
                                    if(!isset($_SESSION['phrase']))
                                    { 
                                        echo "<textarea class='inputTextarea' name='phrase' ></textarea>";
                                    }else{
                                        echo "<textarea class='inputTextarea' name='phrase' >".$_SESSION['phrase']."</textarea>"; 
                                    }
                                ?>
                                
                                <input type="submit" class="btnResoudre" value="Corriger" name="valider">
                                <input type="submit" class="btnResoudre" value="Actualiser" name="actualiser">
                        </form>

                    </div>
                    <div class="div_content13">
                        <p class="para">Correction</p>
                        <form method="POST" action="exercice13/controller.php" class="formCalcule">

                        <?php 
                            if(!isset($_SESSION['correction']))
                            { 
                                echo "<textarea class='inputTextarea' name='phrase' readonly></textarea>";
                            }else{
                                echo "<textarea class='inputTextarea' name='phrase' readonly>".$_SESSION['correction']."</textarea>";
                               
                            }
                            
                        ?>
                        
                        </form>
                    </div>
                </div>
                <?php

                      include "includes/pagination.php";
                ?>
            </div>
</body>
</html>