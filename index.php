<?php
require_once("database.php");
require_once("models/starts.php");

$link = db_connect();
$starts = all_starts($link);

include("views/starts/starts.php");

?>