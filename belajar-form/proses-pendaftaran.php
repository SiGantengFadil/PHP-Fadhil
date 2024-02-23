<pre>
    <?php
    $a = @$_REQUEST['nama'];
    $b = @$_REQUEST['email'];
    $c = @$_REQUEST['usia'];
    $d = @$_REQUEST['tanggal_lahir'];
    $e = @$_REQUEST['alamat'];
    $f = @$_REQUEST['jenis_kelamin'];
    $g = @$_REQUEST['status'];
    $h = @$_REQUEST['hobi'];

    echo "nama           = $a <br>";
    echo "email          = $b <br>";
    echo "usia           = $c <br>";
    echo "tanggal lahir  = $d <br>";
    echo "alamat         = $e <br>";
    echo "jenis kelamin  = $f <br>";
    echo "status         = $g <br>";
    echo "hobi           = $h <br>";
    ?>
</pre>