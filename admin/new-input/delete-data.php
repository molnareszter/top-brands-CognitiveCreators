<?php
$id  = $_GET["id"];
include_once('../connection.php');

$query = "DELETE FROM data_source WHERE id='$id'";
$result = mysqli_query($con, $query);

header("Location:".$base_url. "?page=home");