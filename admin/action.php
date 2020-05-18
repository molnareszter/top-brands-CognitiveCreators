
<?php
session_start();
include_once('connection.php');


$email = $_POST["uname"];
$password = $_POST["psw"] ;

$password_hashed = hash('sha512', $password);


$query = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($con, $query);
$row = $result->fetch_assoc();

if ($password_hashed == $row["password"]) 
  {
    $_SESSION ["userid"] = $email;
  header("Location:".$base_url. "?page=home&from=login");
  }
else echo "helytelen jelszó";

?>