<?php include "db.php"?>

<?php
    
    function getAllIDUsers() {
        global $connection;
            
        // CREATE
        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query FAIL");
        }

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];

            echo "<option value='$id'>$id</option>";
        }
    }

    function updateUser() {
        global $connection;
        $name = $_POST['name'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$name', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("All die");
        }
    }

    function deleteUser() {
        global $connection;

        $id = $_POST['id'];

        $query = "DELETE FROM users  ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("All die");
        }
    }



?>