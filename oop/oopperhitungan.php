<?php
class bangun_datar{

    public $persegi = " persegi";
    public $persegi_panjnag = " persegi panjang";
    public $segitiga = " segitiga";
    public $lingkaran = " lingkaran";

    public function luaspersegi(){
        $sisi =5;
        $luas =4 * $sisi;

        echo "<h2> menghitung luas persegi $this->persegi</h2>";
        echo "rumus : sisi x sisi <br>";
        echo "sisi : 5 <br>";
        echo "luasnya : $luas";

    }
    public function luaspersegipanjang(){
        $panjang =5;
        $lebar =4;
        $luas = $panjang * $lebar;

        echo "<h2> menghitung luas persegi $this->persegi </h2>";
        echo "rumus : panjang x lebar<br>";
        echo "panjang : 5 <br>";
        echo "lebar : 4 <br>";
        echo "luasnya : $luas <br>";

    }
    public function segitiga(){
        $alas =12;
        $tinggi =10;
        $luas = 1/2 * $tinggi * $alas ;

        echo "<h2> menghitung luas persegi $this->segitiga</h2>";
        echo "rumus : 1/2 x alas x tinggi <br>";
        echo "tinggi : 10 <br>";
        echo "alas : 12 <br>";
        echo "luasnya : $luas <br>";
    }
    public function lingkaran(){
        $r =7;
        $p = $r * $r * 22/7;

        echo "<h2> menghitung luas persegi $this->lingkaran</h2>";
        echo "rumus : p x r x r <br>";
        echo "p : 22/7 <br>";
        echo "r :7 cm <br>";
        echo "luasnya : $p <br>";
    }
}
$cetak = new bangun_datar();

echo $cetak->luaspersegi();
echo "<br>";
echo $cetak->luaspersegipanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();
echo "<br>";


