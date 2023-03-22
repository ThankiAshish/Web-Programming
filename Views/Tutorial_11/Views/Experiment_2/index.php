<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 11.2 - (22SOECE13039)</title>
</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="card shadow d-flex flex-column align-items-center justify-content-center gap-1" style="width: 300px; height: 150px; padding: 10px">
            <?php

            $fruits = array(
                "apple" => "red",
                "banana" => "yellow",
                "orange" => "orange",
                "grape" => "purple"
            );

            foreach ($fruits as $name => $color) {
                echo "The $name is $color.<br>";
            }

            ?>

        </div>
    </div>
</body>

</html>