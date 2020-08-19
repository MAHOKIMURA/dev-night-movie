<?php

include 'Database.php';

class User extends Database{

  
  public function registerUser($fname,$lname,$fullname,$password){
    $sql = "INSERT INTO login(username,password)VALUE('$fullname','$password')";
    $queryResult = $this->conn->query($sql);

    
    if($queryResult == TRUE){

        $loginID = $this->conn->insert_id;
        $sql2 = "INSERT INTO users(fname,lname,login_id)VALUE('$fname','$lname','$loginID')";
        $result2 = $this->conn->query($sql2);

        if($result2 == FALSE){
            echo "error in second query";
        }else{
            header('location:login.php');
        }      
    }else{
        return "error in first query";
    }
  }
  public function displayMovies($sessionID){
    $sql = "SELECT * FROM movie_info WHERE info_id = '$sessionID'";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
        return $row;
    }else{
      return FALSE;
    }
  }

  public function login($username,$password){
    $sql = "SELECT * FROM login INNER JOIN users ON login.login_id = users.login_id WHERE login.username = '$username' AND login.password = '$password'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        

        if($row['login_status'] == 'U'){
            header('location:theaterhp.php');

        }else{
            header('location:admin.php');
            // echo "not user";
        }

    }else{
        echo "no such user";
    }
  } 

  public function getloggedInUser($session_name){
    $sql = "SELECT * FROM users WHERE user_id = '$session_name'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
      return $result->fetch_assoc();
    }else{
      return FALSE;
    }
  }

  public function Reservation($showtime,$fee,$payment,$movieID,$sessionID,$infoID){
    $sql = "INSERT INTO reserve_movie(movietime, ticket, paying, movie_id, user_id, info_id) VALUES ('$showtime','$fee','$payment','$movieID','$sessionID','$infoID')";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header('location:reserveticket.php');
    }else{
      echo "error reservation";
    }
  }

  // public function addMovies($movies,$showtime,$fee,$payment){
  //   $sql = "INSERT INTO reserve_movie(moviename, movietime, ticket, paying) VALUES ('$movies','$showtime','$fee','$payment')";
  //   $result = $this->conn->query($sql);

  //   if($result == TRUE){
  //     header('location:reserveticket.php');
      
  //   }else{
  //     echo "error in adding movie";
  //   }
  // }

  public function Displayreservation($userID){
    $sql = "SELECT * FROM users INNER JOIN reserve_movie ON users.user_id = reserve_movie.user_id INNER JOIN movie_info ON reserve_movie.info_id = movie_info.info_id WHERE reserve_movie.user_id = '$userID'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
      $row = array();
      $_SESSION['user_id'] = $row['user_id'];
      
      return $result->fetch_assoc();
    }else{
      return FALSE;
    }
  }

  public function getOneticket($session_name){
    $sql = "SELECT * FROM reserve_movie WHERE movie_id = '$session_name'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
      return $result->fetch_assoc();
    }else{
      return FALSE;
    }
  }

  public function deleteMovie($movieID){
    $sql = "DELETE FROM reserve_movie WHERE movie_id = '$movieID'";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header('location:reserveticket.php');
    }else{
      return FALSE;
    }
  }

  public function changeMovie($moviename,$movietime,$ticketfee,$payment,$movieID){
    $sql = "UPDATE reserve_movie SET moviename='$moviename',movietime='$movietime',ticket='$ticketfee',paying='$payment' WHERE movie_id='$movieID'";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header('location:reserveticket.php');
    }else{
      echo "error changing movie";
    }
  }
  
  public function MovieInfo($addnewtitle,$detail,$type,$img){
    $target_dir = 'uploads/'; 
    $escape_title = $this->conn->real_escape_string($addnewtitle);
    $escape_detail = $this->conn->real_escape_string($detail);
    $target_file = $target_dir.basename($img);
    $sql = "INSERT INTO movie_info(add_title, add_detail, add_type, add_img) VALUE ('$escape_title','$escape_detail','$type','$img')";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
      header('location:movie_info.admin.php');
    }else{
      echo "error adding newone";
      die('error in uploading the photo: '. $this->conn->error);
    }
  }

  public function DisplayInfo(){
    $sql = "SELECT * FROM movie_info";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  public function deleteInfo($infoID){
    $sql = "DELETE FROM movie_info WHERE info_id = '$infoID'";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header('location:movie_info.admin.php');
    }else{
      return FALSE;
    }
  }

  public function changeInfo($addnewtitle,$detail,$type,$img,$infoID){
    $target_dir = 'uploads/'; 
    $escape_detail = $this->conn->real_escape_string($detail);
    $target_file = $target_dir.basename($img);
    $sql = "UPDATE movie_info SET add_title='$addnewtitle',add_detail='$escape_detail',add_type='$type',add_img='$img' WHERE info_id='$infoID'";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
      header('location:movie_info.admin.php');
    }else{
      echo "error changing movie";
    }
  }

  // displayusers

  public function DisplayUsers(){
    $sql = "SELECT * FROM users";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
      $row = array();
      while($rows = $result->fetch_assoc()){
        $row[] = $rows;
      }
      return $row;
    }else{
      return FALSE;
    }
  }

  public function deleteUsers($cardID){
    $sql = "DELETE FROM users WHERE card_id = '$cardID'";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header('location:seelogin.php');
    }else{
      return FALSE;
    }
  }

  public function changeUsers($fname,$lname,$userID){
    $sql = "UPDATE users SET fname='$fname',lname='$lname' WHERE user_id='$userID'";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header('location:seelogin.php');
    }else{
      echo "error changing movie";
    }
  }

}


?>