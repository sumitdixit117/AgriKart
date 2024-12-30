<div class="topnav">
    <a class="active" href="Home.php"><img src="../images/logo.png" class="logo"></a>
    <div class="user-dropdown">
        <a href="#"><i class="fas fa-user"></i></a>
        <div class="user-dropdown-content">
            <a href="Profile.php">Your Profile</a>
            <a href="Order_history.php">Your Orders</a>
            <a href="Contact_form.php">Contact Us</a>
            <a href="../scripts/logout.php">Log Out</a>
        </div>
    </div>
    <a style="pointer-events: none;">|</a>
    <a href="Cart.php"><i class="fas fa-shopping-cart"></i></a>
    <form role="search" action="Search_result.php" method="get">
        <button type="submit" class="search-button"><a href="#"><i class="fas fa-search"></i></a></button>
        <input type="search" placeholder="Search..." name="search_text" required>
    </form>
</div>
<div class="bottom-nav">
    <a href="Home.php" class="home-nav">Home</a>
    <a href="Explore.php">Explore</a>
    <div class="dropdown">
        <button class="dropbtn">Seeds <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
            <div class="second-level-dropdown">
                <button class="dropbtn">Flower Seeds <i class="fa fa-caret-right"></i></button>
                <div class="dropdown-content second-dropdown-content">
                    <a href="Explore.php?category=flower">Flower's Hybrid Seeds</a>
                    <a href="Explore.php?category=flower">Petunia Garden Mixed Flower
                        Seeds</a>
                    <a href="Explore.php?category=flower">GoldSmith/SFlowers</a>
                </div>
            </div>
            <div class="second-level-dropdown">
                <button class="dropbtn">Vegetable Seeds <i class="fa fa-caret-right"></i></button>
                <div class="dropdown-content second-dropdown-content">
                    <a href="Explore.php?category=seeds">Vegetable's Hybrid Seeds</a>
                    <a href="Explore.php?category=seeds">Hybrid Papaya Seeds</a>
                    <a href="Explore.php?category=seeds">Leafy Veggies</a>
                    <a href="Explore.php?category=seeds">Exotic Vegetable Seeds</a>
                    <a href="Explore.php?category=seeds">Microgreen Seeds</a>
                </div>
            </div>
            <a href="Explore.php?category=fruit">Fruit Seeds</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Plant Protection <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
            <a href="Explore.php?category=pest">Pesticides</a>
            <a href="Explore.php?category=pest">Insecticides</a>
            <a href="Explore.php?category=pest">Water Soluble Fertilizers</a>
            <a href="Explore.php?category=pest">Organic Products</a>
            <a href="Explore.php?category=pest">Bactericides</a>
        </div>
    </div>
    <a href="Explore.php?category=tools">Tools and Machinery</a>
</div>