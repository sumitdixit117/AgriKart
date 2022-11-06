<style>
    <?php include "header.css" ?>
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
                <a href="Order_history.php">Your Orders</a>
                <a href="Contact_Form.php">Contact Us</a>
                <a href="Home.php">Log Out</a>
            </div>
        </div>
        <a style="pointer-events: none;">|</a>
        <a href="Cart.php"><i class="fas fa-shopping-cart"></i></a>
        <a href="#"><i class="fas fa-search"></i></a>
        <input type="search" placeholder="Search...">
    </div>
    <div class="bottom-nav">
        <a href="Explore.php" class="home-nav">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Seeds <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="flower.php">Flower Seeds</a>
                <a href="seeds.php">Vegetable Seeds</a>
                <a href="fruit.php">Fruit Seeds</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Plant Protection <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="pest.php">Pesticides</a>
                <a href="pest.php">Insecticides</a>
                <a href="pest.php">Water Soluble Fertilizers</a>
                <a href="pest.php">Organic Products</a>
                <a href="pest.php">Bactericides</a>
            </div>
        </div>
         <a href="flower.php">Flower Seeds</a>
        <a href="tools.php">Tools and Machinery</a>
    </div>
