<?php

  class Car {

    static $wheels = 4;
    var $hood = 1;


    function moveWheels() {
      echo 'Wheels moved';
    }

  }

  $bmw = new Car();

  echo Car::$wheels;


 ?>
