<?php
    class A{
        public $a;
        public $b;
        function display(){
            echo "A : " . $this->a;
            echo "<br>B : " . $this->b;
        }
    }

    $obj = new A;
    $obj->a = 1;
    $obj->b = 1;
    $obj->display();
?>

<!-- A : 1
B : 1 -->