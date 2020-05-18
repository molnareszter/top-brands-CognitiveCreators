<div class="brand">
<table class="brand-table">
    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/top_brands/admin/connection.php');
    $query = "SELECT * FROM brand";
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
        <div> 
            <tr class="<?php echo $class ?>">
                <td class="brand-column">
                    <img class="logo" src="../logos/<?php echo $row["logo"];?>"></div>
                </td>
                <td class="brand-column">
                    <?php echo $row["brand_name"] . " ";?> 
                </td>
                <td class="brand-column">
                    <a href="?page=edit-brand&id=<?php echo $row["id"]?>"><button class="editbutton" type="submit">Edit</button></a>
                    <a href="?page=delete-brand&id=<?php echo $row["id"]?>"><button class="deletebutton" type="submit">Delete</button></a>
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
        <form action="new-input/new-brand.php" method="post" enctype="multipart/form-data">
            <input type="text" name="brand_name" class="input-new" placeholder="Enter New Brand"><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload" class="input-new"><br><br>
            <input type="submit" value="Add" name="submit" class="addbutton">
        </form>
    </div>
</div>