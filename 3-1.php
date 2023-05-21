<?php
    $a = 1;
    $b = 2;
    $choice = '+';
    $result = 0;

    switch($choice){
        case '+' : $result = $a + $b; break;
        case '-' : $result = $a - $b; break;
        case '*' : $result = $a * $b; break;
        case '/' : $result = $a / $b; break;
        case '%' : $result = $a % $b; break;
        default : $result = "Invalid Operator";
    }
    
    if($result == "Invalid Operator"){
        echo "Please choose valid operator!";
    }
    else{
        echo "$a $choice $b = $result";
    }
?>

<!-- 1 + 2 = 3 -->