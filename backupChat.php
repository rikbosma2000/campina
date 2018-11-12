<?php include('server.php'); ?>


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
                <div class="discussion-group" style="border: 1px solid #ddd;">
                    <div class="row" style="padding: 20px;">
                        <div class="col-md-2">
                            <img src="img/boer.png" style="max-width: 100%; border-radius: 50%">
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 >Dirk Zijlstra</h5>
                                </div>
                                <div class="col-md-6">
                                    <h6 id="date" class="text-right">14-10-2018</h6>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis,
                                sem. Nulla consequat massa quis enim.</p>

                            <form class="answer">
                                <input title="comment" placeholder="comment">
                                <div class="btn btn-sm btn-success" style="margin-top: -3px">Send</div>
                            </form>

                            <div id="demo" class="collapse" style="padding-top: 10px; font-size: 12px;">
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center btn-comments">
                        <div class="btn btn-primary" data-toggle="collapse" data-target="#demo">
                            Show comments
                        </div>
                    </div>

                </div>
                <div class="discussion-group top-10" style="border: 1px solid #ddd;">
                    <div class="row" style="padding: 20px;">
                        <div class="col-md-2">
                            <img src="img/boer.jpg" style="max-width: 100%; border-radius: 50%">
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Marrit Zijlstra</h5>
                                </div>
                                <div class="col-md-6">
                                    <h6 id="date" class="text-right">13-10-2018</h6>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis,
                                sem. Nulla consequat massa quis enim.</p>

                            <form class="answer">
                                <input title="comment" placeholder="comment">
                                <div class="btn btn-sm btn-success" style="margin-top: -3px">Send</div>
                            </form>

                            <div id="demo1" class="collapse" style="padding-top: 10px; font-size: 12px;">
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center btn-comments">
                        <div class="btn btn-primary" data-toggle="collapse" data-target="#demo1">
                            Show comments
                        </div>
                    </div>
                </div>
                <div class="discussion-group top-10" style="border: 1px solid #ddd;">
                    <div class="row" style="padding: 20px;">
                        <div class="col-md-2">
                            <img src="img/boer.png" style="max-width: 100%; border-radius: 50%">
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Klaas Boersma</h5>
                                </div>
                                <div class="col-md-6">
                                    <h6 id="date" class="text-right">13-10-2018</h6>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis,
                                sem. Nulla consequat massa quis enim.</p>

                            <form class="answer">
                                <input title="comment" placeholder="comment">
                                <div class="btn btn-sm btn-success" style="margin-top: -3px">Send</div>
                            </form>

                            <div id="demo2" class="collapse" style="padding-top: 10px; font-size: 12px;">
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center btn-comments">
                        <div class="btn btn-primary" data-toggle="collapse" data-target="#demo2">
                            Show comments
                        </div>
                    </div>
                </div>
                <div class="discussion-group top-10" style="border: 1px solid #ddd;">
                    <div class="row" style="padding: 20px;">
                        <div class="col-md-2">
                            <img src="img/boer.png" style="max-width: 100%; border-radius: 50%">
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 >Piet Jorritsma</h5>
                                </div>
                                <div class="col-md-6">
                                    <h6 id="date" class="text-right">11-10-2018</h6>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis,
                                sem. Nulla consequat massa quis enim.</p>

                            <form class="answer">
                                <input title="comment" placeholder="comment">
                                <div class="btn btn-sm btn-success" style="margin-top: -3px">Send</div>
                            </form>

                            <div id="demo3" class="collapse" style="padding-top: 10px; font-size: 12px;">
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <h6>Rikkert Klaasma</h6>
                                <p style="border-bottom: 1px solid #dddddd;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center btn-comments">
                        <div class="btn btn-primary" data-toggle="collapse" data-target="#demo3">
                            Show comments
                        </div>
                    </div>
                </div>
                <form class="answer" style="padding-top: 50px; text-align: center">
                    <input title="comment" placeholder="comment">
                    <div class="btn btn-sm btn-primary" style="margin-top: -3px">Send</div>
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
