<?php

require ('server.php');

if (empty($_SESSION)) {
    header('Location: /login.php');
    return true;
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css"
          integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css"
          integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css"
          integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css"
          integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">


</head>

<body style="margin-top: 126px; margin-bottom: 50px;">

<?php
if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
//Task to do
} else {
    header('Location: login.php'); //redirect URL
}
?>

<div class="wrapper">
    <?php include('nav.php') ?>

    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-6">
                <form action="chat.php" method="post" id="chatForm">
                    <div class="input-group">
                        <input type="text" name="title" title="title" placeholder="title">
                    </div>
                    <div class="input-group">
                        <input type="text" name="description" title="description" placeholder="description">
                    </div>
                    <div class="input-group">
                        <input type="text" name="keywords" title="keywords" placeholder="keywords">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="addChat" class="btn">Add Chat!</button>
                    </div>
                </form>
            </div>
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
