<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
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
                <a href="admin.php" class="nav-link">Back to AdminPage</a>
              </li>
              <li class="nav-item">
                <a href="movie_info.admin.php" class="nav-link">Go to Movie Infomation</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="card w-75 mx-auto">
      <div class="card-header bg-info">
        <h3 class="display-4 text-monospace text-dark font-weight-bold text-center">Add New Movie Infomation</h3>
      </div>
      <div class="card-body">
        <form action="nightmovieAction.php" method="post" enctype="multipart/form-data">
          <input type="text" name="addmovie" id="" placeholder="New Movie" class="form-control">
          <br>
          <textarea name="movieinfo" id="" cols="60" rows="10" placeholder="Enter Infomation/Sammary" class="form-control"></textarea>
          <br>
          <select name="type" id="" class="form-control">
            <option value="" disabled selected>Category</option>
            <option value="Comedy">Comedy</option>
            <option value="Human Drama">Human Drama</option>
            <option value="Love Story">Love Story</option>
            <option value="Suspense&Mistery">Suspense&Mistery</option>
            <option value="Horror">Horror</option>
            <option value="Action">Action</option>
            <option value="SF">SF</option>
            <option value="Anime">Anime</option>
          </select>
          <br>
          <label for="">Put Image</label>
          <br>
          <input type="file" name="img" id="">
          <br>
          <br>
          <br>
          <button type="submit" name="addnew" class="btn btn-outline-info btn-block">Add New Movie Infomation</button>
        </form>
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