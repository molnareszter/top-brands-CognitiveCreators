<div class="social-media">
    <table class="social-media-table">
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/top_brands/admin/connection.php');
    $query = "SELECT * FROM social_media";
    $result = mysqli_query($con, $query);
    echo "<br>";
    $i=1;
    while($row = $result->fetch_assoc()){
        if($i%2){
            $class="grey-row";
        }else {
            $class="white-row";
        }
        ?>
        <div class="social-media-container"> 
            <tr class="<?php echo $class ?>">
                <td class="social-media-column">
                    <?php echo $row["social_media_name"] . " ";?> 
                </td>
                <td class="social-media-column">
                    <a href="?page=edit-social-media&id=<?php echo $row["id"]?>"><button class="editbutton" type="submit">Edit</button></a>
                    <a href="?page=delete-social-media&id=<?php echo $row["id"]?>"><button class="deletebutton" type="submit">Delete</button></a>
                </td>
             </tr>  
        </div> 
        <?php
        $i++;
    };
    ?>
    </table>
    <br>
    <div class="form-container">
        <form action="<?php echo $base_url; ?>new-input/new-social-media.php" method="POST">
            <input type="text" placeholder="Enter New Social Media" name="new" class="input-new">
            <br><br>
            <button class="addbutton" type="submit">Add</button>
        </form>
    </div>
</div>
