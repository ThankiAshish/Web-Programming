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
    <title>Tutorial 9.3 - (22SOECE13039)</title>
  </head>
  <body>
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; min-height: 35%; min-width: 350px; padding: 10px">
        <form method="POST" class="d-flex flex-column h-100 align-items-center gap-2">
          <div class="container-fluid" style="width: 100%">
            <h2 class="text-uppercase text-center text-bold text-primary">
              Swap Numbers Using Call by Value
            </h2>
          </div>
          <div
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="gap: 1rem">
            <input type="number" class='form-control' name="firstNumber" placeholder="Enter First Number" required>
            <input type="number" class='form-control' name="secondNumber" placeholder="Enter Second Number" required>
            <div class="d-grid" style="width: 100%">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </div>
            <?php
              function swap_val($firstNumber, $secondNumber) {
                  $tmp = $firstNumber;
                  $firstNumber = $secondNumber;
                  $secondNumber = $tmp;

                  echo "<h5>Number 1: $firstNumber, Number 2: $secondNumber </h4>";
              }

              if(isset($_POST['submit'])) {
                  $firstNumber = $_POST['firstNumber'];
                  $secondNumber = $_POST['secondNumber'];

                  swap_val($firstNumber, $secondNumber);
              }
            ?>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
