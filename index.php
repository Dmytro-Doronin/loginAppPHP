<?php include "db.php"?>

<?php
    
    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];
            
        // CREATE
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$name', '$password')";

        // READ 
        // $query = "SELECT * FROM users";


        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query FAIL");
        }

    }
?>

<?php echo "<link rel='stylesheet' href='style.css'>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

    <form class="form" action="index.php" method="post">
        <input class="textfield" name="name" type="text" placeholder="Name">
        <input class="textfield" name="password" type="password" placeholder="Password">
        <button class="button" type="submit" name="submit">Submit</button>
    </form>

</body>
</html>