        <?php

            use function PHPSTORM_META\type;
            session_start();
        ?>
            <div class="content">
            <p class="titleExo">Exercice 14</p>
                        <div class="div_rep">
                                <h1>Répertoire de Contact<h1>
                                <div>
                                    <form action="exercice14/controller.php" method="post" class="formContact">
                                            <div>
                                            <label for="" class="labelNomNum">Numéro Téléphone</label><br>
                                            <div class="flexContact">
                                                <input type="text"  class="numNomCss" name="numeroTel" value="<?php if(isset($_SESSION['origineNum'])){ echo $_SESSION['origineNum'];} ?>" placeholder="Numero Telephone ...">
                                                <input type="submit" value="valider" name="validNum"class="btnContact"><br>
                                            </div>
                                            <?php 
                                                if(isset($_SESSION['errorNum']))
                                                {
                                                    echo "<label class='labelErreur'>".$_SESSION['errorNum']."</label><br>";
                                                    unset($_SESSION['errorNum']);
                                                }
                                            ?>
                                            </div>
                                            <div class="<?php if(isset($_SESSION['hidden'])){ echo '';}else{echo 'hidden';} ?>">

                                                    <label for="fname" class="labelNomNum">Nom Complet</label><br>
                                                    <div class="flexContact">
                                                    <input type="text"  class="numNomCss" name="nomcomplet" placeholder="Nom Complet ...">
                                                    <input type="submit" value="Ajouter" name="Ajouter" class="btnContact"><br>
                                                    </div>
                                                    <?php 
                                                        if(isset($_SESSION['errorNomComplet']))
                                                        {
                                                            echo "<label class='labelErreur'>".$_SESSION['errorNomComplet']."</label><br>";
                                                            unset($_SESSION['errorNomComplet']);
                                                        }
                                                    ?>
                                            </div>
                                    </form>
                                </div>
                        </div>
                <div class="content13 content14 <?php if(!isset($_SESSION['ope'])){ echo 'hidden';} ?>">
                    <div class="div_content13">
                        <form method="POST" action="exercice14/controller.php" class="formCalcule">
                            <?php
                                if(isset($_SESSION['tabNum']) && isset($_SESSION['tabNomComplet']))
                                { 

                                    echo "<textarea class='inputTextareaContact' name='phrase' >";
                                                for($i=0; $i < count($_SESSION['tabNum']); $i++){
                                                    echo $_SESSION['tabNomComplet'][$i].": ".$_SESSION['tabNum'][$i]."\n";
                                                }
                                    echo "</textarea>";
                                }else{
                                    echo "<textarea class='inputTextareaContact' name='phrase' ></textarea>"; 
                                    
                                }
                                
                            ?>
                        </form>

                    </div>
                    <div class="div_content13 ">
                        <form method="POST" action="" class="formCalcule">
                            <?php
                                if(isset($_SESSION['ope']))
                                { 
                                    echo "<textarea class='inputTextareaContact' name='phrase' >";
                                                    echo "Orange: ".$_SESSION['ope']['orange']."\n";
                                                    echo "Free: ".$_SESSION['ope']['free']."\n";
                                                    echo "Expresso: ".$_SESSION['ope']['expresso']."\n";
                                                    echo "Promobile: ".$_SESSION['ope']['promobile']."\n";
                                    echo "</textarea>";

                                }else{
                                    echo "<textarea class='inputTextareaContact' name='phrase' ></textarea>"; 
                                    
                                }
                            ?>
                        </form>
                    </div>
                </div>
                <form method="post" action="exercice14/controller.php" style="margin-top: 10px; text-align:center;">
                        <label for="" class="labelNomNum">Réinitialiser</label><br>
                        <input type="submit" class="btnContact" name="reinitialiser" value="réinitialiser">
                </form>

               <?php include "includes/pagination.php"; ?>
            </div>

            <?php
                //session_unset();
            ?>
</body>
</html>