<?php
    $a = 0;
    $b = 1;
    echo "Fibonacci Series is : ";
    echo $a . " ";
    echo $b . " ";
    $n = 5;
    while ($n > 2) {
        $z = $a + $b;
        echo $z . " ";
        $a = $b;
        $b = $z;
        $n--;
    }

?>
