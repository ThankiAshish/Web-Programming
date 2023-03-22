<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 13.1 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-start justify-content-start" style="width: 40%; height: 40%; padding: 10px">
            <?php
            class Calculator
            {
                private $numberOne;
                private $numberTwo;

                public function __construct($numberOne, $numberTwo)
                {
                    $this->numberOne = $numberOne;
                    $this->numberTwo = $numberTwo;
                }

                public function addition()
                {
                    return ($this->numberOne + $this->numberTwo);
                }

                public function subtraction()
                {
                    return ($this->numberOne - $this->numberTwo);
                }

                public function multiplication()
                {
                    return ($this->numberOne * $this->numberTwo);
                }

                public function division()
                {
                    return ($this->numberOne / $this->numberTwo);
                }
            }
            $calc = new Calculator(20, 10);
            echo "<h3>NumberOne: 20, NumberTwo: 10</h3>";
            echo "<p>Addition: " . $calc->addition() . "</p>";
            echo "<p>Subtraction: " . $calc->subtraction() . "</p>";
            echo "<p>Multiplication: " . $calc->multiplication() . "</p>";
            echo "<p>Division: " . $calc->division() . "</p>";
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>