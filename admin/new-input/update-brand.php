<?php
$name = $_POST["name"];
$id  = $_POST["id"];
echo $score;
include_once('../connection.php');

$query = "UPDATE brand SET brand_name='$name' WHERE id='$id'";
$result = mysqli_query($con, $query);

header("Location:".$base_url. "?page=brand");