<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h4>Hasil Penilaian</h4>
            </div>
            <div class="card-body">
                <?php
                $nama = $_POST['nama'];
                $nilai = $_POST['nilai'];
                $mapel = ["Matematika", "IPA", "Bahasa Indonesia"];
                ?>

                <p><strong>Nama:</strong> <?= htmlspecialchars($nama); ?></p>
                <p><strong>Nilai:</strong> <?= $nilai; ?></p>

                <?php if ($nilai >= 75): ?>
                    <div class="alert alert-success" role="alert">
                        Selamat! Kamu dinyatakan <strong>Lulus</strong>.
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning" role="alert">
                        Kamu dinyatakan <strong>Remedial</strong>. Semangat belajar ya!
                    </div>
                <?php endif; ?>

                <p><strong>Mata Pelajaran Favorit:</strong></p>
                <ul class="list-group">
                    <?php foreach ($mapel as $m): ?>
                        <li class="list-group-item"><?= $m; ?></li>
                    <?php endforeach; ?>
                </ul>

                <a href="tugas.php" class="btn btn-secondary mt-3">Kembali ke Form</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>