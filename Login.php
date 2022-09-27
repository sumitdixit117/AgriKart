<html>

<head>
    <title>Log in</title>
    <style>
        <?php include "register.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="Home.php"><img src="images/logo.png" alt="AgriKart" width="170px"></a>
        <a href="Register.php">Register</a>
        <a style="pointer-events: none;">|</a>
        <a href="Home.php">Home</a>
    </div>
    <div class="heading">
        <h1>AgriKart</h1>
        <h2>Register to Buy Farming Essentials at Best Price.</h2>
    </div>
    <div class="box">
        <form method="post" action="login_script.php">
            <div class="form-content">
                <h3>Enter the following details: </h3>
                <label>Email Address: </label><br>
                <input type="email" size="40px" name="email" id="em" autocomplete="on"
                    required><br>
                <label>Password: </label><br>
                <input type="password" size="40px" name="pass" id="psw" required><br>
            </div>
            <center>
                <?php if (isset($_GET["message"])) { ?>
                    <p style="margin: 0; color: red;">Invalid email or password!</p>
                <?php } ?>
                <button type="submit" class="login-button">Log in</button>
            </center>
        </form>
        <p class="para-2">New to AgriKart? <a href="Register.php">Create an account</a>.</p>
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <img src="images/Logo.png" alt="Logo">
            <p class="footer-para">
                Online Shop for complete Agriculture and Gardening needs.
            </p>
            <p class="footer-copyright">Copyright © 2022 AgriKart. All Rights Reserved.</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>J Block, Men's Hostel</span> VIT, Vellore</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+91 9876543210</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@AgriKart.com">support@AgriKart.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Our Vision</span>
            <p>Our goal is to make sure that farmers in India should be able to do ease of farming by providing advanced
                technology in agricultural machinery and equipment at affordable prices.</p>
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/sumitdixit117/AgriKart"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>