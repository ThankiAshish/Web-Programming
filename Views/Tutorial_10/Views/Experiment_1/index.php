<?php
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("location: ./Views/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous" />
    <title>Tutorial 10.1 - (22SOECE13039)</title>
  </head>
  <body style="height: 100vh">
    <div
      class="container-fluid d-flex align-items-center justify-content-between p-5"
      style="height: 100%">
        <?php
          include_once "./Php/config.php";
          $query = "SELECT * FROM users WHERE uid = '{$_SESSION['uid']}'";
          $sql = mysqli_query($conn, $query);
          if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        ?>
        <h1><span style='font-size: 1.3rem; display: block;'>Hello,&nbsp;</span><?php echo $row['username'];?></h1>
        <a href="./Php/logoutController.php" class="btn btn-danger">Logout</a>
        <?php
          }
        ?>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
  </body>
</html>
