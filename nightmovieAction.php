<?php

include 'classes/User.php';
$User = new User;

if(isset($_POST['decidemovie'])){
  
  $showtime = $_POST['show_time'];
  $fee = $_POST['tFee'];
  $payment = $_POST['payments'];
  $reserveID =$_POST['reserveID'];
  $userID = $_SESSION['user_id'];
  

  $User->Reservation($showtime,$fee,$payment,$reserveID,$userID);

}elseif(isset($_POST['changereserve'])){
  $showtime = $_POST['show_time'];
  $fee = $_POST['tFee'];
  $payment = $_POST['payments'];
  $reserveID = $_POST['reserveID'];

  $User->changeMovie($showtime,$fee,$payment,$reserveD);
  
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