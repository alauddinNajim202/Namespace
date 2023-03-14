<?php

    require 'Math.php';
    require 'Circle.php';

    $obj = new Math\Circle\Circle(10);

    echo "Diameter: ".$obj->getDiameter() . "<br>";
    echo "Area: ". $obj->getArea(). "<br>";
    echo "Circumference: ".$obj->getCircumference(). "<br>";




?>