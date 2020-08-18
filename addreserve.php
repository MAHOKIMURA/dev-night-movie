<?php



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
    <div class="container mx-auto">
      <form action="nightmovieAction.php" method="post">
        <div class="container bg-light">
          <input type="hidden" name="movieID" value="<?php echo $_GET['movieID'] ?>">
          <div class="container">
            <h4 style="text-decoration: underline;">Schedule</h4>
            <ul class="list-inline">
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 170px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="show_time" id="" autocomplete="off" checked="" value="9:30am-11:40am">9:30am-11:40am
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 170px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="show_time" id="" autocomplete="off" checked="" value="12:10pm-2:20pm">12:10pm-2:20pm
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 170px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="show_time" id="" autocomplete="off" checked="" value="2:50pm-5:00pm">2:50pm-5:00pm
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 170px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="show_time" id="" autocomplete="off" checked="" value="5:30pm-7:40pm">5:30pm-7:40pm
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 170px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="show_time" id="" autocomplete="off" checked="" value="8:10pm-10:20pm">8:10pm-10:20pm
                  </label>
                </div>
              </li>
            </ul>
          </div>
          <br>
          <div class="container">
            <h4 class="text-danger" style="text-decoration: underline;">Your Fee</h4>
            <ul class="list-inline">
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 150px; height: 60px;">
                  <label class="btn btn-outline-secondary mb-1">
                    <input type="radio" name="tFee" id="" autocomplete="off" checked="" value="Adalts $18"> Adalts $18
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 150px; height: 60px;">
                  <label class="btn btn-outline-secondary mb-1">
                    <input type="radio" name="tFee" id="" autocomplete="off" checked="" value="UniStudents $15"> UniStudents $15
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 150px; height: 60px;">
                  <label class="btn btn-outline-secondary mb-1">
                    <input type="radio" name="tFee" id="" autocomplete="off" checked="" value="Children/Students $10"> Children/Students $10
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 150px; height: 60px;">
                  <label class="btn btn-outline-secondary mb-1">
                    <input type="radio" name="tFee" id="" autocomplete="off" checked="" value="Elderys $12"> Elderys $12
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 150px; height: 60px;">
                  <label class="btn btn-outline-secondary mb-1">
                    <input type="radio" name="tFee" id="" autocomplete="off" checked="" value="Lateshow $14"> Lateshow $14
                  </label>
                </div>
              </li>
            </ul>
          </div>
          <br>
          <br>
          <div class="container">
            <h4 class="mr-3" style="text-decoration: underline;">How to Pay??</h4>
            <ul class="list-inline">
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 70px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="payments" id="" autocomplete="off" checked="" value="cash"> cash
                  </label>
                </div>
              </li>
              <li class="list-inline-item">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 70px; height: 60px;">
                  <label class="btn btn-outline-danger mb-1">
                    <input type="radio" name="payments" id="" autocomplete="off" checked="" value="card"> card
                  </label>
                </div>
              </li>
            </ul>
          </div>
          <br>
          <br>
          <button type="submit" name="decidemovie" class="btn btn-outline-primary btn-block">Apply Reservation</button>
          <br>
        </div>
      </form>
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