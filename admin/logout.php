<?php
include("config.php");

session_start();
unset($_SESSION["userid"]);
header("Location:".$base_url. "index.php");
?>