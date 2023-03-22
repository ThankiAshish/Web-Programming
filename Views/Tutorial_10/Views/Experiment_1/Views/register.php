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
    <title>Tutorial 10.1 Register - (22SOECE13039)</title>
  </head>
  <body class="bg-secondary">
    <div
      class="container-fluid d-flex align-items-center justify-content-center"
      style="height: 100vh">
      <div
        class="card shadow"
        style="width: 30%; min-width: 350px; height: 90%; padding: 10px">
        <div class="d-flex flex-column h-100 align-items-center">
          <div class="container-fluid" style="width: 100%">
            <h1 class="text-uppercase text-center text-bold text-primary">
              Register
            </h1>
          </div>
          <form id="userForm" class="container-fluid d-flex flex-column gap-3" method="POST" action="../Php/registerController.php">
            <div style="height: 50px">
              <input
                type="text"
                class="form-control"
                name="username"
                placeholder="Username" />
            </div>
            <div style="height: 50px">
              <input
                type="password"
                class="form-control"
                name="password"
                id="password"
                placeholder="Password" />
            </div>
            <div style="height: 50px">
              <input
                type="password"
                name="confirmPassword"
                class="form-control"
                placeholder="Re-Enter Password" />
            </div>
            <div class="d-flex" style="height: 50px">
              <div style="height: 100%">
                <input
                  type="text"
                  class="form-control"
                  name="age"
                  placeholder="Age" />
              </div>
              <div style="height: 100%">
                <input
                  type="date"
                  name="dateOfBirth"
                  class="form-control"
                  placeholder="Birthdate" />
              </div>
            </div>
            <div class="d-flex" style="height: 50px">
              <div style="height: 100%">
                <input
                  type="text"
                  name="country"
                  class="form-control"
                  placeholder="Country" />
              </div>
              <div style="height: 100%">
                <input
                  type="text"
                  class="form-control"
                  name="state"
                  placeholder="State" />
              </div>
              <div style="height: 100%">
                <input
                  type="text"
                  class="form-control"
                  name="city"
                  placeholder="City" />
              </div>
            </div>
            <div style="height: 50px">
              <input
                type="file"
                class="form-control"
                name="profilePicture"
                id="profilePicture" />
            </div>
            <div class="d-grid" style="width: 100%">
              <input type="submit" class="btn btn-primary" value="Register"/>
            </div>
          </form>
          <div class="container-fluid" style="margin-top: 10px">
            <span
              >Already have an Account?
              <a
                href="login.php"
                class="link-primary"
                style="text-decoration: none"
                >&nbsp;Login Here</a
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
    <script>
      $("#userForm").validate({
        rules: {
          username: {
            required: true,
            minlength: 3,
          },
          password: {
            required: true,
            minlength: 8,
          },
          confirmPassword: {
            required: true,
            equalTo: "#password",
          },
          age: {
            required: true,
          },
          dateOfBirth: {
            required: true,
          },
          country: {
            required: true,
          },
          state: {
            required: true,
          },
          city: {
            required: true,
          },
          profilePicture: {
            required: true,
            extensions: [".png", ".jpg", ".jpeg"],
          },
        },
        messages: {
          username: {
            required: "The Name field is required",
            minlength: "You must enter at least 3 characters",
          },
          password: {
            required: "The Password field is required",
            minlength: "You must enter at least 8 characters",
          },
          confirmPassword: {
            required: "The Confirm password field is required",
            equalTo: "Doesn't Match With Password",
          },
          age: {
            required: "Required",
          },
          dateOfBirth: {
            required: "Required",
          },
          country: {
            required: "Required",
          },
          state: {
            required: "Required",
          },
          city: {
            required: "Required",
          },
          profilePicture: {
            required: "The Profile Picture Field is required",
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
