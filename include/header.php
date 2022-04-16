<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php"
        >Online Bug Tracker</a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="position-sticky pt-4">
            <ul class="nav flex-column">
            <div style="padding-left: 20px;">
                <h3 class=" ">HI, <?php echo strtoupper($_SESSION['name'])?></h3>
              </div>
              <hr class="m-0">
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="dashboard.php"
                >
                  <span class="mb-1" data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add.php">
                  <span class="mb-1" data-feather="plus-square"></span>
                  Add Bug
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="edit.php">
                  <span class="mb-1" data-feather="edit"></span>
                  Edit Bug
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <span class="mb-1" data-feather="log-out"></span>
                  Log Out
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >