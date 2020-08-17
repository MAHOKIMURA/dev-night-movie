<?php

include 'nightmovieAction.php';

$movieID = $_GET['movieID'];

$User->deleteMovie($movieID);

?>