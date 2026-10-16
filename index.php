
<?php
$namaProyek = "Sistem Informasi Peminjaman dan Pengembalian Alat";
$namaAlat = "Multimeter";
$stokTotal = 5;
$sedangDipinjam = 2;

$stokTersedia = $stokTotal - $sedangDipinjam;

if ($stokTersedia > 0) {
    $status = "Tersedia";
} else {
    $status = "Tidak tersedia";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPPA - Sistem Peminjaman Alat</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #00000015;
        }

        h1 {
            color: #1d4ed8;
        }

        .alat {
            background: #eff6ff;
            padding: 18px;
            border-radius: 8px;
        }

        .status {
            color: #15803d;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>SIPPA</h1>

        <h2><?= htmlspecialchars($namaProyek) ?></h2>

        <p>
            Aplikasi untuk membantu pencatatan peminjaman
            dan pengembalian alat.
        </p>

        <hr>

        <h3>Contoh Data Alat</h3>

        <div class="alat">
            <p>Nama alat: <?= htmlspecialchars($namaAlat) ?></p>
            <p>Stok total: <?= $stokTotal ?></p>
            <p>Sedang dipinjam: <?= $sedangDipinjam ?></p>
            <p>Stok tersedia: <?= $stokTersedia ?></p>
            <p>Status: <span class="status"><?= $status ?></span></p>
        </div>
    </div>
</body>
</html>
