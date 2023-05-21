<?php
    $n = 4;
    $a = 0;
    $b = 1;
    
    echo "$a $b";

    for($i = 2; $i <= $n; $i++){
        $c = $a + $b;
        echo " $c";
        $a = $b;
        $b = $c;
    }
?>

<!-- 0 1 1 2 3 -->