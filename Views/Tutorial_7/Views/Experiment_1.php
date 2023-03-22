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
    <title>Tutorial 7.1 - (22SOECE13039)</title>
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
            <h1 class="text-uppercase text-center text-bold text-primary">
              Calculate Marks
            </h1>
          </div>
          <form
            method="POST"
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="height: 75%; gap: 1rem">
            <input
              type="number"
              name="mathsMarks"
              placeholder="Maths Marks"
              min=0
              max=100
              class="form-control"
              required />
            <input
              type="number"
              name="pythonMarks"
              placeholder="Python Marks"
              min=0
              max=100
              class="form-control"
              required />
            <input
              type="number"
              name="osMarks"
              placeholder="OS Marks"
              min=0
              max=100
              class="form-control"
              required />
            <input
              type="number"
              name="javaMarks"
              placeholder="JAVA Marks"
              min=0
              max=100
              class="form-control"
              required />
            <input
              type="number"
              name="wpMarks"
              placeholder="WP Marks"
              min=0
              max=100
              class="form-control"
              required />
            <input
              type="submit"
              value="Calculate"
              class="btn btn-primary"
              name="submit" />
          </form>
          <?php
            if(isset($_POST['submit'])) {
                $maths = $_POST['mathsMarks'];
                $python = $_POST['pythonMarks'];
                $os = $_POST['osMarks'];
                $java = $_POST['javaMarks'];
                $wp = $_POST['wpMarks'];

                $marks = 500;
                $total = $maths + $python + $os + $java + $wp;

                $average = $total * 100 / $marks;
                $grade = "F";

                switch($average) {
                  case $average < 33:
                    $grade = "F";
                    break;

                  case $average >= 33 and $average < 40:
                    $grade = "E";
                    break;

                  case $average >= 40 and $average < 65:
                    $grade = "D";
                    break;

                  case $average >= 65 and $average < 80:
                    $grade = "C";
                    break;

                  case $average >= 80 and $average < 90:
                    $grade = "B";
                    break;
                  
                  case $average >= 90:
                    $grade = "A";
                    break;
                  
                  default:
                    $grade = "Failed to get Result!";
                    break;
                }

                echo "<h1 style='font-size: 1rem; margin-top: 5px;'>Result: {$grade}</h1>";
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
