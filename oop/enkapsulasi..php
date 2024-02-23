<?php
//buat class
class manusia{

    //buat property/attribut
    public $nama = "asgar";

    //buat method / function
    private function tampilkan_nama(){
        echo "nama saya malasngoding<br/>";
    }
    public function keluarkan(){
         $this->tampilkan_nama();
    }
}

//buat object
$cetak = new manusia();
//manggila method
echo $cetak->keluarkan();
//manggila property
echo $cetak->nama;

?>