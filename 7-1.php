<?php
    class A{
        function __construct(){
            echo "Constructor called!<br>";
        }
        function __destruct(){
            echo "Destrucotr called!";
        }
    }

    $obj = new A;
?>

<!-- Constructor called!
Destrucotr called! -->