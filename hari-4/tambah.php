<?php include "template/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <strong>Tambah Data Siswa</strong>
    </div>
    <div class="card-body">
        <form action="proses_tambah.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai:</label>
                <input type="number" class="form-control" id="nilai" name="nilai" required min="0" max="100">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi:</label>
                <select class="form-select" id="prodi" name="prodi" required>
                    <option value="">-- Pilih Prodi --</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Bisnis Digital">Bisnis Digital</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

<?php include "template/footer.php"; ?>
