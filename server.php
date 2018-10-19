<?php

session_start();
$id = "";
$username = "";
$email = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'campina');

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// if the register button is clicked

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // ensure that form fields are filled properly

    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (preg_match('/\s/', $username)) {
        array_push($errors, "No whitespace in username");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");

    }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email not correct");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");

    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do  not match");
    }

    $uppercase = preg_match('@[A-Z]@', $password_1);
    $lowercase = preg_match('@[a-z]@', $password_1);
    $number = preg_match('@[0-9]@', $password_1);

    if (!$uppercase || !$lowercase || !$number || strlen($password_1) < 8) {
        array_push($errors, "password");
    }

    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u) or die(mysqli_error($db));
    $res_e = mysqli_query($db, $sql_e) or die(mysqli_error($db));

    if (mysqli_num_rows($res_u) > 0) {
        array_push($errors, "Sorry... Username already taken");
    } else if (mysqli_num_rows($res_e) > 0) {
        array_push($errors, "Sorry... Email already taken");
    }

    //if there are no errors, save user to database

    if (count($errors) == 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        $_SESSION['logged_in'] = true;
        header('location: index.php'); // redirect to home page
    }

}


// log user in from login page

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // ensure that form fields are filled properly

    if (empty($username)) {
        array_push($errors, "Username is required");

    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        $queryResults = $results->fetch_assoc();

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $queryResults['username'];
            $_SESSION['email'] = $queryResults['email'];
            $_SESSION['id'] = $queryResults['id'];
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}



// logout

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

// chat

if (isset($_POST['addChat'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $keywords = mysqli_real_escape_string($db, $_POST['keywords']);

    $sql = "INSERT INTO search (title, description, keywords) 
VALUES ('$title', '$description', '$keywords')";

    $post_query = mysqli_query($db, $sql);
    if (!$post_query) {
        echo 'not inserted';
    }
    header("chat.php");
}







