<form action="proses-olahraga.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div> <br>
    <label>Jenis kelamin</label> <br>
    <select name="Jenis_kelamin">
        <option value="pria">pria</option>
        <option value="wanita">wanita</option>
    </select>
    </div>
    <div><br>
        <label>Tanggal lahir</label> <br>
        <input type="date" name="tgl_lahir">
    </div>
    <div><br>
        <label>Pilihan Kategori Olahraga</label><br>
        <input type="radio" name="kategori" value="Sepak Bola">Sepak Bola<br>
        <input type="radio" name="kategori" value="Bulu Tangkis">Bulu Tangkis<br>
        <input type="radio" name="kategori" value="Renang">Renang<br>
    </div>
    <div><br>
        <label>Pilihan Kelas</label><br>
        <input type="checkbox" name="kelas" value="Pemula">Pemula<br>
        <input type="Checkbox" name="kelas" value="Menengah">Menengah<br>
        <input type="Checkbox" name="kelas" value="Lanjutan">Lanjutan<br>
    </div>
    <div><br>
        <label>kemampuan fisik</label><br>
        <textarea name="kemampuan" id="" colse="21" rows="3"></textarea>
    </div>
    <div><br>
        <label>Metode Pembayaran</label> <br>
        <select name="pembayaran">
         <option selected disabled></option>
         <option value="Transfer Bank">Transfer Bank</option>
         <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
        </div><br>
        <button>KIRIM</button>
        </div>
         
</form>
