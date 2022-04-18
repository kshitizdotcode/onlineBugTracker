<?php
include 'include/connect.php'; 
if(isset($_POST["register"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $registertype=$_POST["registertype"];
    echo "$username,$name,$password,$registertype";
    if($registertype=='tester'){
        $sql="INSERT INTO `tester`(`tester_name`,`tester_username`, `tester_password`)
         VALUES 
         ('$name','$username','$password')";
    $result=mysqli_query($con, $sql);
    if($result){
    //   echo "Registered successfully:tester";
      header('location:login.php');
    }
    else{
      die(mysqli_error($con));
//   }
    };
}
if($registertype=='developer'){
    $sql="INSERT INTO `developer`(`developer_name`,`developer_username`, `developer_password`)
     VALUES 
     ('$name','$username','$password')";
$result=mysqli_query($con, $sql);
if($result){
//   echo "Registered successfully:developer";
  header('location:login.php');
}
else{
  die(mysqli_error($con));
//   }
};
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Register</title>
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
      <form method="POST" action="register.php">
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <div class="form-floating mb-1">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="Full Name"
            name="name"
          />
          <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-1">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="Username"
            name="username"
          />
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            name="password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        <div class="mb-5">
        <select class="form-select" name="registertype" aria-label="Default select example">
        <option selected disabled>Choose...</option>
        <option value="tester">Tester</option>
        <option value="developer">Developer</option>
        </select>
        </div>
        <button
          class="w-100 btn btn-lg btn-primary"
          type="submit"
          name="register"
          href="#"
          >Login</button
        >
        <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
      </form>
    </main>
  </body>
  <script src="dashboard.js"></script>
</html>
