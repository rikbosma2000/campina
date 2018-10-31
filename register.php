<?php

include ('server.php');

if (!empty($_SESSION)) {
    header('Location: /index.php');
    return true;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="register.php" class="register-form">

    <!--    display validation errors here-->
    <?php include('errors.php'); ?>
    <div class="input-group"
        <?php if (isset($name_error)): ?>
            class="form_error"
        <?php endif ?>
    >
        <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
        <?php if (isset($name_error)): ?>
            <span><?php echo $name_error; ?></span>
        <?php endif; ?>
    </div>
    <div class="input-group"
        <?php if (isset($email_error)): ?>
            class="form_error"
        <?php endif ?>
    >

        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="email">

        <?php if (isset($email_error)): ?>
            <span><?php echo $email_error; ?></span>
        <?php endif; ?>
    </div>

    <div class="input-group">
        <input type="password" name="password_1" placeholder="Password">
    </div>
    <div class="input-group">
        <input type="password" name="password_2" placeholder="Confirm Password">
    </div>
    <div class="input-group">
        <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>