<?php
class bangun_datar{

    public $nama1 = "Menghitung Luaspersegi";
    public $nama2 = "Menghitung Luaspersegi panjang";
    public $nama3 = " Menghitung Luassegitiga";
    public $nama4 = "Menghitung Luaslingkaran";

    public function luaspersegi(){
        echo "$this->nama1";
        echo "rumus : sisi x sisi <br>";
        $sisi = 5;
        $hasil =$sisi * $sisi;
        echo "sisi : $sisi <br>";
        echo "luasnya :$hasil <br>";
    }
    
    public function luaspersegiPanjang(){
        echo "$this->nama2";
        echo "rumus : panjang x lebar <br>";
        $panjang = 5;
        $lebar = 10;
        $hasil =$panjang * $lebar;
        echo "panjang: $panjang <br>";
        echo "lebar :$lebar <br>";
        echo "hasilnya :$hasil <br>";
    
    }

    public function segitiga(){
        echo "$this->nama3";
        echo "rumus : alas x tinggi x 1/2(setengah) <br>";
        $alas = 5;
        $tinggi = 10;
        $hasil =$alas * $tinggi * 0.5;
        echo "alas: $alas <br>";
        echo "tinggi :$tinggi <br>";
        echo "hasilnya :$hasil <br>";
    }

    public function lingkaran(){
        echo "$this->nama4";
        echo "rumus : r x r <br>";
        $r = 5;
        $hasil = $r * $r * 3.14;
        echo "jari-jari: $r <br>";
        echo "hasilnya :$hasil <br>";
    }

}


    
    

$cetak = new bangun_datar();

echo $cetak->luasPersegi();
echo "<br>";
echo $cetak->luasPersegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();
echo "<br>";



?>