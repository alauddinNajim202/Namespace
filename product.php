<?php

    namespace first;

    class product{
        public function __construct(){
           // echo "This is product class page <br>";

           $obj = new \second\product;
        }
    }

    function wow(){
        echo "wow from product file. <br>";
    }
   




?>