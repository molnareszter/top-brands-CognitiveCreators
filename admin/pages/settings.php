<div class="settings-container">
    <div class="instructionheader-settings"> 
        <p class="instructionupload">Add New Admin </p>
        <p class="instructioncomplete">Simple method to add new admin to the site for update and help.</p><br>
        <hr class="line2"><br><br>
    </div>
    <div class="form-admin">
        <form action="<?php echo $base_url; ?>new-input/new-admin.php" method="POST">
            <input class="input-new-admin" type="text" placeholder="E-mail" name="email" required>
            <input class="input-new-admin" type="text" placeholder="Password" name="password" required>
            <button class="addbutton" type="submit">Add</button>
        </form>
    </div>

    <table class="settings-table">
        <tr class="row-before-table">
            <td>
            </td>
            <td>
            </td>   
        </tr>
        <tr>
            <th>
                E-mail
            </th>
            <th>
                Date added
            </th>
            <th class="last-column">
                
            </th>
        </tr>
    <?php
    $query = "SELECT * from `user`";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $i=1;
        while($row = mysqli_fetch_assoc($result)){
            if($i%2){
                $class="grey-row";
            }else {
                $class="white-row";
            }
            ?>
            <tr class="<?php echo $class ?>">
                <td>
                    <?php 
                    print_r($row["email"]);
                    ?>
                </td>
                <td>
                    <?php 
                    print_r($row["date_added"]);
                    ?>
                </td>
                <td>
                    <a href="?page=delete-admin&id=<?php echo $row["id"]?>"><button class="deletebutton" type="submit">Delete</button></a>
                </td>
            </tr>
        <?php
        $i++;
        }
    }
        ?>
    </table>
</div>
