<?php
    $a = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    $b = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    $c;

    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            $c[$i][$j] = $a[$i][$j] * $b[$i][$j];
        }
    }

    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            echo $c[$i][$j] . " ";
        }
        echo "<br>";
    }
?>

<!-- 1 4 9
16 25 36
49 64 81 -->