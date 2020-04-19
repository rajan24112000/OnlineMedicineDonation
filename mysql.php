<?php
    require('dbconfig/config.php');

    if(!empty($_POST["keyword"])) {
        $query ="SELECT * FROM tbl_medname WHERE medname like '" . $_POST["keyword"] . "%' ORDER BY medname LIMIT 0,10";
        $result = mysqli_query($con,$query);
        if(!empty($result)) {
?>
            <ul id="medname-list">
            <?php
                foreach($result as $medname) {
            ?>
                <li onClick="selectMedname('<?php echo $medname["medname"]; ?>');"><?php echo $medname["medname"]; ?></li>
                <?php } ?>
            </ul>
        <?php } } ?>