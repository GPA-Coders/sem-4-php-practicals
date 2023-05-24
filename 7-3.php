<?php
    class A{
        private $a;
        private $b;

        function set($x, $y){
            $this->a = $x;
            $this->b = $y;
        }
        function get(){
            echo $this->a . "<br>";
            echo $this->b;
        }
    }

    $obj = new A();
    $obj->set(1, 2);
    $obj->get();
?>

<!-- 1
2 -->