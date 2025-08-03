<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4>Form Penilaian</h4>
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
    </div>    
</body>
</html>