<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././styles/form-style.css">
    <title>Register</title>
</head>

<body>
    <div class="login-box" action="POST">
        <h2>Login</h2>
        <form action="../registrationBackend/loginHandler.php" method="post">
            <div class="user-box">
                <input type="email" name="Email" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="Password" required>
                <label>Password</label>
            </div>
            <?php if (isset($_SESSION["invalidLogin"])) {
                if ($_SESSION["invalidLogin"] == true) { ?>
                        <h3 style="color:#f90000">Invalid login</h3>

             <?php } else { ?>
                <h3></h3>
            <?php }
            } else {
                 ?>
                <h3></h3>
            <?php
            } ?>
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>

                Submit
            </button>
        </form>
    </div>
</body>

</html>