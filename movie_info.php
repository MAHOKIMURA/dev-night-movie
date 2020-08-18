<?php

include 'nightmovieAction.php';

?>

<!doctype html>
<html lang="en">

<head>
  <title>movie info</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="background" style="background-image: url(./uploads/film.png); background-size: 25%; background-position: center; background-color:rgba(255, 255, 255, 0.6); background-blend-mode:lighten;">
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
                <a href="addmovies.php" class="nav-link">Reserve Movie</a>
              </li>
              <li class="nav-item">
                <a href="reserveticket.php" class="nav-link">Go to History</a>
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

      <div class="container mt-5">
        <p class="text-light display-4 text-monospace font-weight-bolder bg-success"> MOVIE INFOMATION</p>


        <?php
        if ($User->DisplayInfo() == FALSE) {
          echo "<li class='list-group-item bg-dark text-white'>NO NEW MOVIES</li>";
        } else {
          foreach ($User->DisplayInfo() as $row) {
            $infoID = $row['info_id'];
        ?>

            <div class="container bg-light mt-3" style="border: 10px outset seagreen;">
              <div class="row">
                <div class="col">
                  <p class="">No. <?php echo $infoID; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="font-weight-bold text-secondary display-4">
                    <?php echo $row['add_title']; ?>
                  </h3>
                  <br>
                  <img class="rounded border border-warning" src="./night_movie/uploads/<?php echo $row['add_img']; ?>" alt="<?php echo $row['add_img']; ?>" height="100%" width="100%">
                </div>
                <div class="col-md-6">
                  <span class="font-weight-bold">
                    category:
                    <p>
                      <?php echo $row['add_type'] ?>
                    </p>
                  </span>
                  <span class="font-weight-bold">
                    Summary:
                    <p style="border: 4px solid lightgreen; border-radius: 10px;"><?php echo $row['add_detail'] ?></p>
                  </span>
                </div>
              </div>
            </div>

        <?php
          }
        }
        ?>
      </div>
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