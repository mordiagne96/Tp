    <?php 
        require_once 'fonctions.php'; 
        session_start();
    ?>

    
            
<div class="content">
        <p class="titleExo">Exercice 6</p>
        <p class="para">Formulaire de calcule exemple ax+bx+c</p>
        <form method="POST" action="exercice6/controller.php" class="formCalcule">
            <label class="labelForm">valeur du coeficient A</label>
            <input type="text" class="inputForm" name="coefA" placeholder="10" value="<?php if(isset($_SESSION['post'])){
                echo $_SESSION['post']['coefA'];
            } ?>">
            <?php if(isset($_SESSION['error']['coefA']))
                    {
                        echo "<label class='labelErreur'>".$_SESSION['error']['coefA']."</label>";
                    }
                    if (isset($_SESSION['errorChaine']['coefA'])){
                        echo "<label class='labelErreur'>".$_SESSION['errorChaine']['coefA']."</label>";
                    }
             ?>
            <label class="labelForm">valeur du coefficient B</label>
            <input type="text" class="inputForm" name="coefB" placeholder="6" value="<?php if(isset($_SESSION['post'])){
                echo $_SESSION['post']['coefB'];
            } ?>">
            <?php if(isset($_SESSION['error']['coefB']))
                    {
                        echo "<label class='labelErreur'>".$_SESSION['error']['coefB']."</label>";
                    }
                    if (isset($_SESSION['errorChaine']['coefB'])){
                        echo "<label class='labelErreur'>".$_SESSION['errorChaine']['coefB']."</label>";
                    }
             ?>
            <label class="labelForm">valeur du coefficient C</label>
            <input type="text" class="inputForm" name="coefC" placeholder="20" value="<?php if(isset($_SESSION['post'])){
                echo $_SESSION['post']['coefC'];
            } ?>">
            <?php if(isset($_SESSION['error']['coefC']))
                    {
                        echo "<label class='labelErreur'>".$_SESSION['error']['coefC']."</label>";
                    }
                    if (isset($_SESSION['errorChaine']['coefC'])){
                        echo "<label class='labelErreur'>".$_SESSION['errorChaine']['coefC']."</label>";
                    }  
             ?>
            <input type="submit" class="btnResoudre" value="Calculer" name="resoudre">
        </form>
        
            

            <?php
                

                if(isset($_SESSION['resoudre']))
                {
                    echo "<div class='divSolution'>";
                    if($_SESSION['x0'] == null && $_SESSION['x1'] == null && $_SESSION['x'] == null)
                    {
                        echo "<span class='paraSolution'>Solution de l'equation ".$_SESSION['post']['coefA']."x2 + (".$_SESSION['post']['coefB'].")x + (".$_SESSION['post']['coefC'].") est de:</span></br>";
                        echo "<span class='paraSolution'>pas de solution</span>";

                    }else{
                        if($_SESSION['x1'] != null){
                            echo "<span class='paraSolution'>Solution de l'equation ".$_SESSION['post']['coefA']."x2 + (".$_SESSION['post']['coefB'].")x + (".$_SESSION['post']['coefC'].") est de:</span></br>";
                            echo "<span class='paraSolution'> X1 = ".$_SESSION['x1']." et X2 = ".$_SESSION['x2']."</pan>";
                        }else{
                            if($_SESSION['x0'] != null){
                                echo "<span class='paraSolution'>Solution de l'equation ".$_SESSION['post']['coefA']."x2 + (".$_SESSION['post']['coefB'].")x + (".$_SESSION['post']['coefC'].") est de:</span>";
                                echo "<span class='paraSolution'> X0 = ".$_SESSION['x0']."</span>";
                            }else{
                                echo "<span class='paraSolution'>Solution de l'equation ".$_SESSION['post']['coefB'].")x + (".$_SESSION['post']['coefC'].") est de:</span>";
                                echo "<span class='paraSolution'> X = ".$_SESSION['x']."</span>";
                            }
                        }
                    }

                    
                    echo "</div>";
                }

                include "includes/pagination.php";
                
                session_unset();   

            ?>
</div>
