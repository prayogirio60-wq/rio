<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="card-title">Simple Calculator</h4>
            </div>

            <div class="card-body">

                <form method="post" action="<?php echo base_url('index.php/hitung/proses'); ?>">

                    <div class="mb-3">
                        <input type="number" class="form-control" name="a"
                            placeholder="Masukkan angka pertama" required>
                    </div>

                    <div class="mb-3">
                        <input type="number" class="form-control" name="b"
                            placeholder="Masukkan angka kedua" required>
                    </div>

                    <div class="mb-3">
                        <select name="operation" class="form-control" required>
                            <option value="">Pilih Operasi</option>
                            <option value="tambah">Tambah</option>
                            <option value="kurang">Kurang</option>
                            <option value="kali">Kali</option>
                            <option value="bagi">Bagi</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Hitung
                    </button>

                </form>

                <?php if(isset($hasil)) : ?>
                    <div class="alert alert-success mt-3 text-center">
                        <strong>Hasil: </strong> <?= $hasil ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>