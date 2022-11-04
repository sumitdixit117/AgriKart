<!DOCTYPE html>
<html>

<head>
    <title>Explore</title>
    <style>
        <?php include "explore.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="Explore.php"><img src="images/Logo.png" class="logo"></a>
        <div class="user-dropdown">
            <a href="#"><i class="fas fa-user"></i></a>
            <div class="user-dropdown-content">
                <a href="#">Your Account</a>
                <a href="Order_history.html">Your Orders</a>
                <a href="Contact_Form.html">Contact Us</a>
                <a href="Home.php">Log Out</a>
            </div>
        </div>
        <a style="pointer-events: none;">|</a>
        <a href="Cart.html"><i class="fas fa-shopping-cart"></i></a>
        <a href="#"><i class="fas fa-search"></i></a>
        <input type="search" placeholder="Search...">
    </div>
    <div class="bottom-nav">
        <a href="Explore.php" class="home-nav">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Seeds <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <div class="second-level-dropdown">
                    <button class="dropbtn">Hybrid Seeds <i class="fa fa-caret-right"></i></button>
                    <div class="dropdown-content second-dropdown-content">
                        <a href="#">Vegetable's Hybrid Seeds</a>
                        <a href="#">Flower's Hybrid Seeds</a>
                        <a href="#">Hybrid Papaya Seeds</a>
                    </div>
                </div>
                <a href="#">Vegetable Seeds</a>
                <div class="second-level-dropdown">
                    <button class="dropbtn">Imported Flower Seed's <i class="fa fa-caret-right"></i></button>
                    <div class="dropdown-content second-dropdown-content">
                        <a href="#">Asmar</a>
                        <a href="#">Benary</a>
                        <a href="#">PanAmerican Seed</a>
                        <a href="#">Sakata</a>
                        <a href="#">GoldSmith/SFlowers</a>
                    </div>
                </div>
                <a href="#">Forest Seed's</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Live plants <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Bonsai Plants</a>
                <a href="#">Medicinal Plants</a>
                <a href="#">Lemon Plants</a>
                <a href="#">Strawberry Runner's</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Plant Protection <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Fungicides</a>
                <a href="#">Insecticides</a>
                <a href="#">Water Soluble Fertilizers</a>
                <a href="#">Organic Products</a>
                <a href="#">Bactericides</a>
            </div>
        </div>
        <a href="#">Tools and Machinery</a>
    </div>
    <!-- <div class="icons">
        <i class="fas fa-code-branch a"></i>
        <i class="fas fa-heart b"></i>
        <i class="fas fa-search-plus c"></i>
    </div> -->
    <div class="offer-heading">
        <h1>Today's Offers</h1>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "agrikartdb";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $query = "SELECT * FROM `products`;";
  
         // FETCHING DATA FROM DATABASE
        $result = $conn->query($query);
         
           if ($result->num_rows > 0) 
           { ?>
                <div class="products">
                <?php
               // OUTPUT DATA OF EACH ROW
               while($row = $result->fetch_assoc())
               {
                    ?>
                    <div class="product">
                        <div class="img-div">
                            <img src="<?php echo $row["image_link"] ?>" alt="Image">
                        </div>

                        <div class="tag-name">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Add To Cart</span>
                        </div>
                        <div class="name">
                            <p><?php echo $row["name"] ?></p>
                            <p><?php echo $row["price"] ?></p>
                        </div>
                    </div>
                    <?php
               } ?>
               </div>
               <?php
           } 
           else {
               echo "0 results";
           }
    ?>
    
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
    <!-- <script>

        const tags = document.querySelectorAll('.tag-name');
        const products = document.querySelectorAll('.product');
        var i = 0;
        products.forEach(box => {
            box.addEventListener('mouseover', () => {
                for (var i = 0, len = tags.length; i < len; i++) {
                    tags[i].classList.add('add');
                }
            })
            box.addEventListener('mouseout', () => {
                for (var i = 0, len = tags.length; i < len; i++) {
                    tags[i].classList.remove('add');
                }
            })
        });

    </script> -->
</body>

</html>