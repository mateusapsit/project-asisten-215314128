<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PENDAFTARAN ASISTEN PRAKTIKUM</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/asisten">Daftar Nama Asisten</a>
                </li>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/asisten/search">Cari Asisten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/asisten/simpan">Simpan Asisten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/asisten/update">Update Asisten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/asisten/delete">Hapus Asisten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="login"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="p-4 bg-dark text-white rounded">
            <h1 class="mb-0">PENCARIAN ASISTEN</h1>
        </div>
        <div class="p-4 bg-dark rounded mt-3">
            <form action="/asisten/search" method="post" class="mt-4">
                <?= csrf_field() ?>
                <div class="form-group">

                    <input type="text" class="form-control" id="key" placeholder="Masukkan NIM" name="key" required>
                    <br>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Cari</button>
                </div>
            </form>
            <?php if (!empty($hasil)): ?>
                <div class="p-4 bg-dark mt-4 text-white rounded">
                    <h1 class="display-4">Hasil Pencarian</h1>
                    <p>Nama:
                        <?= $hasil['NAMA'] ?>
                    </p>
                    <p>Praktikum:
                        <?= $hasil['PRAKTIKUM'] ?>
                    </p>
                    <p>IPK:
                        <?= $hasil['IPK'] ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>