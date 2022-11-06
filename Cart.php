<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <style>
        <?php include "cart.css" ?>
    </style>

<?php require_once('header.php');

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

        $getQuery = "SELECT * FROM `cart`";     

        $result = mysqli_query ($conn, $getQuery); ?>

  <div class="cart-container">
    <div class="cart-div">
      <div class="header">
        <h3 class="heading">Shopping Cart</h3>
        <div class="action">
          <button class="remove" style="color: red">Remove all</button>
        </div>
      </div>

      <div class="container">
        <section id="cart">
          <?php
          $subtotal = 0;
        while ($row = mysqli_fetch_array($result)) { 
                
          $pid = $row["id"];
          $sql = "SELECT * FROM products WHERE id = $pid";
          $res = mysqli_query ($conn, $sql);
          while ($prod = mysqli_fetch_array($res)) {
            $pquan = $prod["quantity"];
          } ?>
          <article class="product">
            <header>
              <a><img src="<?php echo $row["image_link"] ?>" alt="crop" /></a>
            </header>

            <div class="content">
              <h1><?php echo $row["name"] ?></h1>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta,
              numquam quis perspiciatis ea ad omnis provident laborum dolore in
              atque.
            </div>

            <div class="footer-content">
              <?php $quan = $row["quantity"];
              $price = $row["price"];
              $totalprice = $price * $quan; 
              $subtotal += $totalprice; ?>
              <span class="qt"><?php echo $quan ?></span>
              <h2 class="full-price"><?php echo "Rs. " . $totalprice ?></h2>

              <h2 class="price"><?php echo "Rs. " . $price ?></h2>
            </div>
            <div class="buttons">
              <div style="top: 8px" class="delete">
                <i class="fas fa-trash-alt icon-large"></i>
              </div>
              <div style="top: 60px" class="save">
                <i class="fas fa-star icon-large"></i>
              </div>
            </div>
          </article>
          <?php } ?>
        </section>
      </div>

      <div id="site-footer">
      <form method="post" action="">
        <div class="container clearfix">
          <div style="float: left;">
            <h2 class="subtotal">Subtotal: Rs<span id="subtt"> <?php echo $subtotal ?></span></h2>
            <h3 class="tax">Taxes (5%): Rs<span id="tax"> <?php echo ($subtotal * 0.05) ?></span></h3>
            <h3 class="shipping">Shipping: Rs<span id="ship"> 100</span></h3>
          </div>

          <div style="float: right;">
            <h1 class="total">Total: Rs<span id="tot"> <?php echo ($subtotal + $subtotal * 0.05 + 100) ?></span></h1>
            <a class="btn" href="Payment_Gateway.php">Checkout</a>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>

<?php require_once('footer.php'); ?>