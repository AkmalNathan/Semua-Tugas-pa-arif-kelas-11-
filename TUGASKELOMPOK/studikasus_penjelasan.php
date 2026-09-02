<!DOCTYPE html>
<!-- Menentukan bahwa dokumen ini menggunakan standar HTML5 -->

<html lang="id">
<!-- Tag <html> adalah tag utama yang membungkus seluruh dokumen HTML.
     lang="id" menunjukkan bahwa bahasa yang digunakan adalah Bahasa Indonesia. -->

<head>
    <!-- Tag <head> berisi informasi tentang halaman yang tidak langsung ditampilkan di halaman -->

    <meta charset="UTF-8">
    <!-- Menentukan karakter yang digunakan oleh halaman.
         UTF-8 digunakan agar huruf, angka, dan simbol dapat ditampilkan dengan benar. -->

    <title>Studi Kasus 1 - Sistem Kasir Mini</title>
    <!-- Tag <title> menentukan judul halaman yang ditampilkan pada tab browser -->

    <style>
        /* Tag <style> digunakan untuk menuliskan kode CSS
           yang mengatur tampilan halaman HTML */

        table {
            /* Selector table digunakan untuk mengatur semua tabel */

            width: 100%;
            /* Membuat lebar tabel menjadi 100% dari lebar halaman */

            border-collapse: collapse;
            /* Menggabungkan garis antar-cell tabel agar terlihat menjadi satu garis */

            margin-top: 10px;
            /* Memberikan jarak 10 pixel pada bagian atas tabel */
        }

        th, td {
            /* th digunakan untuk cell judul tabel.
               td digunakan untuk cell data tabel. */

            border: 1px solid #cbd5e1;
            /* Memberikan garis tepi dengan ketebalan 1 pixel */

            padding: 8px 12px;
            /* Memberikan jarak antara isi cell dengan garis cell */
        }

        th {
            /* Selector th digunakan untuk mengatur judul kolom tabel */

            background-color: #0f172a;
            /* Memberikan warna latar belakang pada judul tabel */

            color: white;
            /* Membuat tulisan pada judul tabel berwarna putih */

            text-align: left;
            /* Membuat tulisan pada judul tabel rata kiri */
        }

        .total-row {
            /* Selector .total-row digunakan untuk mengatur
               elemen HTML yang memiliki class="total-row" */

            background-color: #e2e8f0;
            /* Memberikan warna latar belakang pada baris total */

            font-weight: bold;
            /* Membuat tulisan pada baris total menjadi tebal */
        }
    </style>
    <!-- Menutup tag <style> -->
</head>
<!-- Menutup bagian <head> -->


<body>
<!-- Tag <body> berisi seluruh isi halaman yang akan ditampilkan di browser -->

    <h2>Sistem Kasir Mini - SMK Mart</h2>
    <!-- Tag <h2> digunakan untuk membuat judul dengan ukuran heading tingkat 2 -->


    <?php
    // <?php digunakan untuk membuka kode PHP.
    // Kode PHP di dalam bagian ini akan diproses oleh server.

    // Array multidimensi 10 produk
    // Komentar ini menjelaskan bahwa variabel $produk
    // digunakan untuk menyimpan beberapa data produk.

    $produk = [
        // $produk adalah nama variabel yang digunakan
        // untuk menyimpan kumpulan data produk.

        // Setiap data produk berbentuk array asosiatif.
        // "nama" adalah key untuk menyimpan nama produk.
        // "harga" adalah key untuk menyimpan harga produk.

        ["nama" => "Beras Setra Ramos 5 Kg", "harga" => 74500],
        // Data produk pertama:
        // nama  = Beras Setra Ramos 5 Kg
        // harga = 74500

        ["nama" => "Minyak Goreng Bimoli 2L", "harga" => 35000],
        // Data produk kedua:
        // nama  = Minyak Goreng Bimoli 2L
        // harga = 35000

        ["nama" => "Gula Pasir Gulaku 1 Kg", "harga" => 17500],
        // Data produk ketiga:
        // nama  = Gula Pasir Gulaku 1 Kg
        // harga = 17500

        ["nama" => "Teh Celup Sosro Box", "harga" => 11000],
        // Data produk keempat:
        // nama  = Teh Celup Sosro Box
        // harga = 11000

        ["nama" => "Kopi Kapal Api Spesial", "harga" => 14500],
        // Data produk kelima:
        // nama  = Kopi Kapal Api Spesial
        // harga = 14500

        ["nama" => "Indomie Goreng Special", "harga" => 3100],
        // Data produk keenam:
        // nama  = Indomie Goreng Special
        // harga = 3100

        ["nama" => "Susu Kental Manis Indomilk", "harga" => 12500],
        // Data produk ketujuh:
        // nama  = Susu Kental Manis Indomilk
        // harga = 12500

        ["nama" => "Sabun Mandi Lifebuoy", "harga" => 4500],
        // Data produk kedelapan:
        // nama  = Sabun Mandi Lifebuoy
        // harga = 4500

        ["nama" => "Shampo Clear Men 160ml", "harga" => 24000],
        // Data produk kesembilan:
        // nama  = Shampo Clear Men 160ml
        // harga = 24000

        ["nama" => "Pasta Gigi Pepsodent", "harga" => 13500]
        // Data produk kesepuluh:
        // nama  = Pasta Gigi Pepsodent
        // harga = 13500
    ];
    // Tanda ]; menutup array $produk.
    // Tanda ; menunjukkan akhir dari perintah PHP.

    ?>
    <!-- ?> digunakan untuk menutup kode PHP -->


    <table>
    <!-- Tag <table> digunakan untuk membuat tabel -->


        <tr>
        <!-- Tag <tr> digunakan untuk membuat satu baris pada tabel -->

            <th style="width: 10%;">No</th>
            <!-- Tag <th> digunakan untuk membuat judul kolom.
                 style="width: 10%" membuat lebar kolom sebesar 10%.
                 Kolom ini digunakan untuk nomor produk. -->


            <th>Nama Produk</th>
            <!-- Kolom ini digunakan untuk menampilkan nama produk -->


            <th style="width: 25%;">Harga Satuan (Rp)</th>
            <!-- Kolom ini digunakan untuk menampilkan harga satuan produk.
                 Lebar kolom ditentukan sebesar 25%. -->

        </tr>
        <!-- Menutup baris judul tabel -->


        <?php
        // Membuka kembali kode PHP untuk melakukan proses data.


        $no = 1;
        // Variabel $no digunakan sebagai nomor urut produk.
        // Nilai awalnya adalah 1.


        $total_harga = 0;
        // Variabel $total_harga digunakan untuk menyimpan
        // jumlah seluruh harga produk.
        // Nilai awalnya adalah 0 karena belum ada harga yang dijumlahkan.


        foreach ($produk as $item) {
        // foreach digunakan untuk melakukan perulangan pada array $produk.
        //
        // $produk = array yang berisi seluruh data produk.
        //
        // $item = variabel sementara yang menyimpan satu data produk
        // pada setiap proses perulangan.
        //
        // Jadi setiap perulangan akan mengambil satu produk.


            echo "<tr>";
            // echo digunakan untuk menampilkan kode HTML ke browser.
            // <tr> digunakan untuk membuka baris tabel baru.


            echo "<td style='text-align:center;'>" . $no++ . "</td>";
            // <td> digunakan untuk membuat cell data tabel.
            //
            // style='text-align:center;'
            // digunakan untuk membuat nomor berada di tengah.
            //
            // $no digunakan untuk mengambil nomor urut.
            //
            // $no++ berarti nilai $no digunakan terlebih dahulu,
            // kemudian nilainya ditambah 1.
            //
            // Contoh:
            // Perulangan pertama = 1
            // Perulangan kedua  = 2
            // Perulangan ketiga = 3


            echo "<td>" . $item['nama'] . "</td>";
            // Menampilkan nama produk.
            //
            // $item adalah data produk yang sedang diproses.
            //
            // ['nama'] digunakan untuk mengambil nilai dari key "nama".
            //
            // Contoh:
            // $item['nama'] menghasilkan
            // "Beras Setra Ramos 5 Kg"


            echo "<td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>";
            // Menampilkan harga produk.
            //
            // $item['harga'] digunakan untuk mengambil harga produk.
            //
            // number_format() digunakan untuk mengubah format angka
            // agar lebih mudah dibaca.
            //
            // Angka 74500 akan ditampilkan menjadi 74.500.
            //
            // Parameter:
            // $item['harga'] = angka yang akan diformat
            // 0 = jumlah angka di belakang koma
            // ',' = simbol pemisah desimal
            // '.' = simbol pemisah ribuan


            echo "</tr>";
            // Menutup baris tabel yang sebelumnya dibuka dengan <tr>.


            // Akumulasi total
            // Komentar ini menjelaskan proses penjumlahan seluruh harga.

            $total_harga += $item['harga'];
            // Menambahkan harga produk yang sedang diproses
            // ke dalam variabel $total_harga.
            //
            // Operator += berarti:
            // $total_harga = $total_harga + $item['harga'];
            //
            // Contoh:
            // $total_harga = 74500
            // kemudian ditambah 35000
            // menjadi 109500.
        }
        // Menutup perulangan foreach.

        ?>
        <!-- Menutup kode PHP -->


        <tr class="total-row">
        <!-- Membuat baris baru untuk menampilkan total pembelian.
             class="total-row" menghubungkan baris ini dengan CSS
             .total-row yang sudah dibuat di bagian <style>. -->


            <td colspan="2" style="text-align: right;">
                TOTAL PEMBELIAN:
            </td>
            <!-- colspan="2" berarti cell ini menggabungkan 2 kolom.
                 style="text-align: right" membuat tulisan rata kanan. -->


            <td>
                Rp
                <?php
                // Membuka kode PHP untuk menampilkan total harga.

                echo number_format($total_harga, 0, ',', '.');
                // echo digunakan untuk menampilkan hasil ke halaman.
                //
                // $total_harga berisi jumlah seluruh harga produk.
                //
                // number_format() digunakan untuk membuat format angka
                // menjadi format Indonesia.
                //
                // Contoh:
                // 215600 akan ditampilkan menjadi 215.600.
                ?>
            </td>
            <!-- Menutup cell harga total -->

        </tr>
        <!-- Menutup baris total -->

    </table>
    <!-- Menutup tabel -->


</body>
<!-- Menutup bagian body -->

</html>
<!-- Menutup dokumen HTML -->

<?php
// Membuka kembali kode PHP untuk program data siswa.

// Membuat array multidimensi bernama $data_siswa.
// Array ini berisi nama siswa dan nilai mereka.
$data_siswa = [

    // Setiap data siswa memiliki dua bagian:
    // "nama"  = nama siswa
    // "nilai" = nilai siswa
    ["nama" => "Ahmad Fauzi",     "nilai" => 85],

    ["nama" => "Bunga Lestari",   "nilai" => 70],

    ["nama" => "Chandra Wijaya",  "nilai" => 92],

    ["nama" => "Dewi Sartika",    "nilai" => 78],

    ["nama" => "Eko Prasetyo",    "nilai" => 65],

    ["nama" => "Fathur Rahman",   "nilai" => 88],

    ["nama" => "Gita Permata",    "nilai" => 74],

    ["nama" => "Hadi Saputra",    "nilai" => 80],

    ["nama" => "Indah Kusuma",    "nilai" => 95],

    ["nama" => "Joko Susilo",     "nilai" => 60]
];

// Menampilkan judul laporan.
// echo digunakan untuk mencetak tulisan ke halaman.
echo "<h3>Laporan Evaluasi Hasil Belajar Siswa (KKM = 75)</h3>";


// Membuat tabel menggunakan HTML yang dicetak melalui PHP.
echo "<table border='1' cellpadding='8' style='border-collapse: collapse; width: 100%;'>";

// Membuat baris kepala tabel.
echo "<tr style='background:#1e293b; color:white;'>";

// Membuat kolom No.
echo "<th>No</th>";

// Membuat kolom Nama Siswa.
echo "<th>Nama Siswa</th>";

// Membuat kolom Nilai Akhir.
echo "<th>Nilai Akhir</th>";

// Membuat kolom Status Kelulusan.
echo "<th>Status Kelulusan</th>";

// Menutup baris kepala tabel.
echo "</tr>";


// Variabel $no digunakan sebagai nomor urut siswa.
// Nomor dimulai dari 1.
$no = 1;


// Mengulang seluruh data siswa satu per satu.
// $siswa berisi data satu siswa pada setiap perulangan.
foreach ($data_siswa as $siswa) {

    // Mengecek apakah nilai siswa lebih besar atau sama dengan 75.
    //
    // >= berarti "lebih besar atau sama dengan".
    //
    // Jika nilai >= 75, siswa dinyatakan LULUS.
    if ($siswa['nilai'] >= 75) {

        // Menyimpan tulisan LULUS ke variabel $status.
        //
        // <span> digunakan untuk memberikan style pada teks tertentu.
        // color digunakan untuk memberikan warna hijau.
        // font-weight:bold membuat tulisan menjadi tebal.
        $status = "<span style='color:#059669; font-weight:bold;'>LULUS</span>";

    } else {

        // Jika nilai kurang dari 75,
        // siswa dinyatakan REMEDIAL.
        $status = "<span style='color:#dc2626; font-weight:bold;'>REMEDIAL</span>";
    }


    // Membuat baris tabel baru.
    echo "<tr>";

    // Menampilkan nomor siswa.
    // $no++ berarti nomor bertambah satu setelah ditampilkan.
    echo "<td align='center'>" . $no++ . "</td>";

    // Menampilkan nama siswa.
    // $siswa['nama'] mengambil nilai dari bagian "nama".
    echo "<td>" . $siswa['nama'] . "</td>";

    // Menampilkan nilai siswa.
    // <strong> digunakan untuk membuat nilai menjadi tebal.
    echo "<td align='center'><strong>" . $siswa['nilai'] . "</strong></td>";

    // Menampilkan status LULUS atau REMEDIAL.
    echo "<td>" . $status . "</td>";

    // Menutup baris tabel.
    echo "</tr>";
}

// Menutup tabel.
echo "</table>";

?>


<?php

// Menampilkan judul generator tiket.
echo "<h3>Generator Kode Tiket Bioskop Studio 1 (A001 - A100)</h3>";


// Membuat sebuah <div> sebagai wadah seluruh kode tiket.
//
// display:flex
// = membuat elemen di dalamnya menggunakan sistem Flexbox.
//
// flex-wrap:wrap
// = jika ruang tidak cukup, tiket akan turun ke baris berikutnya.
//
// gap:5px
// = memberikan jarak 5px antar tiket.
echo "<div style='display:flex; flex-wrap:wrap; gap:5px;'>";


// Perulangan for digunakan untuk membuat nomor tiket dari 1 sampai 100.
//
// $i = 1
// = nilai awal perulangan adalah 1.
//
// $i <= 100
// = perulangan berjalan selama $i kurang dari atau sama dengan 100.
//
// $i++
// = setiap perulangan nilai $i bertambah 1.
for ($i = 1; $i <= 100; $i++) {

    // Membuat nomor tiket dengan format:
    //
    // 1   menjadi A001
    // 2   menjadi A002
    // 10  menjadi A010
    // 100 menjadi A100
    //
    // "A" adalah huruf awal kode tiket.
    //
    // str_pad() digunakan untuk menambahkan angka 0
    // di sebelah kiri angka sampai panjangnya menjadi 3 karakter.
    //
    // Parameter:
    // $i
    // = angka yang sedang diproses.
    //
    // 3
    // = panjang karakter yang diinginkan.
    //
    // "0"
    // = karakter yang digunakan untuk mengisi kekurangan.
    //
    // STR_PAD_LEFT
    // = penambahan dilakukan dari sebelah kiri.
    $nomor_tiket = "A" . str_pad($i, 3, "0", STR_PAD_LEFT);


    // Membuat elemen <span> untuk setiap tiket.
    //
    // background:#1e40af
    // = memberikan warna latar belakang biru.
    //
    // color:white
    // = membuat tulisan berwarna putih.
    //
    // padding:4px 8px
    // = memberikan jarak bagian dalam.
    //
    // border-radius:4px
    // = membuat sudut kotak sedikit melengkung.
    //
    // font-size:11px
    // = menentukan ukuran tulisan.
    echo "<span style='background:#1e40af; color:white; padding:4px 8px; border-radius:4px; font-size:11px;'>";


    // Menampilkan kode tiket yang sudah dibuat.
    echo $nomor_tiket;


    // Menutup tag <span>.
    echo "</span>";
}


// Menutup <div> yang menjadi wadah seluruh tiket.
echo "</div>";

?>