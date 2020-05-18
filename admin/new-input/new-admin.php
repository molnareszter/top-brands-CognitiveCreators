<?php
$email = $_POST["email"];
$password = $_POST["password"];
$date_added = date('Y-m-d H:i:s', time());

include_once('../connection.php');
$hashed = hash('sha512', $password);
$query = "INSERT INTO user (email, password, date_added) VALUES ('$email', '$hashed', '$date_added')";
$result = mysqli_query($con, $query);
header("Location:".$base_url. "?page=result&result=done");