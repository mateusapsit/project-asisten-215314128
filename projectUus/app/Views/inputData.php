<!DOCTYPE html>
<html>

<head>
    <title>Input Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= base_url('prosesData'); ?>">
                            <div class="form-group">
                            <?= csrf_field(); ?>
                                <label for="nim">NIM:</label>
                                <input type="text" class="form-control" id="nim" name="nim" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status Kelulusan:</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="memuaskan">Memuaskan</option>
                                    <option value="sangat memuaskan">Sangat Memuaskan</option>
                                    <option value="dengan pujian">Dengan Pujian</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>