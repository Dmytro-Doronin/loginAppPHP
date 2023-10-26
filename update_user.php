<?php include 'utilities.php'?>
<?php include 'db.php'?>
<?php echo "<link rel='stylesheet' href='style.css'>";?>


<?php

    if (isset($_POST['submit'])) {

        updateUser();
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

    <form class="form" action="update_user.php" method="post">
        <input class="textfield" name="name" type="text" placeholder="Name">
        <input class="textfield" name="password" type="password" placeholder="Password">
        <button class="button" type="submit" name="submit">Submit</button>
        <select class="select" name="id" id="">
            <?php
                getAllIDUsers();
            ?>
        </select>
    </form>

</body>
</html>