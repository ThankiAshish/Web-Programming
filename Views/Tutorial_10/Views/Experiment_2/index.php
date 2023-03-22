<?php
    include_once "./Php/config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/style.css">
    <title>Tutorial 10.2 - (22SOECE13039)</title>
</head>
<body>
    <div class="card">
        <h2>Enter Student Details</h2>
        <form action="./Php/operations.php" method="POST" class="insert-data">
            <input type="number" name="id" id="id" placeholder="Enter Student id" required>
            <input type="text" name="firstName" id="firstName" placeholder="Enter First Name" required>
            <input type="text" name="lastName" id="lastName" placeholder="Enter Last Name" required>
            <input type="submit" value="Insert" class="btn" name="insert">
        </form>
    </div>
    <div class="card view">
        <h2>Student Details</h2>
            <?php
                $sql = mysqli_query($conn, "SELECT * FROM students");
                while($row = mysqli_fetch_assoc($sql)) {
            ?>
                <form class="row" method="POST" action="./Php/operations.php">
                    <input type="number" name="id" value=<?php echo $row['id'];?> readonly>
                    <input type="text" name="firstName" value=<?php echo $row['first_name']; ?>>
                    <input type="text" name="lastName" value=<?php echo $row['last_name']; ?>>
                    <input type="submit" value="Update" name="update" class="btn" id="updateBtn">
                    <input type="submit" value="Delete" name="delete" class="btn delete" id="deleteBtn">
                </form>
            <?php
                }
            ?>
    </div>
</body>
</html>