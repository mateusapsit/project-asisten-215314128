<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url('bg3.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PENDAFTARAN ASISTEN PRAKTIKUM</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">A
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
            <h1 class="mb-0">SIMPAN DATA ASISTEN PRAKTIKUM</h1>
        </div>
        <form action="/asisten/simpan" method="post" class="mt-4">
            <?= csrf_field() ?>
            <div class="p-4 bg-dark rounded mt-3">
            <div class="mb-3 mt-3">
                <label for="nim" class="form-label text-white">NIM</label>
                <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label text-white">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="praktikum" class="form-label text-white">Praktikum</label>
                <input type="text" class="form-control" id="praktikum" placeholder="Masukkan Mata Kuliah Praktikum" name="praktikum" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="ipk" class="form-label text-white">IPK</label>
                <input type="text" class="form-control" id="ipk" placeholder="Masukkan IPK" name="ipk" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>