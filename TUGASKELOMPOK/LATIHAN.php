<!DOCTYPE html>
<html lang="en">
<head>
  <title>LATIHAN DOANG</title>
</head>
<body>
    <h2>LATIHAN PHP</h2>

    <form method="post">
        <label>Masukan Nama anda</label><br>
        <input type="text" name="nama" required><br>
        <br><br>

        <!-- <br> untuk kasih jarak  -->
         

        <label>Masukan Nilai</label><br>
        <input type="number" name="nilai"required>
        <input type="submit" nama="cek hasil"> <br>
    </form>

    <?php

    if(isset($_POST["nilai"])){
        $nilai=$_POST ["nilai"];
        $nama = $_POST ["nama"];

        if ($nilai >= 90) {
            $hasil = "Sangat baik";
        } elseif ($nilai >= 75 ){
            $hasil = "lulus";
        } elseif ($nilai >= 60) {
            $hasil = "Remedial";
        } elseif ($nilai > 50) {
            $hasil = "Tidak lulus";
         } else 
            $hasil = "Harus diperbaiki";

        echo "<h3>Hasil Nilai Siswa</h3>";
        echo "Nama Peserta: <b>$nama</b><br>";
        echo "Nilai Ujian: <b>$hasil</b><br>";
    }
    ?>
    
    
</body>
</html>