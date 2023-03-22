<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 14.1 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-start justify-content-center gap-3" style="width: 40%; height: 40%; padding: 10px">
            <?php
            class Person
            {
                private $name;
                private $age;

                public function __construct($name, $age)
                {
                    $this->name = $name;
                    $this->age = $age;
                }

                public function getName()
                {
                    return $this->name;
                }

                public function getAge()
                {
                    return $this->age;
                }

                public function greet()
                {
                    return "Hello, My Name is " . $this->name . " and I am " . $this->age . " Years Old.";
                }
            }

            class Student extends Person
            {
                private $major;

                public function __construct($name, $age, $major)
                {
                    parent::__construct($name, $age);
                    $this->major = $major;
                }

                public function greet()
                {
                    return "Hello, My Name is " . $this->getName() . ", I am " . $this->getAge() . " Years Old and Majoring in " . $this->major . ".";
                }
            }
            $person = new Person("Ashish", 19);
            echo "<h4>Greet Method From Person Class:</h4> <br>";
            echo $person->greet();
            echo "<h4>Greet Method From Student Class: </h4><br>";
            $student = new Student("Ashish", 19, "Maths");
            echo $student->greet();
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>