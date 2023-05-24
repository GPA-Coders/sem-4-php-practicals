<?php
    class A{
        public $a = 1;
    }
    class B extends A{
        public $b = 2;
    }
    class C extends B{
        public $c = 3;
    }

    $objA = new A;
    $objB = new B;
    $objC = new C;

    echo "A->a : " . $objA->a . "<br>";
    
    echo "B->a : " . $objB->a . "<br>";
    echo "B->b : " . $objB->b . "<br>";
    
    echo "C->a : " . $objC->a . "<br>";
    echo "C->b : " . $objC->b . "<br>";
    echo "C->c : " . $objC->c . "<br>";
?>

<!-- A->a : 1
B->a : 1
B->b : 2
C->a : 1
C->b : 2
C->c : 3 -->