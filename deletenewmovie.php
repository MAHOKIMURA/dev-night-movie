<?php

include 'nightmovieAction.php';

$infoID = $_GET['infoID'];

$User->deleteInfo($infoID);

?>