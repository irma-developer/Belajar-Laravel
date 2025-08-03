<?php
include "config.php";
$id = $_GET['id'];
$s = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Siswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #a18cd1, #fbc2eb); /* ungu pastel ke pink muda */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: #fff;
      padding: 35px 40px;
      border-radius: 20px;
      box-shadow: 0 12px 25px rgba(0,0,0,0.1);
      width: 400px;
      text-align: center;
    }

    .card h2 {
      margin-bottom: 25px;
      color: #7b4397;
      font-weight: 700;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #444;
      font-weight: 500;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 2px solid #d2b6f1;
      border-radius: 12px;
      font-size: 15px;
      outline: none;
      transition: 0.3s ease;
    }

    .form-group input:focus {
      border-color: #7b4397;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #7b4397;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s ease;
      font-weight: 600;
    }

    button:hover {
      background-color: #5e3372;
    }
  </style>
</head>
<body>

<div class="card">
  <h2>Edit Data Siswa 🎓</h2>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $s['id'] ?>">

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" value="<?= $s['nama'] ?>" required>
    </div>

    <div class="form-group">
      <label for="nilai">Nilai</label>
      <input type="number" name="nilai" id="nilai" value="<?= $s['nilai'] ?>" required>
    </div>

    <button type="submit">Simpan Perubahan 💾</button>
  </form>
</div>

</body>
</html>
