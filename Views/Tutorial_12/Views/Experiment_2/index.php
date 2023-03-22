<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Tutorial 12.2 - (22SOECE13039)</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh">
        <form id="contactForm" class="card shadow d-flex flex-column align-items-center justify-content-center gap-2 p-3" style="width: 35%;">
            <h1 class="text-uppercase text-center text-bold text-primary">Contact Us</h1>
            <div class="status-container"></div>
            <div class="form-floating" style="width: 100%">
                <input type="text" name="name" placeholder="Name" id="name" class="form-control" required>
                <label for="name">Name</label>
            </div>
            <div class="form-floating" style="width: 100%">
                <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control" required>
                <label for="subject">Subject</label>
            </div>
            <div class="form-floating" style="width: 100%">
                <input type="email" name="email" placeholder="Email" id="email" class="form-control" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating" style="width: 100%">
                <textarea name="message" id="message" placeholder="Message" style="resize: none; height: 100px" class="form-control" required></textarea>
                <label for="message">Message</label>
            </div>
            <button type="button" name="send" class="btn btn-primary" style="width: 100%" onclick="sendMail()" id="sendBtn">Send</button>
            <button id="loading" class="btn btn-primary" style="display: none; width: 100%">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Sending...</span>
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendMail() {
            const name = $("#name");
            const subject = $("#subject");
            const email = $("#email");
            const message = $("#message");

            $("#sendBtn").css("display", "none");
            $("#loading").css("display", "block");

            $.ajax({
                url: 'sendMail.php',
                method: "POST",
                dataType: "json",
                data: {
                    name: name.val(),
                    subject: subject.val(),
                    email: email.val(),
                    body: message.val(),
                },
                success: function(response) {
                    console.log("Hello");
                    $("#contactForm")[0].reset();
                    $(".status-container").text("Mail Sent Successfully!");
                    $(".status-container").addClass("success");
                    $(".status-container").css("display", "block");
                    $("#sendBtn").css("display", "block");
                    $("#loading").css("display", "none");
                },
                error: function(response) {
                    $(".status-container").text("Something Went Wrong!");
                    $(".status-container").addClass("error");
                    $(".status-container").css("display", "block");
                    $("#sendBtn").css("display", "block");
                    $("#loading").css("display", "none");
                }
            })
        }
    </script>
    <style>
        .status-container {
            display: none;
            width: 100%;
            height: 60px;
            padding: 1rem;
            border-radius: 4px;
            text-align: center;
        }

        .status-container.error {
            background-color: #FEE;
            border: 1px solid #EDD;
            color: #A66;
        }

        .status-container.success {
            background-color: #EFE;
            border: 1px solid #DED;
            color: #9A9;
        }
    </style>
    </script>
</body>

</html>