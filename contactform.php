<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "lonncalpatura.w@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an e-mail from".$name.".\n\n"

  mail($mailTo, $subject, $txt, $headers);
  header("Location: indexhtml?mailsend");
}
