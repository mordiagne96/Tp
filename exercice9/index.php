    <?php

use function PHPSTORM_META\type;
session_start();

require_once 'fonctions.php'; 
    ?>
            <div class="content">
            <p class="titleExo">Exercice 9</p>
                    <p class="para">Table de Multiplication(Entrer un nombre)</p>
                    <form method="POST" action="exercice9/controller.php" class="formCalcule">
                        <input type="text" class="inputForm" name="nombre" min="1" placeholder="10" >
                        <input type="submit" class="btnResoudre" value="Valider" name="valider">
                        <?php 
                                if(isset($_SESSION['error']))
                                {
                                    echo "<label class='labelErreur'>".$_SESSION['error']['nbr']."</label>";
                                }

                        ?>
                    </form>
                    <ul class="list" style="margin-top: 10px;">
                        <?php

                            if(isset($_SESSION['nombre'])){
                                $nombre = $_SESSION['nombre'];
                                for($i=0; $i<=12; $i++)
                                {
                                    $prod = $i*$nombre;
                                    echo "<li class='list_li'>".$i." X ".$nombre." = ".$prod."</li>";
                                }
                            }

                        session_unset();
                        
                        ?>
                    </ul>
                    
                    <?php
                        include "includes/pagination.php";
                    ?>
            </div>
    
</body>
</html>