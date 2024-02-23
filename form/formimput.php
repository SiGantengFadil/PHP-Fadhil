<!DOCTYPE html>
<html>
<head>
 <title>Form Biodata diri</title>
</head>
 <body>
   <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                    </tr>
                    <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tl'></td>
                    </tr>
                    <td>jenis_kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='jk'>Laki-laki
                        <input type='radio' name='jk'>Perempuan
                    </td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="10" rows="7"></textarea></td>
                    </tr>
                    <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            
                            <option value="Agama">Agama</option>
                            <option value="slam">Islam</option>
                            <option value="kristen">kristen</option>
                            <option value="hindu">hindu</option>
                     </select>
</td>
                    </tr>
                    <tr>
                    <td>Pendidikan_Terakhir</td>
                    <td>:</td>
                    <td>
                    <select name="pt" id="">
                            <option value="Pendididkan_terakhir"> Pendidikan Terakhir</option>
                            <option value="S3">S3</option>
                            <option value="S2">S2</option>
                            <option value="S1">S1</option>
                            <option value="Sma">Sma</option>
                            <option value="Smp">Smp</option>
                            <option value="SD">SD</option>
                            <option value="Tk">Tk</option>
                     </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input  type="radio" name="status" value= "Sudah Nikah">Sudah Nikah
                    <td><input  type="radio" name="status" value= "Belum Kawin">Belum Kawin
                    
                </td>
                    </tr>
                    <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type='text' name='hobi'></td>
                    </tr>
                    <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><input type='text' name='cc'></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td><input type ="submit" name = "simpan" value='KIRIM'></td>
                 </tr>
             </table>
         </form>
         </center>
     </body>
</html>

<?php
if(isset ($_POST['simpan'])){
    $A = $_POST['nama'];
    $B = $_POST['tl'];
    $C = $_POST['jk'];
    $D = $_POST['alamat'];
    $E = $_POST['agama'];
    $F = $_POST['pt'];
    $G = $_POST['status'];
    $H = $_POST['hobi'];
    $I = $_POST['cc'];

    echo "========= Biodata Diri ==========<br>";
    echo "=================================<br>";
    echo "nama = $A <br>";
    echo "Tagal Lahir = $B <br>";
    echo "Jenis_kelamin = $C <br>";
    echo "Alamat = $D <br>";
    echo "Agama = $E <br>";
    echo "Pendidikan_terakhir = $F <br>";
    echo "Status = $G <br>";
    echo "Hobi = $H <br>";
    echo "Cita-Cita = $I <br>";



}
