<?php
$id  = $_GET["id"];
include($_SERVER['DOCUMENT_ROOT'].'/top_brands/admin/connection.php');

$query = "DELETE FROM social_media WHERE id='$id'";
echo $query;
$result = mysqli_query($con, $query);

header("Location:".$base_url. "?page=social-media");