<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <style>
        <?php include "cart.css" ?>
    </style>

<?php require_once('header.php'); ?>

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
          <article class="product">
            <header>
              <a><img src="images/1.jpg" alt="crop" /></a>
            </header>

            <div class="content">
              <h1>Crop</h1>

              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta,
              numquam quis perspiciatis ea ad omnis provident laborum dolore in
              atque.
            </div>

            <div class="footer-content">
              <span class="qt-minus">-</span>
              <span class="qt">2</span>
              <span class="qt-plus">+</span>

              <h2 class="full-price">Rs 29.98</h2>

              <h2 class="price">Rs 14.99</h2>
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
          <article class="product">
            <header>
              <a><img src="images/2.jpg" alt="crop" /></a>
            </header>

            <div class="content">
              <h1>Crop</h1>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta,
              numquam quis perspiciatis ea ad omnis provident laborum dolore in
              atque.
            </div>

            <div class="footer-content">
              <span class="qt-minus">-</span>
              <span class="qt">2</span>
              <span class="qt-plus">+</span>

              <h2 class="full-price">Rs 29.98</h2>

              <h2 class="price">Rs 14.99</h2>
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
        </section>
      </div>

      <div id="site-footer">
        <div class="container clearfix">
          <div style="float: left;">
            <h2 class="subtotal">Subtotal: Rs<span id="subtt"> 163.96</span></h2>
            <h3 class="tax">Taxes (5%): Rs<span id="tax"> 8.2</span></h3>
            <h3 class="shipping">Shipping: Rs<span id="ship"> 5</span></h3>
          </div>

          <div style="float: right;">
            <h1 class="total">Total: Rs<span id="tot"> 1,000</span></h1>
            <a class="btn" href="Payment_Gateway.php">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once('footer.php'); ?>