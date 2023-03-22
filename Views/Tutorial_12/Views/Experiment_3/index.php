<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 12.3 - (22SOECE13039)</title>
</head>

<body>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center gap-3" style="height: 100vh">
        <form method="POST" action="upload.php" enctype="multipart/form-data" class="card shadow gap-3 d-flex flex-column align-items-center justify-content-center" style="min-width: 30%; padding: 20px 10px; ">
            <h1 class="text-uppercase text-center text-bold text-primary">Upload Images</h1>
            <?php if (isset($_GET['message'])) { ?>
                <?php if ($_GET['message'] === 'Something Went Wrong!') { ?>
                    <div class="status-container error">
                        <h4><?php echo $_GET['message']; ?></h4>
                    </div>
                <?php } else { ?>
                    <div class="status-container success">
                        <h4><?php echo $_GET['message']; ?></h4>
                    </div>
                <?php } ?>
            <?php } ?>
            <div style='width: 100%'>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <input type="submit" value="Upload" name="upload" class="btn btn-primary" style="width: 100%">
            <p>See Uploaded Images Below!</p>
        </form>
    </div>
    <section id="images">
        <h3 class="text-center text-primary text-uppercase">Uploaded Images</h3>
        <div class="images-container">
            <?php
            include_once "config.php";

            $query = "SELECT * FROM images";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<img src='./Images/{$data['image_name']}' />";
                }
            } else {
                echo "<p>No Uploaded Images!</p>";
            }
            ?>
        </div>
    </section>
    <style>
        .status-container {
            width: 100%;
            height: 60px;
            padding: 1rem;
            border-radius: 4px;
            text-align: center;
        }

        .status-container h4 {
            font-size: 1rem;
        }

        .status-container.error {
            background-color: #FEE;
            border: 1px solid #EDD;
            color: #A66;
        }

        .status-container.success {
            background-color: #EFE;
            border: 1px solid #DED;
            font-size: .4rem;
            color: #9A9;
        }

        #images {
            min-height: 100vh;
            padding: 2rem;
        }

        #images h3 {
            margin-bottom: 2rem;
        }

        #images h3::after {
            content: '';
            display: block;
            margin-inline: auto;
            margin-top: .3rem;
            height: 2px;
            width: 3rem;
            background-color: #9A9;
        }

        #images .images-container {
            min-height: 80vh;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .images-container p {
            font-size: 1.2rem;
            font-weight: bold;
            color: #A66;
            padding: .7rem 1.5rem;
            border: 1px solid #EDD;
            border-radius: 6px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
        }

        .images-container img {
            aspect-ratio: 16 / 9;
            width: 350px;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.15);
            object-fit: cover;
        }
    </style>
</body>

</html>