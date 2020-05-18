<!DOCTYPE html>
<html>
  </head>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile2.css">
    <link rel="stylesheet" type="text/css" href="css/screen2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head> 
  <body>
    <div class="header">
      <div  class="logo-area"> 
        <img class="logo" src="image/Logo.svg">
      </div>
      <div class="title"> 
        TOP 100 DIGITAL BRANDS 
      </div>
    </div>

    <div class="slider-name">
      <div class="world-top">WORLD<br>TOP<br>
      </div>
      <div class="number">100
      </div>
    </div>
      
    <div class="title-phone"> 
      <img class="phone" src="image/Iphone_Mock.svg">
    </div>


    <div class="introduce">
      <p class="intro-title">
        Let me introduce...
      </p>
    </div>

    <div class="line">
    </div>
    <br>

    <div class="intro-text">
      In interdum mi in velit rhoncus elementum eget eu nulla. Maecenas a pulvinar augue, sed suscipit  massa. Nunc viverra mollis quam eget fringilla. In eleifend, metus id interdum viverra, felis tortor rhoncus metus, non feugiat neque neque quis odio. Nunc non neque venenatis, ultricies enim non, commodo urna. Integer at tortor mattis, varius purus rhoncus, euismod leo. Vivamus pharetra, eros in pulvinar laoreet, lectus nunc commodo nibh, ut pulvinar purus neque quis lectus.
      <br><br>
      Morbi gravida elit lorem, sed vulputate nisi euismod sed. Duis volutpat fringilla auctor. Donec ut nisi sed nisi pellentesque cursus sed id massa. Nullam ornare congue nisi, nec malesuada mauris vehicula  vitae. Ut porttitor a velit ac sollicitudin. Sed fermentum venenatis urna eu rutrum. Cras tortor neque, luctus in ligula et, rutrum ornare dolor.    
    </div>

    <div class="three-icon">
      <ul class="list-items">
        <li class="outdata">
            <ul class="inside">
              <li><img class="icon" src="image/World.svg"></li>
              <li><br><div class="line2"></div><br>
              <li> Global <p class="icon-bold">brands</p>
            </ul>
        <li class="outdata">
            <ul class="inside">
              <li><img class="icon" src="image/Clock.svg">
              <li><br><div class="line2"></div><br>
              <li> Orderly <p class="icon-bold">updated</p>
            </ul>
        <li class="outdata">
            <ul class="inside"> 
                <li><img class="icon" src="image/Data.svg">
                <li><br><div class="line2"></div><br> 
                <li> Working with <p class="icon-bold">Real Data</p>
            </ul>
      </ul>
    </div>
    <p class="brand-list-title">Top 100 Digital Brand</p>
    <div class="line3">
    </div>
    <br>

<ul class="brands">
  <?php
  include('connection.php');
  $query = "SELECT SUM(score), brand_id from `data_source` GROUP BY brand_id ORDER BY SUM(score) DESC";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
    $i=1;
    while($row = $result->fetch_assoc()){
    $brand_id=$row["brand_id"];
  ?>
      <li><div class="brand-items">
            <div  id="brandb-<?php echo $i; ?>"  class="brand-background">
              <?php
              $query2 = "SELECT * from brand WHERE id='$brand_id'";
              $result2 = mysqli_query($con, $query2);
              $row2 = mysqli_fetch_assoc($result2);
              ?>
              <img class="logo-brand" id="logo-<?php echo $i; ?>" src="../logos/<?php echo $row2["logo"];?>">
              <div class="score">
                <?php echo $row["SUM(score)"]; ?>
              </div>
            </div>
            <p class="order-number"><?php echo $i;?>.</p> <p class="brand-name"> <?php echo $row2["brand_name"];?> 
            </p>
            <div class="line4"></div>
          </div>
    </li>
  <?php
      $i++;  
    }
  }
  ?>
</ul>
<script>
  $(".brand-background").hover(function(){
    var id=$(this).attr("id");
    console.log("id: " +id);
    $(this).css("background-color", "black");
    $(this).find(".logo-brand").hide();
    $(this).find(".score").show();
    $(this).find(".score").css('display', 'flex');
    $(this).find(".score").css('justify-content', 'center');
  })
  $(".brand-background").mouseleave(function(){
    $(this).css("background-color", "white");
    $(this).find(".logo-brand").show();
    $(this).find(".score").hide();

  })
  </script>
</body>
</html>

