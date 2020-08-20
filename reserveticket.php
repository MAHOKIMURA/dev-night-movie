<?php

include 'nightmovieAction.php';
$userID = $_SESSION['user_id'];
// $infoID = $_SESSION['info_id'];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Your Reservation</title>
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
              
            </a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#basicNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav collapse navbar-collapse" id="basicNav">            
              <li class="nav-item">
                <a href="theaterhp.php" class="nav-link">Back to HomePage</a>
              </li>
              <li class="nav-item">
                <a href="movie_info.php" class="nav-link">Go to Movie Infomation</a>
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

      <h3 class="display-4 font-weight-bold text-center">You are going to see</h3>
    </div>
    <?php
    if ($User->Displayreservation($_SESSION['user_id']) == FALSE) {
      echo "<li class='list-group-item text-light bg-dark'>NO MOVIES</li>";
    } else {
      foreach ($User->Displayreservation($_SESSION['user_id']) as $row) {
        $reserveID = $row['reserve_id'];
        $infoID = $row['info_id'];
    ?>
        <div class="container w-50 mt-3">
          <ul class="list-group list-unstyled">
            <li class="list-group-item bg-dark text-white">No. <?php echo $reserveID; ?> - <?php echo $infoID ?></li>
            <li class="list-group-item bg-light">Movie: <?php echo $row['add_title'] ?></li> 
            <li class="list-group-item bg-light">Time: <?php echo $row['movietime']; ?></li>
            <li class="list-group-item bg-light">Ticket Fee: <?php echo $row['ticket']; ?></li>
            <li class="list-group-item bg-light">How to pay: <?php echo $row['paying']; ?></li>
            <li class="list-group-item bg-light text-center">
              <!-- <a href="addchange.php?reserveID=<?php //echo $reserveID ?>" class="btn btn-warning  mr-3">Change Your Movie</a> -->
              <a href="deleteticket.php?reserveID=<?php echo $reserveID ?>" class="btn btn-danger mr-3">Cancel Your Movie</a>
            </li>
          </ul>
        </div>
    <?php
      }
    }
    ?>
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