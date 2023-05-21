<?php
  $email = $_POST['mail'];
  $name = $_POST['isim'];
  $message = $_POST['mesaj'];

  echo '<table>';
  echo '<tr><th>Email</th><td>' . $email . '</td></tr>';
  echo '<tr><th>Name</th><td>' . $name . '</td></tr>';
  echo '<tr><th>Message</th><td>' . $message . '</td></tr>';
  echo '</table>';
?>