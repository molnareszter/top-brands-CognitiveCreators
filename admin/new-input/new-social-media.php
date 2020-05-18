<?php
$media = $_POST["new"];
echo $media;
include_once('../connection.php');

//if - ha létezik már brand kiírni hogy már létezik, ha nem beírja
$query = "INSERT INTO social_media (social_media_name) VALUES ('$media')";
$result = mysqli_query($con, $query);

header("Location:".$base_url. "?page=result&result=done");