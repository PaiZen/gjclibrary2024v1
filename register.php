<?php
// Get host and URI
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$src = '/src';
?>

<?php require("validate.php"); ?>
<?php include("components/header.php"); ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper-register">
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
                    <input type="checkbox"><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">I agree to the terms & conditions</a>
                </div>
                <button type="submit" class="btn">Register</button>
                <p class="success-register">
                    <?php echo $success_register; ?>
                </p>
                <div class="login-register">
                    <p>Already have an account? <a href="http://<?php echo $host . $uri ?>/signin.php" class="login-link">Login here</a> </p>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content for the popup goes here -->
                    By accessing and borrow books from GJC Library, you confirm that you are in agreement with and bound
                    by the terms of service contained in the Terms & Conditions outlined below. These terms apply to the
                    entire website and any email or other type of communication between you and General De Jesus College.
                </div>
                <div class="modal-body">
                    You represent and warrant that you are of legal age to form a binding contract. If you are not able to
                    form a binding contract (this means, in most jurisdictions, you are not yet 18 years old), we strongly
                    encourage librarians, teachers and parents to spend time online with children/students and to
                    appropriately monitor their online activities, as such we recommend informing parents are aware of the
                    Services. Please protect privacy by instructing them to never provide personal information on this site
                    or any other, or within any software registration process. And make sure the students understand basic
                    copyright issues, i.e., don’t cut and paste and reuse the material in a commercial manner.
                </div>
                <div class="modal-body">
                    If you register to use any of the Services, you will create an account, and select a password and
                    username. You promise that the registration information you provide will be accurate, complete, and
                    up-to-date, and you understand that failure to do so may result in suspension of your Account. You may
                    not select for your username a name that you don’t have the rights to use or another person’s name with
                    the intent to impersonate that person.
                </div>
                <div class="modal-body">
                    You promise to only use the Services for your personal, non-commercial use, and only in a manner that
                    complies with all laws that apply to you. If your use of the Services is prohibited by applicable laws,
                    then you aren’t authorized to use the Services. We can’t and won’t be responsible for you using the
                    Services in away that breaks the law.
                </div>
                <div class="modal-body">
                    You are also responsible for maintaining the confidentiality of your Account password and for the
                    security of your Account, and you will notify GJC Library immediately of any actual or suspected loss,
                    theft, or unauthorized use of your Account or Account password.
                </div>
                <div class="modal-body">
                    Any violation of the Terms of Use by anyone using the Services under your Account (or otherwise under
                    your authority or permission) may be deemed a violation by you, irrespective of whether the violation
                    is with or without your consent.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- Additional buttons can be added here -->
                </div>
            </div>
        </div>
    </div>

     <?php include("components/scripts.php"); ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


