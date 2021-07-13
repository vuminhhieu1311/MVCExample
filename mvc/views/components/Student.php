<h1 style="color:<?php echo $data["Color"]?>">
    <?php 
        while($row = mysqli_fetch_array($data['Students'])) {
            echo $row['email'] . '<br>';
        }
    ?>
</h1>
