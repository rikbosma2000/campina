<?php

require('server.php');

$id = session_id();

if (isset($_POST['delete'])) {

// sending query
    mysqli_query($connection, "DELETE FROM users WHERE id = '$id'")
    or die(mysqli_error($connection));


//    header('location: index.php');
}

if (isset($_POST['editProfile'])) {
    $username = $_POST['username'];
    $email = $_SESSION['email'];

    $sql = "UPDATE users SET username='$username' WHERE email='$email'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $_SESSION['username'] = $username;
        header('location: index.php');
    } else {
        echo "Error updating record: " . $connection->error;
    }
}





