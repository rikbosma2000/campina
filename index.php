<?php

include ('server.php');

if (!$_SESSION['logged_in']) {
    header('location: login.php');
    return;
}

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Campina</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">

</head>

<body class="index-body">

<div class="wrapper wrapper-index">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="page.php">
                <img src="img/logo.png" style="height: 150px">
            </a>
            <div class="dropdown">
                <?php if (isset($_SESSION["username"])): ?>
                <strong><a class="dropbtn" style="color: #fff;"><?php echo $_SESSION['username']; ?> </a></strong>
                <div class="dropdown-content">
                    <a href="profile.php">Info</a>
                    <a href="editProfile.php">Edit profile</a>
                    <a href="index.php?logout='1'" style="color: red;">Logout</a>
                </div>
            </div>
            <?php endif ?>
        </div>
    </nav>
    <div class="bg-earth">
        <div class="container">
            <h1 class="text-front">Welcome <br>to the world of <br>FrieslandCampina</h1>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
