<?php
    class A{
        function __call($name, $args){
            if($name == "area"){
                switch(count($args)){
                    case 1 : return $args[0] * $args[0];
                    case 2 : return $args[0] * $args[1];
                    default : return "Invalid arguments";
                }
            }
            else{
                return "Invalid function name";
            }
        }
    }

    $obj = new A;
    echo $obj->area(2) . "<br>";
    echo $obj->area(2, 3) . "<br>";
    echo $obj->area(2, 3, 4) . "<br>";
    echo $obj->perimeter(2, 3);
?>

<!-- 4
6
Invalid arguments
Invalid function name -->