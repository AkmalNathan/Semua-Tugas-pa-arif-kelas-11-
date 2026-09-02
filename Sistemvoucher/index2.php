
<?php
// DATABASE VOUCHER VERSI 2.0
$voucherDb = [ 
[
    "kode" => "RPLJUARA",
    "potongan" => 50000,
    "min_belanja" => 150000,
    "kuota" => 10
], 
[
    "kode" => "HEMATTERUS",
    "potongan" => 20000,
    "min_belanja" => 50000,
    "kuota" => 0// <-- Perhatikan, kuota habis!
], 
[
    "kode" => "KILAT",
    "potongan" => 10000,
    "min_belanja" => 20000,
    "kuota" => 50
]
];
$pesan = "";
$kode = "";
$totalbayarakhir = 0;

if (isset($_POST["cek"])) {
$inputuser = strtoupper($_POST["kode_voucher"]);
$inputnominal = ($_POST["nominal"]);

$ketemu = false;

 foreach ($voucherDb as $voucher ) {

        if ($inputuser == $voucher["kode"]) {

            $ketemu = true;
            $kode = "kode valid";

            // JIKA KUOTA HABIS
            if ($voucher["kuota"] <= 0) {

                $pesan = "tetapi sisa voucher kuota habis";

            } else {

                // JIKA KUOTA MASIH ADA
                if ($inputnominal < $voucher["min_belanja"]) {

                    $pesan = "Minimal Belanja Tidak Terpenuhi";

                } else {

                    $pesan = "Minimal Belanja Terpenuhi dan Voucher Bisa Di Gunakan";

                    $totalbayarakhir = $inputnominal - $voucher["potongan"];

                    if ($totalbayarakhir < 0) {
                       $totalbayarakhir = 0;
                    }
                }
            }

            break;
        }
    }

    // JIKA KODE TIDAK DITEMUKAN
    if ($ketemu == false) {
        $kode = "kode tidak valid";
    }
}


?>

<!DOCTYPE html>
<head>
    <title>SISTEM PROMO 2.0</title>
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
            text-transform: uppercase;
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
    <div class = "kotak">
    <h2>Masukan Kode PROMO</h2>
    <form method="POST">
    <input type="text" name="kode_voucher" required><br><br>
    <h2>Nominal Belanja</h2>
    <input type="number" name="nominal" required><br><br>
    <button type="submit" name="cek"> Cek Voucher </button>
</form>
 <h3> 
        <?php echo $kode; ?><br>
        <?php echo $pesan; ?>
        <br>
        <?php
        if ($totalbayarakhir > 0) {
            echo "Total bayar: Rp " . $totalbayarakhir;
        }
        ?>
    </h3>
</div>
</body>
</html>

