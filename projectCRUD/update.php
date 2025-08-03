<?php
include "config.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

mysqli_query($conn, "UPDATE siswa SET nama='$nama', nilai=$nilai WHERE id=$id");
header("Location: index.php");
?>