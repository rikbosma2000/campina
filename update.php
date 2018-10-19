<?php include ('server.php'); ?>

<?php

$username = $_POST['username'];
$id = $_SESSION['id'];

$sql = "UPDATE users SET username='$username' WHERE id='$id'";
$result= mysqli_query($db, $sql);

if ($db->query($sql) === TRUE) {
    header('location: index.php');
} else {
    echo "Error updating record: " . $db->error;
}


