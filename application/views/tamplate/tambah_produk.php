<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard_tokokue/lihat_produk'); ?>">Produk</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus me-1"></i> Form Tambah Produk
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('dashboard_tokokue/simpan_produk'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi produk" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo site_url('dashboard_tokokue/lihat_produk'); ?>" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
