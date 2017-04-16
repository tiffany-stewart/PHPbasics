<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
  $number = array(10, 20, 49);

  echo $number[2] . '<br>';

  $names = array(
    'first_name' => 'Edwin',
    'last_name' => 'Diaz',
    'occupation' => 'Instructor',
    'current_course' => 'PHP'
  );

  // print_r($names);

  echo $names['first_name'] . ' is an ' . $names['occupation'];
?>

</body>
</html>
