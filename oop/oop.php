<?php
//buat class
class manusia{

    //buat property/attribut
    public $nama = "asgar";
    public $nama2 = "azmoy";

    //buat method / function
    public function makan(){
        echo " $this->nama suka makan ayam";
    }
    public function minum(){
        echo " $this->nama2 suka minum power";
    }
}

//buat object
$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>