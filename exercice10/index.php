    <?php

use function PHPSTORM_META\type;
session_start();
    ?>
            <div class="content">
            <p class="titleExo">Exercice 10</p>
                    <p class="para">Entrer un nombre</p>
                    <form method="POST" action="exercice10/controller.php" class="formCalcule">
                        <input type="text" class="inputForm" name="nombre" min="1" placeholder="10">
                        <input type="submit" class="btnResoudre" value="Valider" name="valider" >
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

                                    for($i=1; $i<=$nombre; $i++)
                                    {
                                        echo "<li><input type='text' class='list_li' value='".$i."' readonly></li><br>";
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