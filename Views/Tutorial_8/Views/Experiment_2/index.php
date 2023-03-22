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
    <title>Tutorial 8.2 - (22SOECE13039)</title>
  </head>
  <body>
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; height: 35%; min-width: 350px; padding: 10px">
        <form method="POST" class="d-flex flex-column h-100 align-items-center gap-2">
          <div class="container-fluid" style="width: 100%">
            <h2 class="text-uppercase text-center text-bold text-primary">
              Sum of digits
            </h2>
          </div>
          <div
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="gap: 1rem">
            <input
              type="number"
              class="form-control"
              placeholder="Enter Number"
              aria-label="Enter Number"
              name="number"
              min="0"
              required />
            <div class="d-grid" style="width: 100%">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </div>
            <?php
              if(isset($_POST['submit'])) {
                $number = $_POST['number'];
                $sum = 0;

                while($number > 0) {
                    $digit = $number % 10;
                    $sum += $digit;
                    $number /= 10;
                }

                echo "Sum of Digits: $sum";
              }
            ?>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
