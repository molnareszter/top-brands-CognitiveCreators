<?php
include_once('../connection.php');

$brandname = $_POST["brandname"];
$country = $_POST["country"];
$social_media = $_POST["social-media"];
$score = $_POST["score"];
$date_added = date('Y-m-d H:i:s', time());


$query = "SELECT id FROM country WHERE country_name='$country'";
$result = mysqli_query($con, $query);
$row = $result->fetch_assoc();
$country_id = $row["id"];

$query2 = "SELECT id FROM social_media WHERE social_media_name='$social_media'";
$result2 = mysqli_query($con, $query2);
$row2 = $result2->fetch_assoc();
$social_media_id = $row2["id"];

$query3 = "SELECT id FROM brand WHERE brand_name='$brandname'";
$result3 = mysqli_query($con, $query3);
$row3 = $result3->fetch_assoc();
$brand_id = $row3["id"];

$query4 = "INSERT INTO `data_source` (brand_id, social_media_id, country_id, score, upload_time) VALUES ($brand_id, $social_media_id, $country_id, $score, '$date_added')";
$result4 = mysqli_query($con, $query4);

header("Location:".$base_url. "?page=data-source");
?>