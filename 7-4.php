<?php
    class A{
        public $a;
        function __construct(){
            $this->a = 1;
        }
    }
    class B extends A{
        public $b;
        function __construct(){
            parent::__construct();
            $this->b = 2;
        }
    }

    $obj = new B;
    echo $obj->a . "<br>";
    echo $obj->b;
?>

<!-- 1
2 -->