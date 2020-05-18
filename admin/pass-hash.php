<?php
include_once('connection.php');

$sql = "SELECT * FROM user WHERE email='admin@gmail.com'";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();

$email = $row["email"];


$hashed = hash('sha512', $row["password"]);

$sql2 = "UPDATE user SET password='$hashed' WHERE email='$email'";
$result2 = mysqli_query($con, $sql2);




/*
$pass="abc";
$hashed = hash('sha512', $pass );
$sql = "INSERT INTO user (email, password) VALUES ('intern4@gmail.com', '$hashed')";
$result2 = mysqli_query($con, $sql);
*/