<!DOCTYPE html>
<html>
  </head>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/login2.css">
    <script src="js/jquery.js"></script>
  </head> 
  <body>
    <div class="container">
    <img class="logo" src="images/logo.svg">
    <p class="welcome"> Welcome! </p>
    <br>
    <div class="line">
     
    </div>
    <p class="instruction"> Please use your company e-mail and password to log in.</p>
    <br><br><div class="login">
        <form action="action.php" method="POST">
        
            <input class="loginform" type="text" placeholder="E-mail" name="uname" ><br><br>
            <input class="loginform" type="password" placeholder="Password" name="psw"><br><br>

            <button type="submit" class="loginbutton">Login</button>
        </form>
    </div>
    </div>