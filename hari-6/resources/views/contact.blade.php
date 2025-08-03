<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <strong>Kontak Kami</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">Hubungi Kami</h5>
                <p class="card-text">Jika Anda memiliki pertanyaan atau masukan mengenai aplikasi ini, Anda dapat menghubungi kami melalui formulir di bawah.</p>

                <!-- Formulir Kontak -->
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <a href="/" class="btn btn-primary mt-4">Kembali ke Home</a>
    </div>

    <footer class="text-center text-muted mt-5">
        <p>© 2025 Sistem Penilaian Siswa</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>