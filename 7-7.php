<?php
    class A{
        public function intro(){
            echo "This is A";
        }
    }
    class B extends A{
        public function intro(){
            echo "This is B";
        }
    }

    $objA = new A;
    $objB = new B;

    $objA->intro();
    echo "<br>";
    $objB->intro();
?>

<!-- This is A
This is B -->