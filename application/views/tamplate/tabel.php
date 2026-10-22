<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Daftar Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Produk
                    <a href="<?php echo site_url('dashboard_tokokue/tambah_produk'); ?>" class="btn btn-primary btn-sm float-end">
                        <i class="fas fa-plus"></i> Tambah Produk
                    </a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($produk as $u) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $u->nama_produk; ?></td>
                                <td><?php echo $u->deskripsi; ?></td>
                                <td>Rp <?php echo number_format($u->harga, 0, ',', '.'); ?></td>
                                <td>
                                    <img src="<?php echo base_url('assets/gambarkue/' . $u->gambar); ?>"
                                         width="80" height="80" style="object-fit:cover; border-radius:5px;">
                                </td>
                                <td>
                                    <a href="<?php echo site_url('dashboard_tokokue/edit/' . $u->id_produk); ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Ubah
                                    </a>
                                    <a href="<?php echo site_url('dashboard_tokokue/hapus/' . $u->id_produk); ?>"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Yakin mau hapus produk ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
