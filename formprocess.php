<?php

  if(isset($_POST['pressedSubmit'])) {

    $name = array('Tiffany', 'Peter', 'Jason', 'Jenny', 'Tom', 'Caleb');
    $minimum = 5;
    $maximum = 16;

    $username = $_POST['username'];
    $password = $_POST['password'];

      if(strlen($username) < $minimum) {
        // echo 'Username must be longer than 5 characters';
      } elseif(strlen($username) > $maximum) {
        // echo 'Username must be no longer than 15 characters';
      } else {
        // echo 'Input accepted, welcome';
      }

      if(!in_array($username, $name)) {
        echo 'Username does not match';
      } else {
        echo 'Hello ' . $username . ', welcome back';
      }
  }



 ?>
