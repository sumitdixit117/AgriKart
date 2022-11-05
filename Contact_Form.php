<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
    <style>
        <?php include "contact_form.css" ?>
    </style>

<?php require_once('header.php'); ?>

  <div class="contact-div">
    <table class="contact-table">
      <tr>
        <td class="td1">

          <h3 class="heading">Let's talk about everything!</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

          <p><img src="images/undraw-contact.svg" alt="Contact-Image" class="contact-img"></p>


        </td>
        <td class="td2">

          <form action="mailto:support@AgriKart.com" name="contactForm">
            <input type="text" class="form-control" name="name" placeholder="Your name">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <input type="text" class="form-control" name="subject" placeholder="Subject">
            <textarea class="form-control" name="message" id="message" cols="30" rows="7"
              placeholder="Write your query"></textarea>
            <input type="submit" value="Send Message" class="btn">
          </form>
        </td>
      </tr>
    </table>
  </div>
  
<?php require_once('footer.php'); ?>