<?php
include 'nightmovieAction.php';
// $userID = $_SESSION['user_id'];

?>
<!doctype html>
<html lang="en">

<head>
  <title>Reservation Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="background" style="background-image: url(./uploads/film.png); background-size: 25%; background-position: center; background-color:rgba(255, 255, 255, 0.7); background-blend-mode:lighten;">
    <div class="jumbotron jumbotron-fluid bg-secondary">
      <div class="container-fluid mt-3">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-togglerable-md">
          <div class="container">
            <a href="#" class="navbar-brand">
              <!-- image here -->
              <img src="image/exclamation_mark.jpg" height="30" width="30" alt="">
            </a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#basicNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav collapse navbar-collapse" id="basicNav">
              <li class="nav-item">
                <a href="theaterhp.php" class="nav-link">Back to HomePage</a>
              </li>
              <li class="nav-item">
                <a href="movie_info.php" class="nav-link">Check Movie Infomation</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="container">
      <h2 class=" display-2 font-weight-bold text-md-center">Get Tickets</h2>
    </div>
    <div class="container bg-light mx-auto">
      <!-- <form action="nightmovieAction.php" method="post"> -->
      <div class="container">
        <h4 class="text-danger" style="text-decoration: underline;">Select Movie</h4>

        <ul class="list-inline"> <?php foreach($User->DisplayInfo() as $row) :
          
           ?>
            <li class="list-inline-item">
              <a href="change.php?reserve_id=<?php echo $row['info_id']; ?>" class="text-light btn btn-secondary mb-1 active" role="button" aria-pressed="true" style="width: 250px;  height: 150px;"><?php echo $row['add_title'];?>
                <!-- image -->
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- </form> -->
    </div>
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