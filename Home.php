<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AgriKart</title>
    <style>
        <?php include "home.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <table class="front-table">
        <tr>
            <td class="left-div">
                <div class="logo-div">
                    <img src="images/Logo.png" class="logo">
                </div>
            </td>
            <td class="right-div">
                <div class="topnav">
                    <a href="Register.php" style="margin-right: 40px">Register</a>
                    <a style="pointer-events: none;">|</a>
                    <a href="Login.php">Login</a>
                </div>
                <div class="about">
                    <h2>ABOUT US</h2>

                    <p>AgriKart is India's 1st online shop for Agriculture and Gardening inputs at affordable prices. It
                        was established in 2013 and is based in Namma Bengaluru. AgriKart believes in farming being a
                        pillar for the world and farmers are the backbone of the nation.
                    </p>
                    <a href="Contact_Form.php"><button class="contact-button">CONTACT US</button></a>
                </div>
            </td>
        </tr>
    </table>
    <div class="middle-section">
        <h1>Our Products</h1>
        <div class="equipments">
            <div class="temp">
                <img src="images/pesticide.jpg" alt="pest">
                <p>Pesticides</p>
            </div>
            <div class="temp">
                <img src="images/seeds.jpg" alt="seed">
                <p>Seeds</p>
            </div>
            <div class="temp">
                <img src="images/equipment.webp" alt="equi1">
                <p>Farming Tools</p>
            </div>
            <div class="temp">
                <img src="images/equipment2.jpg" alt="equi2">
                <p>Equipments</p>
            </div>
        </div>
    </div>

    <section id="download">
        <div class="cont">
            <h3>Sign up now.</h3>
            <button class="download login" type="button"><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login </a></button>
            <button class="download register" type="button"><a href="Register.php"><i class="fas fa-user-plus"></i> Register
                </a></button><br>
            <i>
                <p id="download-para"></p>
            </i>
        </div>
    </section>
    <section id="car">
        <div class="loop-wrapper">
            <div class="mountain"></div>
            <div class="hill"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="rock"></div>
            <div class="truck"></div>
            <div class="wheels"></div>
        </div>
    </section>
    <div class="features">
        <div class="feature">
            <div class="feature-div">
                <i class="fas fa-undo-alt"></i>
            </div>
            <div class="feature-div">
                <h2>Return</h2>
                <h6>Within 7 days</h6>
            </div>
        </div>
        <div class="feature">
            <div class="feature-div">
                <i class="fas fa-shipping-fast"></i>
            </div>
            <div class="feature-div">
                <h2>Free Shipping</h2>
                <h6>on order Above Rs 500</h6>
            </div>
        </div>
        <div class="feature">
            <div class="feature-div">
                <i class="fas fa-rupee-sign"></i>
            </div>
            <div class="feature-div">
                <h2>Get Rs 100 off First order</h2>
                <h6>When you register</h6>
            </div>
        </div>
        <div class="feature">
            <div class="feature-div">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="feature-div">
                <h2>Customer Support</h2>
                <h6>24/7 Service</h6>
            </div>
        </div>
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