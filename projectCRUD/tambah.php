<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Tambah Siswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #a18cd1, #fbc2eb);
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 35px 40px;
      border-radius: 20px;
      box-shadow: 0 12px 25px rgba(0,0,0,0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #7b4397;
      font-weight: 700;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 500;
      color: #444;
    }

    input[type="text"],
    input[type="number"],
    select {
      width: 100%;
      padding: 12px;
      margin-top: 8px;
      border: 2px solid #d2b6f1;
      border-radius: 12px;
      font-size: 14px;
      outline: none;
      transition: border-color 0.3s ease;
    }

    input:focus,
    select:focus {
      border-color: #7b4397;
    }

    button {
      margin-top: 25px;
      width: 100%;
      padding: 12px;
      background-color: #7b4397;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 12px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background-color: #5e3372;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Tambah Data Siswa🎓</h2>
  <form action="simpan.php" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="nilai">Nilai:</label>
    <input type="number" name="nilai" id="nilai" required>

    <label for="prodi">Program Studi:</label>
    <select name="prodi" id="prodi" required>
      <option value="">-- Pilih Prodi --</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
      <option value="Bisnis Digital">Bisnis Digital</option>
    </select>

    <button type="submit">Simpan 📥</button>
  </form>
</div>

</body>
</html>
