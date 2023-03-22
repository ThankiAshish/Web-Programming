<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
      integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
      integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <title>Tutorial 10.1 Login - (22SOECE13039)</title>
  </head>
  <body class="bg-secondary">
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; height: 60%; min-width: 350px; padding: 10px">
        <div class="d-flex flex-column h-100 align-items-center">
          <div
            class="container-fluid"
            style="height: 25%; width: 100%; margin-top: 20px">
            <h1 class="text-uppercase text-center text-bold text-primary">
              Login
            </h1>
          </div>
          <form id="userForm" class="container-fluid d-flex flex-column gap-3" method='POST' action='../Php/loginController.php'>
            <div style="height: 50px">
              <input
                type="text"
                name="username"
                id="username"
                class="form-control"
                placeholder="Username"
                aria-label="Username"
                aria-describedby="basic-addon1" />
            </div>
            <div style="height: 50px">
              <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="Password"
                aria-label="Password"
                aria-describedby="basic-addon1" />
            </div>
            <div class="d-grid" style="width: 100%">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <div class="container-fluid" style="margin-top: 10px">
            <span
              >Don't have an Account?
              <a
                href="register.php"
                class="link-primary"
                style="text-decoration: none"
                >&nbsp;Register Here</a
              ></span
            >
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
    <script>
      $("#userForm").validate({
        rules: {
          username: {
            required: true,
          },
          password: {
            required: true,
            minlength: 8,
          },
        },
        messages: {
          username: {
            required: "The Username field is required",
          },
          password: {
            required: "The Password field is required",
            minlength: "You must enter at least 5 characters",
          },
        },
        submitHandler: function (form) {
          alert("Submitted");
          form.submit();
        },
      });
    </script>
  </body>
</html>
