<?php

    require 'product.php';
    require 'testing.php';


    function wow(){
        echo "wow from index file. <br>";
    }

    $obj = new first\product() ;
    //$obj1 = new second\product();
    
    wow();
    first\wow();




?>