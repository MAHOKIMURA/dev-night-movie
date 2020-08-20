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
  <div class="background" style="background-image: url(./uploads/film.png); background-size: 20%; background-position: center; background-color:rgba(255, 255, 255, 0.7); background-blend-mode:lighten;">
    <div class="jumbotron jumbotron-fluid bg-secondary">
      <div class="container">
        <h1 class="text-light text-center">CINEMA</h1>
      </div>
      <div class="float-right">
        <ul class="list-inline">

          <li class="list-inline-item">
            <a href="userform.php" class="text-light">Sign In</a>
          </li>
          <li class="list-inline-item">
            <a href="logout.php" class="text-light">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="container-fluid mt-3">
        <nav class="navbar navbar-light navbar-expand-lg navbar-togglerable-md" style="background-color: #BDB76B;">
          <div class="container">
            <a href="#" class="navbar-brand">
              <img src="./uploads/nav_icon.png" height="50" width="50" alt="nav_icon">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#basicNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav collapse navbar-collapse" id="basicNav">
              <li class="nav-item">
                <a href="addmovies.php" class="nav-link">Reserve Movie</a>
              </li>
              <li class="nav-item">
                <a href="reserveticket.php" class="nav-link">Your Ticket</a>
              </li>
              <li class="nav-item">
                <a href="movie_info.php" class="nav-link" aria-pressed="true">Check Movie</a>
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
    </div>
    <br>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="background-color: rgba(0,0,0,0.5);">
          <div class="carousel-item active">
            <div class="container  d-flex justify-content-center ">
              <img class="d-sm-none d-md-block" src="./uploads/onward.webp" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" style="width: 300px; height: 400px;">
              <img class="" src="./uploads/ww84.jpeg" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" style="width: 300px; height: 400px;">
            </div>
          </div>
          <div class="carousel-item">
            <div class="container  d-flex justify-content-center ">
              <img class="d-sm-none d-md-block" src="./uploads/no_more.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 300px; height: 400px;">
              <img class="" src="./uploads/no_more2.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 600px; height: 400px;">
            </div>
          </div>
          <div class="carousel-item">
            <div class="container  d-flex justify-content-center ">
              <img class="d-sm-none d-md-block" src="./uploads/totoro.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 300px; height: 400px;">
              <span class="mx-auto text-light"><h3 class="text-center display-4 font-weight-bold">Go to see ジブリ!!</h3></span>
              <img class="" src="./uploads/kiki.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 300px; height: 400px;">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <br>
    <br>
    <div class="container" >
      <div class="row">
        <div class="col">
          <h3 class="display-4 font-weight-bolder">Coming Soon</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/gn5QmllRCn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
        <div class="col-lg-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/yGY484EPe5U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
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
    <footer class="p-5 mt-5 bg-secondary text-center">
      <p class="lead text-light">
        &copy;2020 All Rights Reserved
      </p>
    </footer>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>