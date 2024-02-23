<?php
$nama = @$_REQUEST['nama'];
$jk = @$_REQUEST['Jenis_kelamin'];
$tl = @$_REQUEST['tgl_lahir'];
$kategori = @$_REQUEST['kategori'];
$kelas = @$_REQUEST['kelas'];
$kemampuan = @$_REQUEST['kemampuan'];
$metode = @$_REQUEST['pembayaran'];
$diskon = 0;

if ($kategori == "Sepak Bola") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 200000;
        } elseif ($kelas == "Menengah") {
            $harga += 250000;
        } elseif ($kelas == "Lanjutan") {
            $harga += 300000;
        }
} else if ($kategori == "Bulu Tangkis") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 150000;
            if ($jk == "wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "Menengah") {
            $harga += 200000;
            if ($jk == "wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "Lanjutan") {
            $harga += 250000;
            if ($jk == "wanita") {
                $diskon += $harga * 0.1;
            }
        }
} else if ($kategori == "Renang") {
    $harga = 0;
        if ($kelas == "Pemula") {
            $harga += 180000;
        } elseif ($kelas == "Menengah") {
            $harga += 220000;
        } elseif ($kelas == "Lanjutan") {
            $harga += 270000;
        }
}

$total = $harga - $diskon;

if ($total > 500000) {
    $tampil = "Selamat Anda Mendapatkan Merchandise Gratiss!!";
} else {
    $tampil = "Mohon maaf total pembelian anda kurang dari Rp 500.000, Anda tidak Mendapatkan Merchandise Gratis dari kami";
}
echo "<center>";
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "jenis Kelamin : $jk<br>";
echo "tgl_Lahir : $tl<br>";
echo "kategori : $kategori<br>";
echo "Kelas : $kelas <br>";
echo "kemampuan Fisik : $kemampuan<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $tampil;
echo "</center>";

?>