<?php
require_once("database.php");
require_once("models/starts.php");

$link = db_connect();
$start = get_start($link, $_GET['sid']);

include ("views/starts/start.php");
?>