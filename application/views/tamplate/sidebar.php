<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?php echo site_url('dashboard_tokokue') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <!-- ===== TOKO KUE ===== -->
                    <div class="sb-sidenav-menu-heading">Toko Kue</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseProdukKue" aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-cookie-bite"></i></div>
                        Produk Kue
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProdukKue" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('dashboard_tokokue/lihat_produk') ?>">
                                <i class="fas fa-list me-1"></i> Lihat Produk
                            </a>
                            <a class="nav-link" href="<?php echo site_url('dashboard_tokokue/tambah_produk') ?>">
                                <i class="fas fa-plus me-1"></i> Tambah Produk
                            </a>
                        </nav>
                    </div>

                    <!-- ===== DISTRIBUTOR ===== -->
                    <div class="sb-sidenav-menu-heading">Distributor</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseProdukDist" aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Produk
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProdukDist" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('produk') ?>">
                                <i class="fas fa-list me-1"></i> Data Produk
                            </a>
                            <a class="nav-link" href="<?php echo site_url('produk/tambah') ?>">
                                <i class="fas fa-plus me-1"></i> Tambah Produk
                            </a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseVendor" aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                        Vendor
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseVendor" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('vendor') ?>">
                                <i class="fas fa-list me-1"></i> Data Vendor
                            </a>
                            <a class="nav-link" href="<?php echo site_url('vendor/tambah') ?>">
                                <i class="fas fa-plus me-1"></i> Tambah Vendor
                            </a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseBarang" aria-expanded="false">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-loading"></i></div>
                        Barang Masuk
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBarang" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('barangmasuk') ?>">
                                <i class="fas fa-list me-1"></i> Data Barang Masuk
                            </a>
                            <a class="nav-link" href="<?php echo site_url('barangmasuk/tambah') ?>">
                                <i class="fas fa-plus me-1"></i> Tambah Barang Masuk
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
