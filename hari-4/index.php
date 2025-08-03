<?php
include "template/header.php";
include "class/Siswa.php";

$conn = mysqli_connect("localhost", "root", "", "db_sekolah");
if (!$conn) die("Koneksi gagal: " . mysqli_connect_error());

$result = mysqli_query($conn, "SELECT * FROM siswa");

?>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            $s = new Siswa($row['nama'], $row['nilai']);
        ?>
            <div class="alert <?= $s->status() == 'Lulus 🎉' ? 'alert-success' : 'alert-warning'; ?> mb-2">
                <b><?= $s->nama ?></b> mendapat nilai <strong><?= $s->nilai ?></strong> dan dinyatakan:
                <span class="badge bg-<?= $s->status() == 'Lulus 🎉' ? 'success' : 'warning'; ?>"><?= $s->status() ?></span>
            </div>
        <?php } ?>
    </div>
</div>

<a href="tambah.php" class="btn btn-primary">➕ Tambah Data Baru</a>

<?php include "template/footer.php"; ?>