<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard_tokokue/lihat_produk'); ?>">Produk</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-edit me-1"></i> Form Edit Produk
                </div>
                <div class="card-body">
                    <?php foreach ($kue as $u) { ?>
                    <form action="<?php echo site_url('dashboard_tokokue/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="idproduk" value="<?php echo $u->id_produk; ?>">
                        <input type="hidden" name="gambar_lama" value="<?php echo $u->gambar; ?>">

                        <div class="mb-3">
                            <label for="nmproduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nmproduk" name="nmproduk"
                                   value="<?php echo $u->nama_produk; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo $u->deskripsi; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga"
                                   value="<?php echo $u->harga; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Saat Ini</label><br>
                            <img src="<?php echo base_url('assets/gambarkue/' . $u->gambar); ?>"
                                 height="100" width="100" style="object-fit:cover; border-radius:5px;">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Upload Gambar Baru (opsional)</label>
                            <input type="file" class="form-control" name="foto" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="<?php echo site_url('dashboard_tokokue/lihat_produk'); ?>" class="btn btn-secondary">Batal</a>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
