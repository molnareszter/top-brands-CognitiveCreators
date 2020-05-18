
<?php
include_once('connection.php');

$id = $_GET["id"];
?>
<div class="home">
<table class="home-table">
    <?php
    $query = "SELECT * from `data_source` WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
        ?>
         <tr class="row-before-table">
            <td>
            </td>
            <td>
            </td>   
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        <tr>
            <th>
                Brand Name
            </th>
            <th>
                Country
            </th>
            <th>
                Social Media
            </th>
            <th>
                Result
            </th>
            <th class="last-column">
                Upload
            </th>
            <th class="last-column">
                
            </th>
        </tr>
        <tr class="row-after-header">
            <td>
            </td>
            <td>
            </td>   
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr class="grey-row">
            <td>
                <?php 
                $brand_id = $row["brand_id"];
                $query2 = "SELECT brand_name FROM brand WHERE id = '$brand_id'";
                $result2 = mysqli_query($con, $query2);
                $row2 = $result2->fetch_assoc();
                print_r($row2["brand_name"]);
                ?>
            </td>
            <td>
                <?php 
                $country_id = $row["country_id"];
                $query3 = "SELECT country_name FROM country WHERE id = '$country_id'";
                $result3 = mysqli_query($con, $query3);
                $row3 = $result3->fetch_assoc();
                print_r($row3["country_name"]);
                ?>
            </td>
            <td>
                <?php 
                $social_media_id = $row["social_media_id"];
                $query3 = "SELECT social_media_name FROM social_media WHERE id = '$social_media_id'";
                $result3 = mysqli_query($con, $query3);
                $row3 = $result3->fetch_assoc();
                print_r($row3["social_media_name"]);
                ?>
            </td>
            <td>
                <form action="<?php echo $base_url; ?>new-input/update.php" method="POST">
                    <input type="text" placeholder=" <?php echo $row["score"];?>" name="score" class="update-input">
                    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                    <br>
                    <button class="updatebutton" type="submit">Update</button>
                </form>
            </td>
            <td>
                <?php echo $row["upload_time"];?>
            </td>
        </tr>
        <tr class="row-after-table">
            <td>
            </td>
            <td>
            </td>   
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>

