<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 11.1 - (22SOECE13039)</title>
</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="card shadow" style="min-width: 30%; min-height: 35%; min-width: 350px; padding: 10px">
            <form method="POST" class="d-flex flex-column h-100 align-items-center gap-2">
                <div class="container-fluid" style="width: 100%">
                    <h2 class="text-uppercase text-center text-bold text-primary">
                        2x2 Matrices Addition
                    </h2>
                </div>
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="gap: 1rem">
                    <div class="d-flex gap-4 mt-3">
                        <div class="d-flex flex-column h-100 gap-2 card p-3 bg-light">
                            <h4 class="text-center">Matrix A</h4>
                            <div class="d-flex align-items-center gap-2">
                                <input type="number" class="form-control" name="A-1" placeholder="Enter A-1" required>
                                <input type="number" class="form-control" name="A-2" placeholder="Enter A-2" required>
                            </div>
                            <div class="d-flex gap-2">
                                <input type="number" class="form-control" name="A-3" placeholder="Enter A-3" required>
                                <input type="number" class="form-control" name="A-4" placeholder="Enter A-4" required>
                            </div>
                        </div>
                        <div class="d-flex flex-column h-100 gap-2 card p-3 bg-light">
                            <h4 class="text-center">Matrix B</h4>
                            <div class="d-flex gap-2">
                                <input type="number" class="form-control" name="B-1" placeholder="Enter B-1" required>
                                <input type="number" class="form-control" name="B-2" placeholder="Enter B-2" required>
                            </div>
                            <div class="d-flex gap-2">
                                <input type="number" class="form-control" name="B-3" placeholder="Enter B-3" required>
                                <input type="number" class="form-control" name="B-4" placeholder="Enter B-4" required>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name='add' value="Add" class="btn btn-primary mb-2" style='width: 100%'>
                </div>
            </form>
            <?php
            if (isset($_POST['add'])) {
                $a1 = $_POST['A-1'];
                $a2 = $_POST['A-2'];
                $a3 = $_POST['A-3'];
                $a4 = $_POST['A-4'];

                $b1 = $_POST['B-1'];
                $b2 = $_POST['B-2'];
                $b3 = $_POST['B-3'];
                $b4 = $_POST['B-4'];

                $a = array(array($a1, $a2), array($a3, $a4));
                $b = array(array($b1, $b2), array($b3, $b4));

                for ($i = 0; $i < 2; $i++) {
                    for ($j = 0; $j < 2; $j++) {
                        $result[$i][$j] = $a[$i][$j] + $b[$i][$j];
                    }
                }

                echo "
                    <div class='d-flex flex-column gap-2 mt-2 mb-4 card bg-light p-3' style='width: 98%; margin-inline: auto;'>
                        <h4 class='text-center'>Result</h4>
                        <div class='d-flex align-items-center justify-content-center gap-2'>
                            <input type='number' value={$result[0][0]} class='form-control' disabled/>
                            <input type='number' value={$result[0][1]} class='form-control' disabled/>
                        </div>
                        <div class='d-flex align-items-center justify-content-center gap-2'>
                            <input type='number' value={$result[1][0]} class='form-control' disabled/>
                            <input type='number' value={$result[1][1]} class='form-control' disabled/>
                        </div>
                    </div>
                ";
            }
            ?>
        </div>
    </div>
</body>

</html>