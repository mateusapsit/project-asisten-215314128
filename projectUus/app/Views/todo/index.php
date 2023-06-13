<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png">
</head>

<body>
    <div class="jumbotron">
        <div class="container">
            <h1>APLIKASI TO-DOLIST</h1>
            <form method="post" action="<?= base_url('todolist/addTask') ?>">
                <label>Masukkan kegiatan:</label>
                <input type="text" name="kegiatan" required>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
            <br>
            <h3>Daftar Kegiatan:</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($todolist as $task) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $task['kegiatan'] ?></td>
                            <td>
                                <a href="<?= base_url('todolist/markAsDone/' . $task['idkegiatan']) ?>" class="btn btn-success">Selesai</a>
                                <a href="<?= base_url('todolist/deleteTask/' . $task['idkegiatan']) ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
