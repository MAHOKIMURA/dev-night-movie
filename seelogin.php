<?php

include 'nightmovieAction.php';

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
  <div class="background" style="background-image: url(./uploads/film.png); background-size: 25%; background-position: center; background-color:rgba(255, 255, 255, 0.6); background-blend-mode:lighten;">
    <div class="jumbotron">
      <a href="theaterhp.php">Go to Homepage</a>
      <a class="mr-2" href="addmovies.php">Reserve Movie</a>
      <a href=""></a>
    </div>
    <div class="container">

      <h3>You are going to see</h3>
    </div>
    <?php
    if ($User->DisplayUsers() == FALSE) {
      echo "<li class='list-group-item bg-dark'>NO MOVIES</li>";
    } else {
      foreach ($User->DisplayUsers() as $row) {
        $userID = $row['user_id'];
    ?>
        <div class="container mt-3">

          <ul class="list-group list-unstyled">
            <li class="list-group-item bg-dark text-white">No. <?php echo $userID; ?></li>
            <li class="list-group-item bg-light"> <?php echo $row['fname'] ?></li>
            <li class="list-group-item bg-light"> <?php echo $row['lname']; ?></li>
            <li>
              <a href="change.php?movieID=<?php echo $movieID ?>" class="btn btn-outline-warning  mr-3">Change Your Movie</a>
              <a href="deleteticket.php?movieID=<?php echo $movieID ?>" class="btn btn-outline-danger mr-3">Cancel Your Movie</a>
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