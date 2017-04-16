
  <?php include 'db.php';

    if(isset($_POST['pressedSubmit'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];

      if($connection) {
        echo 'Username Added';
      } else {
        die('Database connection failed');
      }

      $query = 'INSERT INTO users(username, password)';
      $query .= "VALUES ('$username', '$password')";

      $result = mysqli_query($connection, $query);

      if(!$result) {
        div('query failed' .mysfli_error());
      }

    }

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="col-sm-6">

      <form action="createlogin.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>

        <input class="btn btn-success" type="submit" name="pressedSubmit" value="Submit">

      </form>

    </div>
  </div>

</body>
</html>
