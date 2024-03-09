<?php require ("validate.php") ?>
<!DOCTYPE html>
<html lang="en" class="hydrated">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        if($username_error != null){
            ?> <style>.username-error{display:block}</style> <?php
        }
        if($password_error != null){
            ?> <style>.password-error{display:block}</style> <?php
        }
        if($success != null){
            ?> <style>.success{display:block}</style> <?php
        }
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                    <p class="error username-error">
                        <?php echo $username_error; ?>
                    </p>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" value="<?php echo $password; ?>">
                    <p class="error password-error">
                        <?php echo $password_error; ?>
                    </p>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="forgot.php">Forgot Password?</a>
                </div>
                <button type="submit" name="login" class="btn">Login</button>
                <p class="success">
                    <?php echo $success; ?>
                </p>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register here</a> </p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username-register" value="<?php echo $username_register; ?>">
                    <p class="error username-register-error">
                        <?php echo $username_register_error; ?>
                    </p>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                    <p class="error email-error">
                        <?php echo $email_error; ?>
                    </p>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password-register" value="<?php echo $password_register; ?>">
                    <p class="error password-register-error">
                        <?php echo $password_register_error; ?>
                    </p>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="confirm-password" value="<?php echo $confirm_password; ?>">
                    <p class="error confirm-password-error">
                        <?php echo $confirm_password_error; ?>
                    </p>
                    <label>Confirm Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="terms">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <p class="success-register">
                    <?php echo $success_register; ?>
                </p>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login here</a> </p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>