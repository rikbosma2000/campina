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

<body>

<?php
if(isset($_SESSION['username']) && $_SESSION['username'] != "")
{
    //Task to do
}
else{
    header('Location: login.php'); //redirect URL
}
?>

<div class="wrapper profile-page">
    <?php include('nav.php') ?>
    <div class="container">
        <div class="text-center pf">
            <h1><strong>Dairy farmer Jelle b. Pietersma</strong></h1>
            <img class="no-pf " src="img/boer.jpg" style="height: 200px; border-radius: 50%; margin-top: 30px;; margin-bottom: 50px;">
        </div>
    </div>

    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="list">
                        <ul>
                            <li><i class="fas fa-heart"></i>
                                <p>Married with <br>Grietje de Vries</p></li>
                            <li><i class="fab fa-wpforms"></i>
                                <p>450 cows</p></li>
                            <li><i style="color: green;" class="fas fa-map-marker-alt"></i>
                                <p>Terwispel Boslaan <br>92 </p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list">
                        <ul>
                            <li><i class="fas fa-envelope-open"></i>
                                <p>Postcode:<br>8502 HJ</p></li>
                            <li><i style="color:red" class="fas fa-hospital-alt"></i>
                                <p>65 years old</p></li>
                            <li><i class="fas fa-ambulance"></i>
                                <p>Born at: <br> 1 may 1953</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    My name is Jelle and I am a full time working dairy farmer. I am 65 years old and doing this
                    beautiful job for basically my entire life. My dad was a farmer and so was his. My farming
                    business is in the family for almost 200 years and I am really proud of that.
                    <br><br>
                    Being a farmer is my passion and my main occupation. I love what I do and that is maintaining my
                    company by keeping the cows happy. Because, and that is what my dad always said was: if the
                    ladies are happy than so am I.
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="list">
                        <ul>
                            <li><i class="fas fa-building"></i>
                                <p>Dairy farm</p></li>
                            <li><i class="fas fa-industry"></i>
                                <p>Campina collaboration <br> since 1987</p></li>
                            <li><i style="color: #0094d9;" class="fas fa-map-marker-alt"></i>
                                <p>Frisian and proud </p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list">
                        <ul>
                            <li><i class="fas fa-language"></i>
                                <p>Friesian, Dutch <br> Basic English</p></li>
                            <li><i style="color: green;" class="fas fa-globe-americas"></i>
                                <p>Netherlands</p></li>
                            <li><i style="color: yellow;" class="fas fa-lemon"></i>
                                <p>Member of Zuivelcoöperatie <br> FrieslandCampina </p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-arrow-alt-circle-up"></i>
                                    <p>Council Member of <br>district Friesland</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-4 bg-melk">

                </div>
                <div class="col-md-8">
                    <h4>Info</h4>
                    <p> As a full time farmer I am a daily manager of my whole company. My day starts at 4.30 in the
                        morning. I check the cows at 5 o'clock and check if everything is okay. I do check if the
                        milking machine is working and control the productivity. I secure the maintenance of the milk
                        and the whole process as its own.
                        <br><br>
                        I am a member of the Zuivelcoöperatie FrieslandCampina and I am also a council member of the
                        dairy farm district Friesland. As a council member I am attended at meetings and have my sayings
                        in some congresses. This involves me more in the company and I feel more engaged to the process
                        than ever before.
                        <br><br>
                        All in all I can say I am a proud Frisian farmer who loves his job.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-products">

        </div>
    </div>
    <div class="bg-white contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-phone"></i><br>
                    <p>+3164568281<br>
                        0514 482961</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-mail-bulk"></i><br>
                    <p>Jelle18Barentz@FrieslandCampina.com</p>
                </div>
                <div class="col-md-4 text-center">
                    <i style="color: #0094d9;" class="fab fa-skype"></i><br>
                    <p>Jelle.Barentz18</p>
                </div>
            </div>
        </div>
    </div>

    <img src="img/farmer.jpg" style="width: 100%;">
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
