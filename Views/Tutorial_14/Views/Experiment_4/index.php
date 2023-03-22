<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 13.4 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-start justify-content-center" style="width: 17%; height: 40%; padding: 10px">
            <?php
            class Database
            {
                private $servername;
                private $username;
                private $password;
                private $dbname;
                private $conn;

                public function __construct($servername, $username, $password, $dbname)
                {
                    $this->servername = $servername;
                    $this->username = $username;
                    $this->password = $password;
                    $this->dbname = $dbname;
                }

                public function connect()
                {
                    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
                    if ($this->conn->connect_error) {
                        die("Connection failed: " . $this->conn->connect_error);
                    }
                }

                public function selectData()
                {
                    $sql = "SELECT * FROM anime";
                    $result = $this->conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<h3>Anime:</h3>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<p>id: " . $row["id"] . ", Name: " . $row["name"] . "</p>";
                        }
                    } else {
                        echo "0 results";
                    }
                }

                public function disconnect()
                {
                    $this->conn->close();
                }
            }

            $database = new Database("localhost", "root", "", "tutorial_13");
            $database->connect();
            $database->selectData();
            $database->disconnect();
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>