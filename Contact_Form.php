<!DOCTYPE html>
<html>

<head>
  <title>Contact Form</title>
  <style>
    <?php include "css/contact_form.css" ?>
  </style>

  <?php require_once('Header.php'); ?>

  <div class="contact-div">
    <table class="contact-table">
      <tr>
        <td class="td1">

          <h3 class="heading">Let's talk about everything!</h3>
          <p>Enter your details including your name, email and your query in the respective blanks, Will try our best to
            solve your queries!</p>
          <p><img src="https://tenantprotections.org/img/tenant.svg" alt="Contact-Image" class="contact-img"></p>

        </td>
        <td class="td2">
          <form action="" name="contactForm" method="post">
            <input type="text" class="form-control" name="name" placeholder="Your name">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <input type="text" class="form-control" name="subject" placeholder="Subject">
            <textarea class="form-control" name="message" id="message" cols="30" rows="7"
              placeholder="Write your query"></textarea>
            <input type="submit" value="Send Message" class="btn" name="submitForm">
          </form>
        </td>
      </tr>
    </table>
  </div>

  <?php
  require_once('_conn.php');

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['submitForm'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "insert into `contact form` (name,email,subject,query) values ('$name','$email','$subject','$message')";

    if ($conn->query($sql) === TRUE) {
      echo ("<script>location.href = 'Explore.php';</script>");
    } else {
      echo "Error: " . $conn->error;
    }
  }
  ?>

  <?php require_once('Footer.php'); ?>