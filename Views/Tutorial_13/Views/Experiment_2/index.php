<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 13.2 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-center justify-content-center" style="width: 40%; height: 40%; padding: 10px">
            <?php
            class Student
            {
                public $name;
                public $grades;

                public function getAverageGrade()
                {
                    $sum = array_sum($this->grades);
                    $count = count($this->grades);

                    return $sum / $count;
                }
            }

            $students = array(
                new Student(),
                new Student(),
                new Student()
            );

            $students[0]->name = "Ashish";
            $students[0]->grades = array(80, 85, 90);

            $students[1]->name = "Naman";
            $students[1]->grades = array(75, 70, 80);

            $students[2]->name = "Mohil";
            $students[2]->grades = array(90, 95, 85);

            foreach ($students as $student) {
                echo "<h4>" . $student->name . "'s Average Grade is " . $student->getAverageGrade() . "</h4>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>