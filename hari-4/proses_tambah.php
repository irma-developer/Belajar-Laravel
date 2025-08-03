<?php
$conn = mysqli_connect("localhost", "root", "", "db_sekolah");
if (!$conn) die("Gagal koneksi: " . mysqli_connect_error());

$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$prodi = $_POST['prodi'];

$query = "INSERT INTO siswa (nama, nilai, prodi) VALUES ('$nama', $nilai, '$prodi')";
mysqli_query($conn, $query);

header("Location: index.php");
?>