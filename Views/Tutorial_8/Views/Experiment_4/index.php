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
    <title>Tutorial 8.4 - (22SOECE13039)</title>
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
              Bubble Sort
            </h2>
          </div>
          <div
            class="container-fluid d-flex flex-column align-items-center justify-content-evenly"
            style="gap: 1rem">
            <div class="form-floating" style="width: 100%">
                <input type="text" class="form-control" id="values" placeholder="Enter Array Values" name="values[]" required>
                <label for="floatingPassword">Enter Array Values Separated by Spaces</label>
            </div>
            <div class="d-grid" style="width: 100%">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </div>
            <div style="width: 100%; text-align: center;">
                <?php
                    if(isset($_POST['submit'])) {
                        $vals = $_POST['values'];
                        $constructed_arr = explode(" ", $vals[0]);
                        
                        echo "<h1 style='font-size: 1rem;'>Array before Sort: </h1>";
                        foreach($constructed_arr as $val) {
                            echo "$val ";
                        }
                        
                        for($k = 0; $k < sizeof($constructed_arr); $k++){
                            for($i = 0, $j = 1; $i < sizeof($constructed_arr) - 1; $i++, $j++){
                                if($constructed_arr[$i] > $constructed_arr[$j]){
                                    $temp = $constructed_arr[$i];
                                    $constructed_arr[$i] = $constructed_arr[$j];
                                    $constructed_arr[$j] = $temp;
                                }
                            }
                        }
                        
                        echo "<h1 style='font-size: 1rem;'>Array after Sort: </h1>";
                        foreach($constructed_arr as $val) {
                            echo "$val ";
                        }
                    }
                ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
