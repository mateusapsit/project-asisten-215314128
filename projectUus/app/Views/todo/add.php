<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="bg-light p-5">
        <div class="container">
            <h1 class="mt-5">APLIKASI TO-DOLIST</h1>
            <form method="post" action="<?= base_url('todo/create') ?>" class="mt-3">
                <div class="input-group mb-3">
                    <input type="text" name="kegiatan" class="form-control" placeholder="Masukkan kegiatan" required>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
