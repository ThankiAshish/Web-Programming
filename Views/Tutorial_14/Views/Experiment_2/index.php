<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 14.2 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-center justify-content-center gap-3" style="width: 40%; height: 40%; padding: 10px">
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

                public function setName($name)
                {
                    $this->name = $name;
                }

                public function setAge($age)
                {
                    $this->age = $age;
                }

                public function greet()
                {
                    return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
                }
            }

            class Student extends Person
            {
                private $major;
                private $studentId;

                public function __construct($name, $age, $major, $studentId)
                {
                    parent::__construct($name, $age);
                    $this->major = $major;
                    $this->studentId = $studentId;
                }

                public function getMajor()
                {
                    return $this->major;
                }

                public function setMajor($major)
                {
                    $this->major = $major;
                }

                public function getStudentId()
                {
                    return $this->studentId;
                }

                public function setStudentId($studentId)
                {
                    $this->studentId = $studentId;
                }

                public function greet()
                {
                    return "Hello, my name is " . $this->getName() . ", I am " . $this->getAge() . " years old and I am majoring in " . $this->major . ".";
                }
            }

            class Teacher extends Person
            {
                private $subject;
                private $teacherId;

                public function __construct($name, $age, $subject, $teacherId)
                {
                    parent::__construct($name, $age);
                    $this->subject = $subject;
                    $this->teacherId = $teacherId;
                }

                public function getSubject()
                {
                    return $this->subject;
                }

                public function setSubject($subject)
                {
                    $this->subject = $subject;
                }

                public function getTeacherId()
                {
                    return $this->teacherId;
                }

                public function setTeacherId($teacherId)
                {
                    $this->teacherId = $teacherId;
                }

                public function greet()
                {
                    return "Hello, my name is " . $this->getName() . ", I am " . $this->getAge() . " years old and I teach " . $this->subject . ".";
                }
            }

            $student = new Student("Alice", 20, "Computer Science", 12345);
            $teacher = new Teacher("Bob", 35, "Mathematics", 54321);

            $student->setAge(21);
            $student->setStudentId(67890);
            $teacher->setTeacherId(98765);

            echo $student->getName() . " is " . $student->getAge() . " years old and has a student ID of " . $student->getStudentId() . ".<br>";
            echo $teacher->getName() . " is " . $teacher->getAge() . " years old and has a teacher ID of " . $teacher->getTeacherId()
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>