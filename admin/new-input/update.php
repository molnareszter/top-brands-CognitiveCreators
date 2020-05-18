<?php
$score = $_POST["score"];
$id  = $_POST["id"];
echo $score;
include_once('../connection.php');

$query = "UPDATE data_source SET score='$score' WHERE id='$id'";
$result = mysqli_query($con, $query);

header("Location:".$base_url. "?page=home");