<?php
    abstract class A{
        public $name;
        public function __construct($intro){
            $this->name = $intro;
        }
        abstract public function sayName();
    }
    class B extends A{
        public function sayName(){
            echo $this->name;
        }
    }

    $obj = new B("I am B");
    $obj->sayName();
?>