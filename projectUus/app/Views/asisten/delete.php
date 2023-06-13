<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Hapus Data</title>
</head>

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
    <div class="container bg-white">
        <div class="p-4 bg-dark text-white rounded">
            <h1 class="mb-0">HAPUS DATA ASISTEN</h1>
        </div>
        <form action="/asisten/delete" method="post">
            <?= csrf_field() ?>
            <div class="p-4 bg-dark rounded mt-3">
                <div class="mb-3 d-flex flex-column">
                    <label for="nim" class="form-label text-white">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                </div>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
            </div>
            </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
