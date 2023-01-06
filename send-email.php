<?php
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "andreaes@mit.edu";
  $subject = "New Form Submission";
  $body = "You have received a new message from $first_name $last_name ($email):\n\n$message";
  mail($to, $subject, $body);
?>