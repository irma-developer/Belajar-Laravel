<?php
include "config.php";

$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$prodi = $_POST['prodi']; // Tambahan

// Simpan ke database
mysqli_query($conn, "INSERT INTO siswa(nama, nilai, prodi) VALUES ('$nama', '$nilai', '$prodi')");

header("Location: index.php");
?>
