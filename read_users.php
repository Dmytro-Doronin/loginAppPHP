<?php include "db.php"?>
<?php 

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query FAIL");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        while($row = mysqli_fetch_row($result)) {
            ?>
            <pre >
                <?php
                print_r($row[0]);
                ?>
            </pre>

            <?php

        }
            ?>
    </div>
</body>
</html>