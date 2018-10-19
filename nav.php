<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-light nav-website">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" style="height: 100px">
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Groups</a>
                    <span class="sr-only">(current)</span>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Production</a>
                        <a class="dropdown-item" href="#">Research and Development</a>
                        <a class="dropdown-item" href="#">Purchasing</a>
                        <a class="dropdown-item" href="#">Marketing</a>
                        <a class="dropdown-item" href="#">Human Resource Management</a>
                        <a class="dropdown-item" href="#">Accounting and Finance</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php">Chats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ideas</a>
                </li>
            </ul>
        </div>
        <form class="form-inline ml-auto" action="./search.php" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q" dir="ltr">
            <button class="btn btn-search my-2 my-sm-0" type="submit" value="go">Search</button>
        </form>
        <div class="dropdown">
            <img class="no-pf" src="img/boer.jpg">
            <div class="dropdown-content">
                <a href="profile.php">Info</a>
                <a href="editProfile.php">Edit profile</a>
                <a href="index.php?logout='1'" style="color: red;">Logout</a>
            </div>
        </div>
    </div>
</nav>