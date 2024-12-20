<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        <?php include "css/register.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="index.php"><img src="images/logo.png" alt="AgriKart" width="170px"></a>
        <a href="Login.php">Login</a>
        <a style="pointer-events: none;">|</a>
        <a href="index.php">Home</a>
    </div>
    <div class="heading">
        <h1>AgriKart</h1>
        <h2>Register to Buy Farming Essentials at Best Price.</h2>
    </div>
    <div class="box">
        <form method="post" action="register_script.php">
            <div class="form-content">
                <h3>Enter the following details: </h3>
                <p class="warning">* All fields are required!</p>
                <fieldset>
                    <legend>Personal Details</legend>
                    <label for="fname">First Name: </label><br>
                    <input type="text" id="fname" name="fname" required><br>
                    <label for="lname">Last Name: </label><br>
                    <input type="text" id="lname" name="lname" required><br>
                    <label for="date">Date of Birth: </label><br>
                    <input type="date" id="date" name="date" required><br>
                    <label for="gender">Gender: </label><br>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select><br>
                    <label for="code">Country Code: </label><br>
                    <input type="text" id="code" name="code" required><br>
                    <label for="phno">Phone Number: </label><br>
                    <input type="text" id="phno" name="phno" required><br>
                </fieldset>
                <fieldset>
                    <legend>Address Details</legend>
                    <label for="stname">Street Name: </label><br>
                    <input type="text" id="stname" name="stname" required><br>
                    <label for="arname">Area Name: </label><br>
                    <input type="text" id="arname" name="arname" required><br>
                    <label for="city">City: </label><br>
                    <input type="text" id="city" name="city" required><br>
                    <label for="state">State: </label><br>
                    <input type="text" id="state" name="state" required><br>
                    <label for="pin">Pincode: </label><br>
                    <input type="text" id="pin" name="pin" required><br>
                    <label for="country">Country: </label><br>
                    <input type="text" id="country" name="country" required><br>
                </fieldset>
                <fieldset>
                    <legend>Account Details</legend>
                    <label for="email">Email: </label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="pass">Password: </label><br>
                    <input type="password" id="pass" name="pass" required><br>
                    <label for="c-pass">Confirm Password: </label><br>
                    <input type="password" id="c-pass" name="c-pass" required><br>
                </fieldset>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>

    <?php require_once 'Footer.php'; ?>
</body>

</html>