<?php
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'helder.ferreira2821@gmail.com';
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    mail($to, $subject, $txt, $headers);
  }
?>
<html>
  <head>
    <link rel="stylesheet" href="style_contact.css">
    <link rel="stylesheet" href="Header&Footer.css"> 
  </head>
  <body>
    <?php include_once('Header.php'); ?>
    <h1>Contact</h1>
    <form action="" method="post">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" placeholder="Message" required></textarea>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php include_once('Footer.php'); ?>
  </body>
</html>