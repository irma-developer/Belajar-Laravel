<?php
include "config.php";

// Ambil data pencarian jika ada
$cari = $_GET['cari'] ?? '';

// Query data berdasarkan pencarian
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE nama LIKE '%$cari%'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #a18cd1, #fbc2eb);
      padding: 40px;
      margin: 0;
    }

    .container {
      max-width: 850px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #7b4397;
    }

    form {
      margin-bottom: 20px;
      display: flex;
      gap: 10px;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    button {
      padding: 10px 18px;
      background-color: #7b4397;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 500;
    }

    button:hover {
      background-color: #5e3372;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 25px;
    }

    table th, table td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }

    table th {
      background-color: #f3e9fb;
      color: #5e3372;
    }

    .btn-tambah {
      display: inline-block;
      padding: 10px 20px;
      background-color: #7b4397;
      color: white;
      text-decoration: none;
      border-radius: 20px;
      text-align: center;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .btn-tambah:hover {
      background-color: #5e3372;
    }

    .btn-aksi {
      display: inline-block;
      padding: 8px 16px;
      font-size: 13px;
      border-radius: 20px;
      font-weight: 600;
      color: white;
      text-decoration: none;
      transition: 0.3s;
      margin: 0 3px;
    }

    .btn-edit {
      background-color: #7b4397;
    }

    .btn-edit:hover {
      background-color: #5e3372;
    }

    .btn-hapus {
      background-color: #e74c3c;
    }

    .btn-hapus:hover {
      background-color: #c0392b;
    }

    .btn-wrapper {
      text-align: center;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Daftar Nilai Siswa</h2>

  <form method="GET">
    <input type="text" name="cari" placeholder="Cari nama siswa..." value="<?= htmlspecialchars($cari) ?>">
    <button type="submit">Cari</button>
  </form>

    <table>
    <tr>
      <th>Nama</th>
      <th>Nilai</th>
      <th>Prodi</th> <!-- Tambahan -->
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    <?php while($s = mysqli_fetch_assoc($data)) : ?>
      <tr>
        <td><?= htmlspecialchars($s['nama']) ?></td>
        <td><?= $s['nilai'] ?></td>
        <td><?= htmlspecialchars($s['prodi']) ?></td> <!-- Tambahan -->
        <td><?= $s['nilai'] >= 75 ? 'Lulus' : 'Remedial' ?></td>
        <td>
          <a href="edit.php?id=<?= $s['id'] ?>" class="btn-aksi btn-edit">Edit</a>
          <a href="hapus.php?id=<?= $s['id'] ?>" class="btn-aksi btn-hapus" onclick="return confirm('Yakin ingin dihapus?')">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>


  <div class="btn-wrapper">
    <a href="tambah.php" class="btn-tambah">+ Tambah Data</a>
  </div>
</div>

</body>
</html>
