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
    <title>Tutorial 7.4 - (22SOECE13039)</title>
</head>
<body>
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; min-width: 350px; height: 40%; padding: 10px">
        <div class="d-flex flex-column h-100 align-items-center">
          <div
            class="container-fluid"
            style="height: 40%; width: 100%; margin-top: 20px">
            <h3 class="text-uppercase text-center text-bold text-primary">
              Calculate Electricity Bill
            </h3>
          </div>
          <form
            method="POST"
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="height: 40%; gap: 1rem">
            <input type="number" name="units" class="form-control" placeholder="Enter Units" required min=0>
            <input
              type="submit"
              value="Calculate"
              class="btn btn-primary"
              name="submit" />
          </form>
          <?php
            if(isset($_POST['submit'])) {
                $units = $_POST['units'];
                if(!empty($units)) {
                  $bill = 0;
                  
                  $unit_cost_first = 3.50;
                  $unit_cost_second = 4.00;
                  $unit_cost_third = 5.20;
                  $unit_cost_fourth = 6.50;

                  if($units <= 50) {
                    $bill = $units * $unit_cost_first;
                  } else if($units > 50 && $units <= 100) {
                    $temp = 50 * $unit_cost_first;
                    $remaining_units = $units - 50;
                    $bill = $temp + ($remaining_units * $unit_cost_second);
                  } else if($units > 100 && $units <= 200) {
                    $temp = (50 * 3.5) + (100 * $unit_cost_second);
                    $remaining_units = $units - 150;
                    $bill = $temp + ($remaining_units * $unit_cost_third);
                  } else {
                    $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
                    $remaining_units = $units - 250;
                    $bill = $temp + ($remaining_units * $unit_cost_fourth);
                  }

                  echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Total Bill of {$units} Units: {$bill}</h1>";
                }
              }
          ?>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
</body>
</html>