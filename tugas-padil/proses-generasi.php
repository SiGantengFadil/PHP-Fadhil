<?php
    $nama=$_REQUEST["nama"];
    $tahun=$_REQUEST["tahun"];

if ($tahun >= 1994 && $tahun <= 1964){
    $generasi = "Baby boomer";
    echo "$nama, anda termasuk golongan $generasi";
} else if ($tahun >= 1965 && $tahun <= 1979) {
    $generasi = "Generasi X";
    echo "$nama, anda termasuk golongan $generasi";
} else if ($tahun >= 1980 && $tahun <= 1994) {
    $generasi = "Gnerasi Y (Milenial)";
    echo "$nama, anda termasuk golongan $generasi";
} else if ($tahun >= 1995 && $tahun <= 2015) {
    $generasi = "Generasi Z";
    echo "$nama, anda termasuk golongan $generasi";
} else {
    echo "$nama, tahun lahir anda tidak terdeteksi";
}
 ?>