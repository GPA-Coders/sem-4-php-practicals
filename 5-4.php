<?php
    $text = "i am a hacker";
    $codes = array(
        "a"=>".-",
        "b"=>"-...", 
        "c"=>"-.-.", 
        "d"=>"-..", 
        "e"=>".", 
        "f"=>"..-.", 
        "g"=>"--.", 
        "h"=>"....", 
        "i"=>"..", 
        "j"=>".---", 
        "k"=>"-.-", 
        "l"=>".-..", 
        "m"=>"--", 
        "n"=>"-.", 
        "o"=>"---", 
        "p"=>".--.", 
        "q"=>"--.-", 
        "r"=>".-.", 
        "s"=>"...", 
        "t"=>"-", 
        "u"=>"..-", 
        "v"=>"...-", 
        "w"=>".--", 
        "x"=>"-..-", 
        "y"=>"-.--", 
        "z"=>"--..", 
        "0"=>"-----",
        "1"=>".----", 
        "2"=>"..---", 
        "3"=>"...--", 
        "4"=>"....-", 
        "5"=>".....", 
        "6"=>"-....", 
        "7"=>"--...", 
        "8"=>"---..", 
        "9"=>"----.",
        "."=>".-.-.-",
        ","=>"--..--",
        "?"=>"..--..",
        "/"=>"-..-.",
        " "=>" "
    );
    $morse = "";
    
    for($i = 0; $i < strlen($text); $i++){
        if($text[$i] == " "){
            $morse .= "  ";
        }
        else{
            $morse .= $codes[$text[$i]] . " ";
        }
    }

    echo $morse;
?>

<!-- 
.. .- -- .- .... .- -.-. -.- . .-. 
-->