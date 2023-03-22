<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous" />
    <title>Tutorial 7.5 - (22SOECE13039)</title>
</head>
<body>
    <?php
        $result = NULL;
        if(isset($_POST['addition'])) {
            $numberOne = $_POST['numberOne'];
            $numberTwo = $_POST['numberTwo'];

            $result = $numberOne + $numberTwo;
        }
        if(isset($_POST['subtraction'])) {
            $numberOne = $_POST['numberOne'];
            $numberTwo = $_POST['numberTwo'];

            $result = $numberOne - $numberTwo;
        }
        if(isset($_POST['division'])) {
            $numberOne = $_POST['numberOne'];
            $numberTwo = $_POST['numberTwo'];

            $result = $numberOne / $numberTwo;
        }
        if(isset($_POST['multiplication'])) {
            $numberOne = $_POST['numberOne'];
            $numberTwo = $_POST['numberTwo'];

            $result = $numberOne * $numberTwo;
        }
    ?>
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 6s0%; min-width: 350px; height: 60%; padding: 10px">
        <div class="d-flex flex-column h-100 align-items-center">
          <div
            class="container-fluid"
            style="height: 20%; width: 100%; margin-top: 20px">
            <h3 class="text-uppercase text-center text-bold text-primary">
              Simple Calculator Program
            </h3>
          </div>
          <form
            method="POST"
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="height: 60%; gap: 1rem">
            <input type="number" name="numberOne" class="form-control" placeholder="Enter Number One" required>
            <input type="number" name="numberTwo" class="form-control" placeholder="Enter Number Two" required>
            <input type="number" name="result" class="form-control" placeholder="Result" value=<?php echo $result?> disabled>
            <div class="d-flex gap-2 align-items-center justify-content-between" style="width: 100%">
                <input type="submit" name="addition" class="btn btn-primary" value="Addition" />
                <input type="submit" name="subtraction" class="btn btn-primary" value="Subtraction" />
                <input type="submit" name="division" class="btn btn-primary" value="Division" />
                <input type="submit" name="multiplication" class="btn btn-primary" value="Multiplication" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
</body>
</html>