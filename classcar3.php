<?php

  class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels() {
      echo 'Wheels moved';
    }

    function createDoors() {
      $this->doors = 6;
    }
  }

  $bmw = new Car();
  echo $bmw->wheels;
    echo '<br>';

  $bmw->wheels = 8;
  echo $bmw->wheels;
    echo '<br>';

  $truck = new Car();

  echo $truck->wheels = 18;
    echo '<br>';

  $truck->createDoors();
  echo $truck->doors;

 ?>
