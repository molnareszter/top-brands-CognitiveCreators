<div class="menu">
    <br>
    <div class="menu-content">
        <img class="logoheader" src="images/logo.svg"><br><br><br><br>
        <hr class="line-menu">
        <br><br>
        <div class=menu-pages>
            <?php
            $query = "SELECT * from `menu`";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <a href="<?php echo $base_url;?>?page=<?php echo $row["url"];?>" class="grey-menu"><img src="images/<?php echo $row["image"];?>">&nbsp <?php echo $row["menu_name"];?></a><br><br><br>
            <?php
                }
            } ?>
        </div>
    </div>
</div>

<!-- adatbazisba irni es megnezni mindig melyik aktiv url alapjan, es annak class kek-->