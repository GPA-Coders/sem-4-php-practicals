<?php
    $string = "I am a Hacker";
    
    $length = 0;
    for($i = 0; $string[$i] != NULL; $i++){
        $length++;
    }
    echo "String Length : $length<br>";

    $words = 1;
    for($i = 0; $string[$i] != NULL; $i++){
        if($string[$i] == " "){
            $words++;
        }
    }
    echo "Words : $words";
?>

<!-- String Length : 13
Words : 4 -->