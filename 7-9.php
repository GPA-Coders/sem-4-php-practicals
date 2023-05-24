<?php
    interface A{
        function hello();
    }
    class B implements A{
        function hello(){
            echo "Hello";
        }
    }

    $obj = new B;
    $obj->hello();
?>