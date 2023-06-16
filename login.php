<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login">
    <section class="sign-in">
        <div class="container signin">
            <div class="signin-content">
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" class="register-form" action="login.php" id="login-form">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="username"></label>
                            <input type="text" name="username" id="username" required
                                placeholder="username" />
                        </div>
                        <div class="form-group">
                            <label for="password_1"></label>
                            <input type="password" name="password_1" id="password_1" required
                                placeholder="Password" />
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Log in" />
                        </div>
                    </form>
                    <div class="register-link">
                        <a href="register.php" class="signup-link">Create an account here !</a>
                    </div>
    </section>
</body>

</html>