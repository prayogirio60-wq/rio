<main>
    <div class="container-fluid px-4">
     <div class="card mx-4 mt-3">
        <div class="card-header">
         <a href="<?php echo site_url('dashboard_tokokue/lihat_produk')?>" class="btn btn-outline-primary btn-sm">
             <i class="fas fa-arrow-left"></i> Kembali
         </a> 
        </div>   
        <div class="card-body">
          <?php foreach($produk as $p) { ?>
          <form action="<?php echo site_url('dashboard_tokokue/update_produk')?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?php echo $p->id_produk; ?>">
            <input type="hidden" name="gambar_lama" value="<?php echo $p->gambar; ?>">

            <div class="form-group mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="nmproduk" 
                       value="<?php echo htmlspecialchars($p->nama_produk); ?>"
                       required>
            </div>
            <div class="form-group mb-3">
                <label>Deskripsi Produk</label>
                <textarea class="form-control" name="deskripsi" rows="3" required><?php echo htmlspecialchars($p->deskripsi); ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label>Harga Produk</label>
                <input type="number" class="form-control" name="harga" 
                       value="<?php echo $p->harga; ?>" min="0" required>
            </div>
            <div class="form-group mb-3">
                <label>Gambar Saat Ini</label><br>
                <?php if($p->gambar && $p->gambar != 'no-image.jpg'): ?>
                <img src="<?php echo base_url('assets/uploads/'.$p->gambar) ?>" 
                     width="100" height="70" class="mb-2" style="object-fit:cover;"><br>
                <?php else: ?>
                <span class="text-muted">Tidak ada gambar</span><br>
                <?php endif; ?>
            </div>
            <div class="form-group mb-3">
                <label>Ganti Gambar <small class="text-muted">(opsional, kosongkan jika tidak ingin ganti)</small></label>
                <input type="file" name="gambar" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Update</button>
                <a href="<?php echo site_url('dashboard_tokokue/lihat_produk')?>" class="btn btn-secondary">Batal</a>
            </div>
          </form>
          <?php } ?>
        </div>
     </div>
    </div>
</main>
