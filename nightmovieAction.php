<?php

include 'classes/User.php';
$User = new User;

if(isset($_POST['decidemovie'])){
  
  $showtime = $_POST['show_time'];
  $fee = $_POST['tFee'];
  $payment = $_POST['payments'];
  $movieID =$_POST['reserveID'];
  $userID = $_SESSION['user_id'];
  $infoID = $_SESSION['info_id'];
  

  $User->Reservation($showtime,$fee,$payment,$movieID,$userID,$infoID);

}elseif(isset($_POST['changereserve'])){
  $movies = $_POST['movie'];
  $showtime = $_POST['show_time'];
  $fee = $_POST['tFee'];
  $payment = $_POST['payments'];
  $movieID = $_POST['reserveID'];

  $User->changeMovie($movies,$showtime,$fee,$payment,$movieID);
  
}elseif(isset($_POST['register'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $fullname=$_POST['fullname'];
  $password=$_POST['password'];


  $User->registerUser($fname,$lname,$fullname,$password);

}elseif(isset($_POST['login'])){
  $username = $_POST['fullname'];
  $password = $_POST['password'];

  $User->login($username,$password);

}elseif(isset($_POST['addnew'])){
  $title = $_POST['addmovie'];
  $detail = $_POST['movieinfo'];
  $type = $_POST['type'];
  $image = $_FILES['img']['name'];

  $User->MovieInfo($title,$detail,$type,$image);

}elseif(isset($_POST['changenew'])){
  $title = $_POST['addmovie'];
  $detail = $_POST['movieinfo']; 
  $type = $_POST['type'];
  $image = $_FILES['img']['name'];
  $infoID = $_POST['infoID'];

  $User->changeInfo($title,$detail,$type,$image,$infoID);
}

?>