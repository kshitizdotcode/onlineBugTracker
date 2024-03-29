<?php
include 'include/connect.php'; 
$login=false;
if(isset($_POST["login"])){
  $registertype=$_POST['registertype'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $name=explode(".",$username);
  $user=$name[0];
  if($registertype=='tester'){
        $sql="SELECT * FROM `tester` where tester_username='$username'AND tester_password='$password' ";
    $result=mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['name']=$user;
      header('location:dashboard.php');
    }

    else{
      header('location:login.php');
      die(mysqli_error($con));
  }
  };

if($registertype=='developer'){
  $sql="SELECT * FROM `developer` WHERE developer_username='$username' AND developer_password='$password' ";
$result=mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){

  session_start();
$_SESSION['loggedin']=true;
$_SESSION['name']=$user;
  header('location:dashboard.php');
}
else{
  header('location:login.php');
  die(mysqli_error($con));
  }
};
}
?>
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
    <form method="POST" action="login.php">
        <h1 class="h3 mb-3 fw-normal">Login</h1>
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
          name="login"
          >Login</button
        >
        <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="register.php" class="fw-bold text-body"><u>Register here</u></a></p>
      </form>
    </main>
  </body>
  <script src="dashboard.js"></script>
</html>
