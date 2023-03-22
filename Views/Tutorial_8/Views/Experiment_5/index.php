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
    <title>Tutorial 8.5 - (22SOECE13039)</title>
  </head>
  <body>
    <div
      class="container-fluid d-flex align-items-center justify-content-center p-4 gap-4"
      style="min-height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; min-height: 35%; min-width: 350px; padding: 10px">
        <form method="POST" class="d-flex flex-column h-100 align-items-center gap-2">
          <div class="container-fluid" style="width: 100%">
            <h2 class="text-uppercase text-center text-bold text-primary">
              Create Chess Board
            </h2>
          </div>
          <div
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="gap: 1rem">
            <div class="form-floating" style="width: 100%">
                <input type="number" name="row" id="row" class="form-control" placeholder="Enter Rows" min=1 required>
                <label for="row">Enter Rows</label>
            </div>
            <div class="form-floating" style="width: 100%">
                <input type="number" name="col" id="col" class="form-control" placeholder="Enter Columns" min=1 required>
                <label for="col">Enter Columns</label>
            </div>
            <div class="d-grid" style="width: 100%">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </div>
          </div>
        </form>
      </div>
      <center class="mt-5 mb-5">
        <?php
            if(isset($_POST['submit'])) {
                $rows = $_POST['row'];
                $cols = $_POST['col'];

                echo "<table border=\"1\">";
                for($row = 1; $row <= $rows; $row++) {
                    echo "<tr>";
                    for($col = 1; $col <= $cols; $col++) {
                        $total = $row + $col;
                        if($total % 2 == 0) {
                            echo "<td height=30px width=30px bgcolor=white></td>";
                        }
                        else {
                            echo "<td height=30px width=30px bgcolor=black></td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
      </center>

    </div>
  </body>
</html>
