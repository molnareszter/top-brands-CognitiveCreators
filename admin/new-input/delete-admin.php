<?php
$id  = $_GET["id"];
include_once('../connection.php');

$query = "DELETE FROM user WHERE id='$id'";
$result = mysqli_query($con, $query);

header("Location:".$base_url. "?page=settings");