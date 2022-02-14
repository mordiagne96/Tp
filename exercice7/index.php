    <?php

use function PHPSTORM_META\type;
session_start();
require_once 'fonctions.php'; 

    ?>
            <div class="content">
                 <p class="titleExo">Exercice 7</p>
                <p class="para">Entrer une date et le programme affiche la date suivante et précedente</p>
                    <form method="POST" action="exercice7/controller.php" class="formCalcule">

                        <input type="text" class="inputForm" name="date" placeholder="jj/mm/aaaa" value='<?php if(isset($_SESSION['post'])){
                            echo $_SESSION['post']['date'];
                        } ?>'>

                        <input type="submit" class="btnResoudre" value="Valider" name="getDate">

                        <?php if(isset($_SESSION['error']))
                                {
                                    echo "<label class='labelErreur'>".$_SESSION['error']."</label>";
                                }
                        ?>
                    </form>
                    
                    <?php
                        if(isset($_SESSION['date']))
                        {
                            echo "<div class='divSolution'>";

                                echo "<span class='paraSolution'>La suivante est :".$_SESSION['date']['demain']." </span></br>";
                                echo "<span class='paraSolution'>La précédente est :".$_SESSION['date']['hier']." </span></br>";
                                
                            echo "</div>";
                        }

                        include "includes/pagination.php";
                        
                        session_unset();
                    ?>

            </div>


