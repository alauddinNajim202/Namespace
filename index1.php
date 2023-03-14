<?php

    namespace first;

    require 'fileReader.php';// include file 

    //class 
    class fileReader{

        public function readData($filename){
            echo __NAMESPACE__ . "<+> Read file from index file : ". $filename . "<br>";
        }
    }

    // using namespace 
    $file = new \fileReader();
    $file->readData("Alauddin Najim");

    $file = new fileReader();
    $file->readData("Alauddin Najim");

    echo "<br>";

    namespace DatabaseMysql;

    const CONNECTION_STATUS = 1;
    class connection{

    }
    function connect(){
        echo "<br> Namespace : ". __NAMESPACE__;
    }


    namespace DatabasePostgre;

    const CONNECTION_STATUS = 1;
    class connection{

    }
    function connect(){
        echo "<br> Namespace : ". __NAMESPACE__;
    }

    echo \DatabaseMysql\connect();
    echo connect();


 
?>