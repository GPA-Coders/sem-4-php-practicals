<?php
    class A{
        public $a;
    }

    $obj1 = new A;
    $obj1->a = 1;

    $obj2 = clone $obj1;
    
    $obj1->a = 2;
    echo $obj2->a;
?>