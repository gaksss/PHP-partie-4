<?php 

function isBigger(int $int1 , int $int2){
    if($int1 > $int2){
        return "Le premier nombre est plus grand.";
    } else if ($int1 < $int2){
        return "Le premier nombre est plus petit.";
    } else {
        return "Les deux nombres sont identiques.";
    }
}
echo isBigger(2,3);