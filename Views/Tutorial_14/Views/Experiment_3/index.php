<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Tutorial 14.3 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-center justify-content-center" style="width: 40%; height: 40%; padding: 10px">
            <div id="loadExample"></div>
            <br>
            <button id="getData">Get Data</button>
            <div id="getResult"></div>
            <br>
            <form id="postForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <button type="submit">Submit</button>
            </form>
            <div id="postResult"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#loadExample").load("example.txt");

            $("#getData").click(function() {
                $.get("https://jsonplaceholder.typicode.com/todos/1", function(data) {
                    $("#getResult").html(JSON.stringify(data));
                });
            });

            $("#postForm").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.post("process.php", formData, function(data) {
                    $("#postResult").html(data);
                });
            });
        });
    </script>
</body>

</html>