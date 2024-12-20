<!DOCTYPE html>
<html>

<head>
  <title>Contact Form</title>
  <style>
    <?php include "css/contact_form.css"; ?>
  </style>
  <style>
    <?php include "css/header.css" ?>
  </style>
</head>

<body>
  <?php require_once 'Header.php'; ?>

  <div class="contact-div">
    <table class="contact-table">
      <tr>
        <td class="td1">
          <h3 class="heading">Let's talk about everything!</h3>
          <p>Enter your details including your name, email and your query in the respective blanks. We will try our best
            to solve your queries!</p>
          <p><img src="https://tenantprotections.org/img/tenant.svg" alt="Contact-Image" class="contact-img"></p>
        </td>
        <td class="td2">
          <form action="" name="contactForm" method="post">
            <input type="text" class="form-control" name="name" placeholder="Your name" required>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your query"
              required></textarea>
            <input type="submit" value="Send Message" class="btn" name="submitForm">
          </form>
        </td>
      </tr>
    </table>
  </div>

  <?php
  require_once '_conn.php';
  $conn = getDatabaseConnection();

  if (isset($_POST['submitForm'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $sql = $conn->prepare("INSERT INTO `contact form` (name, email, subject, query) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $name, $email, $subject, $message);

    if ($sql->execute()) {
      echo ("<script>location.href = 'Home.php';</script>");
    } else {
      echo "Error: " . $sql->error;
    }

    $sql->close();
  }

  $conn->close();
  ?>

  <?php require_once 'Footer.php'; ?>
</body>

</html>