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
            <div class="col-md-4">
                <ul class="sidebar">
                    <a href="">
                        <li class="active">Chat 1</li>
                    </a>
                    <a href="">
                        <li>Chat 2</li>
                    </a>
                    <a href="">
                        <li>Chat 3</li>
                    </a>
                    <a href="">
                        <li>Chat 4</li>
                    </a>
                </ul>
            </div>
            <div class="col-md-8">
                <form action="chat.php" method="get">
                    <?php
                    $sql = "SELECT title, description, id FROM search";
                    $result = $connection->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='discussion-group' style='border: 1px solid #ddd; margin-bottom: 20px;'>
                                      <div class='row'>
                                        <div class='col-md-2'>
                                            <h2>" . $row["id"] . "</h2>
                                        </div>
                                        <div class='col-md-10'>              
                                            <div class='row' style='padding: 20px;'>
                                                <h2>" . $row["title"] . "</h2>
                                                <h6 style='font-size: 17px;'>" . $row["description"] . "</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <form action='server.php' method='GET'>
                                      <button id='" . $row["id"] . "' type='submit' name='delete' class='btn' value='" . $row["id"] . "'>Delete</button>
</form>
                               </div>";



                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
                </form>

            </div>

            <a href="addChat.php" style="color: #fff;">
                <div class="btn btn-primary btn-lg">Add a chat</div>
            </a>

            <!-- Bootstrap core JavaScript -->
            <script
                    src="https://code.jquery.com/jquery-3.3.1.min.js"
                    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/custom.js"></script>

</body>

</html>
