<div class="container">
    <div class="card-header">
        <a href="<?php echo site_url('dashboard_tokokue/lihat_produk') ?>" class="fa fa-plus">Lihat Produk</a></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>harga</th>
                        <th>foto</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;    
                    foreach ($produk as $p) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->nama_produk ?></td>
                            <td><?php echo $p->deskripsi ?></td>
                            <td><?php echo $p->harga ?></td>
                            <td><img src="<?php echo base_url('assets/foto/' . $p->nama_file) ?>"
                             width="100" height="100"></td>
                           
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        