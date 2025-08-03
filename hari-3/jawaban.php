v<?php
include "template/header.php";

// Fungsi status kelulusan
function statusKelulusan($nilai)
{
    return $nilai >= 75 ? "Lulus 🎉" : "Remedial 💡";
}

// Fungsi tampil mapel
function tampilMapel($mapel)
{
    echo '<ul class="list-group">';
    foreach ($mapel as $m) {
        echo "<li class='list-group-item'>$m</li>";
    }
    echo "</ul>";
}

// Ambil data
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$mapel = ["Matematika", "IPA", "Bahasa Indonesia"];
?>

<div class="card shadow-sm">
    <div class="card-header bg-info text-white">
        <strong>Hasil Penilaian</strong>
    </div>
    <div class="card-body">
        <p>Halo <strong><?= htmlspecialchars($nama); ?></strong>, berikut hasil penilaianmu:</p>
        <p><strong>Nilai:</strong> <?= $nilai; ?></p>

        <?php if ($nilai >= 75): ?>
            <div class="alert alert-success">Status: <strong><?= statusKelulusan($nilai); ?></strong></div>
        <?php else: ?>
            <div class="alert alert-warning">Status: <strong><?= statusKelulusan($nilai); ?></strong></div>
        <?php endif; ?>

        <p><strong>Mata Pelajaran Favorit:</strong></p>
        <?php tampilMapel($mapel); ?>

        <a href="tugas.php" class="btn btn-secondary mt-3">Kembali ke Form</a>
    </div>
</div>

<?php include "template/footer.php"; ?>