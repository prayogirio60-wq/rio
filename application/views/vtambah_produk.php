<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
     <div class="card mx-4 mt-3">
        <div class="card-header">
         <a href="<?php echo site_url('dashboard_tokokue/lihat_produk')?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a> 
        </div>   
            <div class="card-body">
              <form action="<?php echo site_url('dashboard_tokokue/simpan_produk')?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="nmproduk">Nama Produk</label>
                    <input type="text" class="form-control" id="nmproduk" name="nmproduk" 
                           pattern="[A-Za-z\s]+" title="Hanya boleh huruf dan spasi" required>
                    <small class="text-muted">Hanya boleh diisi huruf</small>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi Produk</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="harga">Harga Produk</label>
                    <input type="number" class="form-control" id="harga" name="harga" min="0" required>
                </div>
                <div class="form-group mb-3">
                    <label for="gambar">Gambar Produk</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
              </form>
            </div>
     </div>
    </div>
</main>
