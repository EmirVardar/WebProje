<?php
  $email = $_POST['email'];
  $password = $_POST['password'];

  $correct_email = "g211210071@sakarya.edu.tr";
  $correct_password = "g211210071";

  if ($email == $correct_email && $password == $correct_password) {
    echo "Hoşgeldiniz g211210071";
    exit;
  }
  
  else {
    echo "E-mail veya şifreyi yanlış girdiniz. Lütfen tekrar deneyiniz. Giriş sayfasına yönlendiriliyorsunuz...";
    header("Refresh: 5; url=login.html");
    exit;
  }
?>