<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        <?php include "../css/register.css"; ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="../index.php"><img src="../images/logo.png" alt="AgriKart" width="170px"></a>
        <a href="Register.php">Register</a>
        <a style="pointer-events: none;">|</a>
        <a href="../index.php">Home</a>
    </div>
    <div class="heading">
        <h1>AgriKart</h1>
        <h2>Register to Buy Farming Essentials at Best Price.</h2>
    </div>
    <div class="box">
        <form method="post" action="../scripts/login_script.php">
            <div class="form-content form-div">
                <h3>Enter the following details: </h3>
                <label for="email">Email Address: </label><br>
                <input type="email" id="email" size="40px" name="email" autocomplete="on" required><br>
                <label for="pass">Password: </label><br>
                <input type="password" id="pass" size="40px" name="pass" required><br>
                <label for="captcha">Enter Captcha: </label><br>
                <input type="text" id="captcha" size="20px" name="captcha" required>
                <img src="../scripts/captcha.php" alt="Captcha">
            </div>
            <center>
                <?php if (isset($_GET["imessage"])) { ?>
                    <p style="margin: 20px 0 0; color: red;">Invalid email or password!</p>
                <?php } else if (isset($_GET["cmessage"])) { ?>
                        <p style="margin: 20px 0 0; color: red;">Invalid Captcha!</p>
                <?php } ?>
                <button type="submit" class="login-button">Log in</button>
            </center>
        </form>
        <p class="para-2">New to AgriKart? <a href="Register.php">Create an account</a>.</p>
    </div>

    <?php require_once 'Footer.php'; ?>
</body>

</html>