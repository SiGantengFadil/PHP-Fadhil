<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>document</title>
  </head>
  <body>
   
  <!--NAVBAR-->
<center>
    <div class="mt-4 mb-4">
<img src="/gambar.png" widht="200rem" alt="">
<div>
  <h3 class="mb-5 mt-3">PENGGAJIHAN
    <p>GURU/KARYAWAN YAYASAN ASSALAAM</p>
    </h3>
</div>
</center>
<!--AKHIR NAVBAR-->

<!--CONTENT-->
<div class="card mt-4 ml-4 mr-5">
  <div class="card-header">
    Data Penggajihan
  </div>
  <div class="card-body bg-secondarytext-light">
  <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">No</label>
    <input type="text" class="form-control" placeholder="No" name="no" id="exampleInputEmail1" aria-describedby="emailHelp" plq >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="">Unit Pendidikan</label><br>
    <select name="unit pendidikan" id="" class="form-control">
        <option selected disabled>Pilih Unit Pendidikan</option>
        <option value="tk">TK</option>
        <option value="sd">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMK">SMK</option>
   </select>
   </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Gaji</label>
    <input type="date" class="form-control" name="tanggal_gaji" id="exampleInputPassword1">
  </div>
   <div class="">
   <div class="col">
       <h4 class="font-italic">gaji</h4>
  </div>
  <div>
  <table>
  <div class="form-group">
    <label for="">Jabatan</label><br>
    <select name="jabatan" id="" class="form-control">
        <option selected disabled>Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="karyawan">Karyawan</option>
   </select>
   </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Lama Kerja</label>
    <input type="text" class="form-control" placeholder="lama kerja" name="lama_kerja" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="">Status Kerja</label><br>
    <select name="status kerja" id="" class="form-control">
        <option selected disabled>Pilih Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="kontrak">Kontrak</option>
   </select>
   </div>
   </div>
   <div class="">
   <div class="col">
       <h4 class="font-italic">Potongan</h4>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">BPJS</label>
    <input type="text" class="form-control" name="bpjs" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pinjaman</label>
    <input type="text" class="form-control" placeholder="pinjaman" name="pinjaman" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tabungan</label>
    <input type="text" class="form-control" placeholder="tabungan" name="tabungan" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lainnya</label>
    <input type="text" class="form-control" placeholder="Lainnya" name="Lainnya" id="exampleInputPassword1">
  </div>
  

  <button type="submit" class="btn btn-secondary" name="daftar">PROSES</button>
</form>
  </div>
</div>
<!--AKHIR CONTENT-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php


if(isset($_POST['daftar'])){

    $no= $_POST['no'];
    $nama= $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $gaji = $_POST['gaji'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bonus = $_POST['bonus'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
    $gaji_bersih = $_POST['gaji bersih'];



    class hasil{

        public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan,$lainya2,$gaji_bersih2){
          ?>
          <center>
          <div class="card text-white bg-success mb-5 mt-5" style="max-width: 40rem;">
            <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
            <div class="card-body text-light bg-secondary">
              <h5 class="card-title">Struk Gajih</h5>
              <table>
                <tr>
                  <td>No</td>
                  <td>:</td>
                  <td><?php echo $no2 ?></td>
                </tr>
                <tr>
                <td>Nama</td>
                  <td>:</td>
                  <td><?php echo $nama2 ?></td>
                </tr>
                <tr>
                <td>Unit Pendidikan </td>
                  <td>:</td>
                  <td><?php echo $unit_pendidikan2 ?></td>
                </tr>
                <tr>
                <td>Tanggal gaji </td>
                  <td>:</td>
                  <td><?php echo $tanggal_gaji2 ?></td>
                </tr>
                <tr>
                <td>Jabatan </td>
                  <td>:</td>
                  <td><?php echo $jabatan2 ?></td>
                </tr>
                <tr>
                <td>gaji</td>
                  <td>:</td>
                  <td><?php echo $gaji2 ?></td>
                </tr>
                <tr>
                <td>Lama Kerja </td>
                  <td>:</td>
                  <td><?php echo $lama_kerja2 ?></td>
                </tr>
                <tr>
                <td>Status Kerja</td>
                  <td>:</td>
                  <td><?php echo $status_kerja2 ?></td>
                </tr>
                <tr>
                <td>Bonus</td>
                  <td>:</td>
                  <td><?php echo $bonus2 ?></td>
                </tr>
                <tr>
                <td>bpjs</td>
                  <td>:</td>
                  <td><?php echo $bpjs2 ?></td>
                </tr>
                <tr>
                <td>Pinjaman</td>
                  <td>:</td>
                  <td><?php echo $pinjaman2 ?></td>
                </tr>
                <tr>
                <td>Tabungan</td>
                  <td>:</td>
                  <td><?php echo $tabungan ?></td>
                </tr>
                <tr>
                <td>lainya</td>
                  <td>:</td>
                  <td><?php echo $lainya2 ?></td>
                </tr>
                <tr>
                <td>gaji_bersih</td>
                  <td>:</td>
                  <td><?php echo $gaji_bersih2 ?></td>
                </tr>
                
              </table>
             
            </div>
            </div>
            </center>

            <?php
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);

}
if ($jabatan == "kepala sekolah") {
  $gaji =5000000;
}elseif($jabatan == "wakasek") {
  $gaji =4000000;
}elseif($jabatan == "guru") {
  $gaji =3000000;
}elseif($jabatan == "karyawan") {
  $gaji =2000000;
}else{
  $gaji =0;
}
if($status_kerja == "tetap"){
  $bonus = 1000000;
}else{
  $bonus =0;
}
$gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

