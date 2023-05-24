<?php
    class A{
        public $a = 1;
    }
    trait B{
        public $b = 2;
    }
    class C extends A{
        use B;
        public $c = 3;
    }

    $obj = new C;
    echo $obj->a . "<br>";
    echo $obj->b . "<br>";
    echo $obj->c;
?>

<!-- 1
2
3 -->