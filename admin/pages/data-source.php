<?php
?>
<br>
<div class="input-data">
    <div class="instructionheader"> 
        <p class="instructionupload">Upload a Digital Brand </p>
        <p class="instructioncomplete">Complete the form to upload and display another brand in the list</p>
        <hr class="line2"><br><br>
    </div>

    <form action="<?php echo $base_url; ?>new-input/upload.php" method="POST">
        <div class="content">
            <div class="row">
                <select name="brandname" id="data-input">
                    <option value="">Select Brand</option>
                    <?php
                    $query = "SELECT * from `brand`";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row["brand_name"]?>"><?php echo $row["brand_name"]?></option>
                            <?php
                        }
                    }
                            ?>
                </select>
                <select id="data-input" name="country">
                    <option value="">Select Country</option>
                    <?php
                    $query = "SELECT * from `country`";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row["country_name"]?>"><?php echo $row["country_name"]?></option>
                            <?php
                        }
                    }
                            ?>
                </select>
                <select name="social-media" id="data-input">
                    <option value="">Select Social Media</option>
                        <?php
                        $query = "SELECT * from `social_media`";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <option value="<?php echo $row["social_media_name"]?>"><?php echo $row["social_media_name"]?></option>
                                <?php
                            }
                        }
                                ?>
                </select>
            </div>
            <br><br>
            <div class="row">
                <input type="text" placeholder="Score" name="score" class="data-input2">
            </div>
            <br><br>

            <button type="submit" class="savebutton">Save</button>
            <button class="publishbutton">Publish</button>
        </div>
    </form>
</div>
