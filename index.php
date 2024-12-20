<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AgriKart</title>
    <style>
        <?php include "css/home.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <table class="front-table">
        <tr>
            <td class="left-div">
                <div class="logo-div">
                    <img src="images/logo.png" class="logo">
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
                    <a href="Register.php"><button class="contact-button">REGISTER NOW </button></a>
                </div>
            </td>
        </tr>
    </table>
    <div class="middle-section">
        <h1>Our Products</h1>
        <div class="equipments">
            <div class="temp">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7kcOj0UWLEeYWO0YrbgTdMtTeM4hCHLF7Nw&usqp=CAU"
                    alt="pest">
                <p>Pesticides</p>
            </div>
            <div class="temp">
                <img src="https://media.istockphoto.com/id/527229644/photo/planting-seeds.jpg?s=612x612&w=0&k=20&c=42c_9MIwl59_8oh4fKCW1m-BDlhZLi31tTP3_sRYoWk="
                    alt="seed">
                <p>Seeds</p>
            </div>
            <div class="temp">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmYBCX9cQSk9LUt0P5k7BthTyDd9n-KKfP2w&usqp=CAU"
                    alt="equi1">
                <p>Farming Tools</p>
            </div>
            <div class="temp">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjYcWpqxWU9KQk-XhNNoEO4YTSNSh_WlpoNg&usqp=CAU"
                    alt="equi2">
                <p>Equipments</p>
            </div>
        </div>
    </div>

    <section id="download">
        <div class="cont">
            <h3>Sign up now.</h3>
            <button class="download login" type="button"><a href="Login.php"><i class="fas fa-sign-in-alt"></i> Login
                </a></button>
            <button class="download register" type="button"><a href="Register.php"><i class="fas fa-user-plus"></i>
                    Register
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
    <?php require_once 'Footer.php'; ?>
</body>

</html>