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
    <title>Tutorial 7.2 - (22SOECE13039)</title>
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
              Max of Three Numbers
            </h3>
          </div>
          <form
            method="POST"
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="height: 75%; gap: 1rem">
            <input
              type="number"
              name="numberOne"
              placeholder="Number One"
              class="form-control"
              required />
            <input
              type="number"
              name="numberTwo"
              placeholder="Number Two"
              class="form-control"
              required />
            <input
              type="number"
              name="numberThree"
              placeholder="Number Three"
              class="form-control"
              required />
            <input
              type="submit"
              value="Find"
              class="btn btn-primary"
              name="submit" />
          </form>
          <?php
            if(isset($_POST['submit'])) {
                $numberOne = $_POST['numberOne'];
                $numberTwo = $_POST['numberTwo'];
                $numberThree = $_POST['numberThree'];

                $max;
                if($numberOne > $numberTwo and $numberOne > $numberThree) {
                    $max = $numberOne;
                } else if($numberTwo > $numberThree) {
                    $max = $numberTwo;
                } else {
                    $max = $numberThree;
                }

                echo "<h1 style='font-size: 1rem; margin-top: 5px;'>Result: {$max}</h1>";
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