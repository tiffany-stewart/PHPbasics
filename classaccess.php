<?php

  class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty() {
      echo $this->hood;
    }

  }

  $bmw = new Car();

  // echo $bmw->showProperty();

  $semi = new Semi();

  class Semi extends Car {

  }

  echo $bmw->showProperty();

 ?>
