<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form>
<div>
    <label>Nama</label><br>
    <input name="nama" type="text" placeholder="Masukan Nama">
</div>
<div>
    <label>alamat</label> <br>
    <input name="alamat" type="text" placeholder="Masukan alamat">
</div>
<div>
    <button>submit</button>
  </div>
  </form>

<?php
$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];
if ($nama) {
    echo "<strong>nama:</strong> {$nama} <br>";
}

if ($alamat) {
    echo "<strong>alamat:</strong> {$alamat} <br>";
}
?>

<form method="POST">
    <div>
        <label>Email</label> <br>
        <input name="email" type="email" placeholder="Masukkan email">
    </div>
    <div>
        <label>Kata Sandi</label> <br>
        <input name="password" type="password" placeholder="Masukkan kata sandi">
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
<?php # membuka tag PHP

$email = @$_POST['email'];
$password = @$_POST['password'];

# jangan lupa tutup tag PHP
if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
}

if ($password) {
    echo "<strong>Kata Sandi:</strong> {$password} <br>";
}
?>

<form method="POST" action="proses_login.php">
    <div>
        <label>Email</label> <br>
        <input name="email" type="email" placeholder="Masukkan email">
    </div>
    <div>
        <label>Kata Sandi</label> <br>
        <input name="password" type="password" placeholder="Masukkan kata sandi">
    </div>
    <div>
        <button>Login</button>
    </div>
</form>


</body>
</html>