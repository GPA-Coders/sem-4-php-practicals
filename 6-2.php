<?php
    $string = "I am a Hacker";
    echo "String : $string<br>";

    $lower = ctype_lower($string);
    if($lower){
        echo "1. String is in lower case";
    }
    else{
        echo "1. String is not in lowercase";
    }

    $reverse = strrev($string);
    echo "<br>2. Reversed string : $reverse";

    $removedWhiteSpaces = trim($string);
    echo "<br>3. Removed white spaces : $removedWhiteSpaces";

    $replaced = str_replace($string, "Hacker", "Coder");
    echo "<br>4. Replaced string : $replaced";
?>

<!-- String : I am a Hacker
1. String is not in lowercase
2. Reversed string : rekcaH a ma I
3. Removed white spaces : I am a Hacker
4. Replaced string : I am a Coder -->