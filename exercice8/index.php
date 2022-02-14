    <?php

use function PHPSTORM_META\type;

    session_start();

require_once 'fonctions.php'; 
    ?>
            <div class="content">
            <p class="titleExo">Exercice 8</p>
                    <p class="para">Entrer un nombre</p>
                    <form method="POST" action="exercice8/controller.php" class="formCalcule">
                        <input type="text" class="inputForm" name="nombre" placeholder="10" >
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
                                for($i=1; $i<= $nombre; $i++)
                                {
                                    echo "<li class='list_li'>".$i."</li><br>";
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