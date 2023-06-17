<?php include('server.php') ;
?><html lang="en">
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
                        <?php include('errors.php');?>
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

</body>

</html>
