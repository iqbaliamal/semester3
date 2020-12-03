<?php

session_start();
include('koneksi.php');
$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "iqbaliamal@gmail.com";
$password_saya = "123123";
if ((strcasecmp($email_saya, $email) == 0) && ($password_saya == $password)) {
  $_SESSION['email'] = $email;
  header("location: index.php?pesan=berhasil");
} else {
  header("location: login.php?pesan=gagal");
}
