<?php

function luasPersegi(){
 $sisi = 5;
 $luas = $sisi * $sisi;

    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Rumus : sisi x sisi<br>";
    echo "sisi : 5 <br>";
    echo "Luasnya : $luas";

}
function luasPersegiPanjang(){
    $panjang = 5;
    $lebar = 2;
    $luas = $panjang * $lebar;

    echo "<h2>Menghitung Luas Persegi Panjang</h2>";
    echo "Rumus : panjang x lebar<br>";
    echo "Panjang : 5 <br>";
    echo "Lebar : 4 <br>";
    echo "Luas : $luas <br>";
}
function segitiga(){
    $alas = 12;
    $tinggi = 10;
    $luas =  1/2 * $alas * $tinggi ;

    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo "Rumus :1/2 x alas x tinggi <br> ";
    echo "tinggi : 10 <br>";
    echo "alas : 12 <br>";
    echo "luasnya :$luas cm";

}
function lingkaran(){
    $r = 7;
    $pi = $r  * 22/7;

    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo "Rumus : pi x r x j <br>";
    echo "pi : 22/7 <br>";
    echo "r : 7 cm <br>";
    echo "Luasnya : $pi cm";



}

luasPersegi();
echo"<hr>";
luasPersegiPanjang();
echo"<hr>";
segitiga();
echo"<hr>";
lingkaran();

