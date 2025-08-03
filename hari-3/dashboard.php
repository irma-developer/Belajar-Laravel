<?php
include "template/header.php";

function sapaUser($nama)
{
    return "👋 Hai $nama, selamat datang di dashboard!";
}
?>

<div class="card shadow-sm">
    <div class="card-body">
        <p><?= sapaUser("Ziyad"); ?></p>
        <a href="tugas.php" class="btn btn-primary">Mulai Penilaian</a>
    </div>
</div>

<?php include "template/footer.php"; ?>