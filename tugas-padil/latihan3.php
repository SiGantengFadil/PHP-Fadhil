<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text' name='nama'></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type='date' name='tanggal_lahir'></td>
            </tr>
            <tr>
            <td>Jenis_kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="laki-laki">Laki-laki
                <input type="radio" name="jk" value="perempuan">Perempuan
            </td>
            </tr>
            <tr>
            <td>Biaya registrasi</td>
            <td>:</td>
            <td><input type='number' name='br'></td>
            </tr>
            <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TKRO">TKRO</option>
            <option value="TSM">TSM</option>
            </select>
            </tr>
            <tr>
            <td></td>
            <td></td>
           <td><input type ="submit" name = "simpan" value='KIRIM'></td>
    </table>
    </form>
</body>
</html>

<?php
if(isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    $Tanggal_Lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jk'];
    $Biaya_registrasi = $_POST['br'];
    $jurusan = $_POST['jurusan'];


    if ($jurusan == "RPL") {
        $bj = 2500000;
    } else   if ($jurusan == "TKRO") {
        $bj = 2000000;
    } else if ($jurusan == "TSM") {
        $bj = 3500000;    

    }

    $total = $Biaya_registrasi + $bj;

    echo "========= REGISTRASI ==========<br>";
    echo "Nama : $nama <br>";
    echo "tanggal_lahir : $Tanggal_Lahir <br>";
    echo "jenis_kelamin : $jenis_kelamin<br>";
    echo "biaya_registrasi : $Biaya_registrasi <br>";
    echo "jurusan : $jurusan <br>";
    echo "Biaya jurusan : $bj <br>";
    echo "Total Pembayaran : $total <br>";


}
?>
