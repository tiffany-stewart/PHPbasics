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

    $list = [432, 532, 24, 131, 13, 34, 354];

    echo max($list); // pulls number with highest value (532)

    echo '<br>';

    echo min($list); // pulls number with lowest value (13)

    echo '<br>';

    sort($list); //smallest to biggest

    print_r($list);

   ?>

</body>
</html>
