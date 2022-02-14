<?php

use function PHPSTORM_META\type;
session_start();
    ?>
            <div class="content">
        <p class="titleExo">Exercice 11</p>
                    <p class="para">Entrer un nombre</p>
                    <form method="POST" action="exercice11/controller.php" class="formCalcule">
                        <input type="text" class="inputForm" name="nombre" min="1" placeholder="10" value="<?php if(isset($_SESSION['nombre'])){echo $_SESSION['nombre'];}?>">
                        <input type="submit" class="btnResoudre" value="Valider" name="valider" >
                        <?php 
                                if(isset($_SESSION['error']))
                                {
                                    echo "<label class='labelErreur'>".$_SESSION['error']['nbr']."</label>";
                                }

                        ?>
                    </form>
                    
                    <?php
                        if(isset($_SESSION['tab'])){

                            $tab = $_SESSION['tab'];
                            $tabPre = $_SESSION['tab']['premier'];
                            $tabSup = $_SESSION['tab']['superieur'];
                            $tabInf = $_SESSION['tab']['inferieur'];

                            echo "<div class='div_tab' id=''>";

                                        echo "
                                                <div class='div_tab_premier tableFixeHead'>
                                                    <table class='tab'>
                                                        <thead><tr><th>Les Nombres Premier</th></tr></thead>";
                                                            for ($i = 0; $i < count($tabPre); $i++){
                                                                echo "<tr><td> $tabPre[$i] </td></tr>";
                                                            }
                                        echo "
                                                    </table>
                                                </div>
                                        ";

                                        echo "
                                                <div class='div_tab_inferieur tableFixeHead'>
                                                    <table class='tab'>
                                                    <thead><tr><th>Les Nombres Inférieur à la moyenne</th></tr></thead>";
                                                        for ($i = 0; $i < count($tabInf); $i++){
                                                            echo "<tr><td> $tabInf[$i] </td></tr>";
                                                        }
                                                            
                                        echo "  
                                                    </table>
                                                </div>
                                        ";

                                        echo "
                                                <div class='div_tab_superieur tableFixeHead'>
                                                    <table class='tab'>
                                                    <thead><tr><th>Les Nombres supérieur à la moyenne</th></tr></thead>";
                                                        for ($i = 0; $i < count($tabSup); $i++){
                                                            echo "<tr><td> $tabSup[$i] </td></tr>";
                                                        }
                                        
                                        echo "

                                                    </table>
                                                </div>
                                        ";

                            echo "</div>";
                            
                            session_unset();

                        }


                        include "includes/pagination.php";
                    ?>
            </div>
</body>
</html>