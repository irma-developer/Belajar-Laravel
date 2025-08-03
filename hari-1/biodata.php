<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-s-m">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Profil Mahasiswa</h4>
            </div>
            <div class="card-body">
                <?php
                $nama = "Irma";
                $umur = "19";
                $kota = "Bogor";
                $makanan_favorit = ["Seblak", "Bakso", "Mie Ayam"];
                ?>
                <p><strong>Nama:</strong><?= $nama; ?></p>
                <p><strong>Umur:</strong><?= $umur; ?></p>
                <p><strong>Kota Asal:</strong><?= $kota; ?></p>
                <p><strong>Makanan Favorit</strong></p>
                <ul class="list-group">
                    <?php foreach ($makanan_favorit as $makanan):?>
                    <li class="list-group-item"><?= $makanan; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Optional JS for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>