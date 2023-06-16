<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="register.php">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" required />
                        </div>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" required />
                        </div>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="username" id="username" placeholder="username" required />
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" required />
                        </div>
                        <div class="form-group">
                            <label for="phone"></label>
                            <input type="mobile" name="mobile" id="mobile" placeholder="Your Mobile Number" required />
                        </div>
                        <div class="form-group">
                            <label for="pass"></label>
                            <input type="password" name="password_1" id="password_1" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <label for="re-pass"></label>
                            <input type="password" name="password_2" id="password_2" placeholder="Repeat your password"
                                required />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="reg_user" id="reg_user" class="form-submit" value="Register" />
                        </div>
                    </form>
                </div>
                <div class="login-link">
                    <a href="login.php" class="signup-link">I am already member ?</a>
                </div>
            </div>
    </div>
    </section>
    </div>
    <!-- JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script> -->

</body>

</html>