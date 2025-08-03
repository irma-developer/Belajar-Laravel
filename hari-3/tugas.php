<?php include "template/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-header bg-success text-white">
        <strong>Form Pengisian Nilai</strong>
    </div>
    <div class="card-body">
        <form action="jawaban.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai:</label>
                <input type="number" class="form-control" id="nilai" name="nilai" required min="0" max="100">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>

<?php include "template/footer.php"; ?>