<?php

session_start();
include('koneksi.php');
$email = $_POST['email'];
$password = $_POST['password'];
$query = $koneksi->query("SELECT * FROM tb_user WHERE email='$email'");
$data = mysqli_fetch_array($query);
if ($email === $data['email']) {
  if ($password === $data['password']) {
    $_SESSION['masuk'] = $data['email'];
    header("location:index.php?pesan=berhasil");
    exit();
  } else {
    header("location:login.php?pesan=passwordsalah");
    exit();
  }
} else {
  header("location:login.php?pesan=emailsalah");
  exit();
}
