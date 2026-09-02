
<?php
// 1. DATABASE SEMENTARA (Array 1 Dimensi)
$voucherAktif = ["MERDEKA99", "RPLJUARA", "DISKON50","NATHAN22"];
$pesan = "";
$warna = "";

if (isset($_POST['cek_voucher'])) {

// MENERIMA INPUT DARI FORM HTML
$inputUser = strtoupper($_POST['kode_input']);

// VARIABEL BENDERA (Boolean Flag)
$ketemu = false;

// 2. LOOPING: Pencarian Linear
foreach ($voucherAktif as $voucher) { if ($inputUser == $voucher) {
$ketemu = true; // Voucher ditemukan!
break;
}
}

// 3. BRANCHING: Keputusan akhir 
if ($ketemu == true && $voucher != "NATHAN22" ) {
     $pesan = "hore kode voucer valid!";
     $warna = "blue";
} elseif ($ketemu == true && $voucher =="NATHAN22" ){
    $pesan = "Selamat anda mendapatkan diskon super special";
    $warna = "orange";
}else {
$pesan = "Maaf, kode voucher tidak ditemukan.";
$warna = "red";
}




}
?>

<!DOCTYPE html>
<html>
<head>
<title>Promo Web</title>
<style>
    body {
            font-family: sans-serif;
            text-align: center;
            padding: 50px
        }

        .kotak {
            background-color: white;
            width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            border : 1px solid black;
        }

        input {
            padding: 10px;
           
        }

        button {
            padding: 10px;
            background: green;
            color: white;
            border: none;
        }

</style>
</head>
<body>
    <div class="kotak">
<h2>Masukkan Kode Promo</h2>
<form method="POST">
<input type="text" name="kode_input" required>
<button type="submit" name="cek_voucher">Cek Voucher</button>
</form>
<h3 style="color: <?php echo $warna; ?>;"><?php echo $pesan; ?></h3>
</div>
</body>
</html>
