<?php

  if(isset($_POST['pressedSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . '<br>';
    echo $password;
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <form action="form.php" method="post">

      <input type="text" name="username" placeholder="Enter Useraname">
      <input type="password" name="password" placeholder="Enter Password">
      <br>
      <input type="submit" name="pressedSubmit">

  </form>

</body>
</html>
