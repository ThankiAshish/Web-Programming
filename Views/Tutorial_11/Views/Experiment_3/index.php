<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 11.3 - (22SOECE13039)</title>
</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="card shadow gap-3" style="min-width: 30%; padding: 20px 10px">
            <h1 class="text-uppercase text-center text-bold text-primary">
                Student Details
            </h1>
            <form method="POST" class="d-flex flex-column">
                <div class="form-floating" style='width: 95%; margin-inline: auto;'>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                    <label for="name">Enter Name</label>
                </div>
                <hr class="border border-primary opacity-10" style='width: 95%; margin-left: 10px'>
                <p style="margin-left: 10px">Hobbies</p>
                <div class="d-flex justify-content-around" style="width: 95%; margin-inline: auto;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Coding" id="coding" name="hobby[]">
                        <label class="form-check-label" for="coding">
                            Coding
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Designing" id="designing" name="hobby[]">
                        <label class="form-check-label" for="designing">
                            Designing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Music" id="music" name="hobby[]">
                        <label class="form-check-label" for="music">
                            Music
                        </label>
                    </div>
                </div>
                <input type="submit" value="Submit" name='submit' class="btn btn-primary mt-3">
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                echo "
                    <div class='text-center'>
                        <h4>Name: <span style='font-weight: normal'>{$name}</span></h4>
                ";
                if (isset($_POST['hobby'])) {
                    $hobbies = $_POST['hobby'];
                    echo "<b>Hobbies:&nbsp;</b>";
                    foreach ($hobbies as $hobby) {
                        echo $hobby . " ";
                    }
                } else {
                    echo "No Hobbies Selected!";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>