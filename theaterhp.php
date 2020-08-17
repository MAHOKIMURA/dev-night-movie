<?php

include 'nightmovieAction.php';

// $loginID = $_SESSION['register'];
// $User2->getloggedInUser($loginID);

?>

<!doctype html>
<html lang="en">

<head>
  <title>HomePage</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="jumbotron jumbotron-fluid bg-secondary">
    <div class="container">
     <h1 class="text-light text-center">CINEMA</h1> 
    </div>
    <div class="float-right">
      <ul class="list-inline">

        <li class="list-inline-item"><a href="userform.php">Sign In</a></li>
        <li class="list-inline-item"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="container" style="background-image: url(./uploads/jukebox_main.jpg); background-size: cover; background-position: center;">
    <div class="container-fluid mt-3">
      <nav class="navbar navbar-light navbar-expand-lg navbar-togglerable-md">
        <div class="container">
          <a href="#" class="navbar-brand">
            <!-- image here -->
            <img src="image/exclamation_mark.jpg" height="30" width="30" alt="">
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#basicNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="navbar-nav collapse navbar-collapse" id="basicNav">
            <li class="nav-item">
              <a href="addmovies.php" class="nav-link">Reserve movie</a>
            </li>
            <li class="nav-item">
              <a href="reserveticket.php" class="nav-link">Your ticket</a>
            </li>
            <div class="dropdown">
              <li class="nav-item">

                <a href="#" class="btn dropdown-toggle nav-link" role="button" id="other-link" data-toggle="dropdown">
                  Other
                </a>
                <div class="dropdown-menu" aria-labelledby="other-link">
                  <a href="#" class="dropdown-item">About Us</a>
                  <a href="#" class="dropdown-item">Events</a>
                </div>
              </li>
            </div>
          </ul>
        </div>
      </nav>
    </div>
    <br>
    <br>
    <br>
    <a href="movie_info.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Check Movie</a>
  </div>
  <div class="container">
    <div id="" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./uploads/onward.webp" alt="onward" data-holder-rendered="true" style="width: 900px; height: 400px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 400px;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <footer class="p-5 mt-5 bg-secondary text-center">
    <p class="lead text-light">
      &copy;2020 All Rights Reserved
    </p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>