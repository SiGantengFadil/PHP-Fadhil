<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'fadil@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'fadil') {
  die("Password salah!");
}

# jika lolos alias email dan password nya benar
echo "Selamat {$email}, anda berhasil login! :)";
