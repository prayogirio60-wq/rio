<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
       <div class="card mx-3 mt-3">
          <div class="card-header">
          <a href="<?php echo site_url('dashboard_tokokue/tambah_produk')?>" class="btn btn-outline-primary btn-sm"> <i class="fas fa-plus"></i> Tambah Produk</a>
          </div> 
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($produk as $p){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $p->nama_produk ?></td>                 
                  <td><?php echo $p->deskripsi ?></td>
                  <td><?php echo "Rp. " .number_format($p->harga, 0, ',', '.'); ?></td>
                  <td><img src="<?php echo base_url('/assets/uploads/'.$p->gambar) ?>" width="100" height="70"></td>
                  <td>
                    <a href="<?php echo site_url('dashboard_tokokue/edit_produk/'.$p->id_produk) ?>" class="btn btn-warning btn-sm" title="Edit Produk"><i class="fas fa-pencil"></i></a> 
                    <a href="<?php echo site_url('dashboard_tokokue/hapus_produk/'.$p->id_produk) ?>" class="btn btn-danger btn-sm" title="Hapus Produk" onclick="return confirm('Yakin mau hapus produk ini?')"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>             
          </div>
       </div>
    </div>
</main>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/Indonesian.json"
            }
        });
    });
</script>
