<!DOCTYPE html>
<html>
  </head>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <script src="js/jquery.js"></script>
  </head> 
  <body>
<?php
session_start();
include_once('connection.php');


if (isset($_SESSION["userid"])){
  include('header-admin.php');
  include_once('menu.php');
  

  $page = $_GET["page"];
  echo "<br>";
  switch($page){
    case 'home': include('pages/home.php');
    break;
    case 'settings' :include('pages/settings.php');
    break;
    case 'social-media' :include('pages/social-media.php');
    break;
    case 'data-source' :include('pages/data-source.php');
    break;
    case 'brand' :include('pages/brand.php');
    break;
    case 'result' :include('result.php');
    break;
    case 'edit' :include('edit.php');
    break;
    case 'delete-data' :include('new-input/delete-data.php');
    break;
    case 'delete-admin' :include('new-input/delete-admin.php');
    break;
    case 'delete-social-media' :include('new-input/delete-social-media.php');
    break;
    case 'delete-brand' :include('new-input/delete-brand.php');
    break;
    case 'edit-brand' :include('new-input/edit-brand.php');
    break;
    case 'edit-social-media' :include('new-input/edit-social-media.php');
    break;
    default: include('pages/home.php');
  };
  

}
else header("Location: ".$base_url."login.php");


?>
<?php

/* 
 while ($row = $result->fetch_assoc())
  {
    foreach($row as $value) { echo "$value "; }
    echo '<br>'; 
  } */ 
?>

</body>
