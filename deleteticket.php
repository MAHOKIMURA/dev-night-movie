<?php

include 'nightmovieAction.php';

$reserveID = $_GET['reserveID'];

$User->deleteMovie($reserveID);

?>