<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet" />
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form>
        <h1 class="h3 mb-3 fw-normal">Log In</h1>
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        <a
          class="w-100 btn btn-lg btn-primary"
          type="submit"
          href="dashboard.php"
          >Login</a
        >
      </form>
    </main>
  </body>
  <script src="dashboard.js"></script>
</html>
