<?php
    function carre(int $nombre){
        $car = $nombre * $nombre;
        return $car;
    }
    
    function produit(int $nombre1, int $nombre2)
    {
        $prod = $nombre1 * $nombre2;
        return $prod;
    }

    function resoudre($coefA, $coefB, $coefC, &$x, &$x0, &$x1,&$x2):void
    {
        if($coefA != 0){

            if($coefB != 0){
                $delta = carre($coefB) - (4 * produit($coefA,$coefC));

                if($delta > 0)
                {
                    $x1 = ((-1*$coefB) - sqrt($delta)) / (2*$coefA);
                    $x2 = ((-1*$coefB) + sqrt($delta)) / (2*$coefA);

                }else{
                    if($delta == 0){
                        $x0 = (-1*$coefB)/(2*$coefA);
                    }
                }
            }else{
                if($coefC != 0 && $coefC >0){
                    $x1 = sqrt(-1*$coefC);
                    $x2 = -1 * sqrt(-1*$coefC);
                }
            }
                
        }else{
            if($coefB != 0){
                $x = (-1 * $coefC)/$coefB;
            }
        }

    }

    function isVide($nbr):bool
    {
        if(empty($nbr) && $nbr != 0){
            return true;
        }else{
            return false;
        }
    }
    function valid($coef, array &$arrayErrors, array &$arrayErrorsChaine , string $key ):void
    {
        if(isVide($coef)){
            $arrayErrors[$key] = "Veuillez renseigner le champ";
        }else{
            if(!is_numeric($coef)){
                $arrayErrorsChaine[$key] = "Veuillez saisir un nombre";
            }
        }
    }
?>