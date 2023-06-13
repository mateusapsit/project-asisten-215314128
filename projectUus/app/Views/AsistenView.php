<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Asisten Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url('Backround.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
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

    <div class="container">
        <div class="row">
        </div>

        <table class="table mt-4 table-dark">
            <thead class="thead-light">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas Praktikum</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asisten as $row): ?>
                    <tr>
                        <td>
                            <?= $row['NIM'] ?>
                        </td>
                        <td>
                            <?= $row['NAMA'] ?>
                        </td>
                        <td>
                            <?= $row['PRAKTIKUM'] ?>
                        </td>
                        <td>
                            <?= $row['IPK'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>