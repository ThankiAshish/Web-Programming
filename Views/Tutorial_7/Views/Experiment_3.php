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
    <title>Tutorial 7.3 - (22SOECE13039)</title>
</head>
<body>
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; min-width: 350px; height: 70%; padding: 10px">
        <div class="d-flex flex-column h-100 align-items-center">
          <div
            class="container-fluid"
            style="height: 15%; width: 100%; margin-top: 20px">
            <h3 class="text-uppercase text-center text-bold text-primary">
              Find Car Details
            </h3>
          </div>
          <form
            method="POST"
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="height: 20%; gap: 1rem">
            <select name="cars" id="car" class="form-select" required>
                <option value="Ertiga" selected>Ertiga</option>
                <option value="Swift">Swift</option>
                <option value="i20">i20</option>
                <option value="Creta">Creta</option>
                <option value="Seltos">Seltos</option>
                <option value="Carens">Carens</option>
            </select>
            <input
              type="submit"
              value="Find Car Details"
              class="btn btn-primary"
              name="submit" />
          </form>
          <?php
            if(isset($_POST['submit'])) {
                if(!empty($_POST['cars'])) {
                    $car = $_POST['cars'];

                    switch($car) {
                        case 'Ertiga':
                            $price = "2.5lac";
                            $company = "Maruti";
                            break;
                        
                        case 'Swift':
                            $price = "1.5lac";
                            $company = "Maruti";
                            break;

                        case 'i20':
                            $price = "1lac";
                            $company = "Hyundai";
                            break;

                        case 'Creta':
                            $price = "2lac";
                            $company = "Hyundai";
                            break;

                        case 'Seltos':
                            $price = "3.5lac";
                            $company = "Kia";
                            break;

                        case 'Carens':
                            $price = "1.2lac";
                            $company = "Kia";
                            break;
                    }
                    echo "<h1 style='font-size: 1rem; margin-top: 1rem;'><b>Car</b>: {$car}</h1>";
                    echo "<h1 style='font-size: 1rem; margin-top: 5px;'><b>Company</b>: {$company}</h1>";
                    echo "<h1 style='font-size: 1rem; margin-top: 5px;'><b>Price</b>: {$price}</h1>";
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