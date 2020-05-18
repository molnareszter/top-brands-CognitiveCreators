<div class="brand">
<table class="brand-table">
    <?php
    $brand_id=$_GET["id"];
    include($_SERVER['DOCUMENT_ROOT'].'/top_brands/admin/connection.php');
    $query = "SELECT * FROM brand WHERE id='$brand_id'";
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
                <form action="<?php echo $base_url; ?>new-input/update-brand.php" method="POST">
                    <input type="text" placeholder=" <?php echo $row["brand_name"];?>" name="name" class="update-input">
                    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                    <br>
                    <button class="updatebutton" type="submit">Update</button>
                </form>
                </td>
             </tr>  
        </div> 
        <?php
        $i++;
    };
    ?>
    </table>