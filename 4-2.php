<?php
    $m1 = 100;
    $m2 = 88;
    $m3 = 59;
    $m4 = 54;

    $sum = $m1 + $m2 + $m3 + $m4;
    
    $percentage = $sum * 100 / 400;

    echo $percentage . "<br/>";

    if($percentage > 85 && $percentage < 100) {
        echo "AA";
    }
    elseif($percentage > 75 && $percentage < 84) {
        echo "AB";
    }
    elseif($percentage > 65 && $percentage < 74) {
        echo "BB";
    }
    elseif($percentage > 55 && $percentage < 64) {
        echo "BC";
    }
    elseif($percentage > 45 && $percentage < 54) {
        echo "CC";
    }
    elseif($percentage > 40 && $percentage < 44) {
        echo "CD";
    }
    elseif($percentage > 35 && $percentage < 39) {
        echo "DD";
    }
    else {
        echo "FF";
    }
?>
