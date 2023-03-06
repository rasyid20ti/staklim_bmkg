<body>
    <div class=" bg-white p-0">
        <div class=" position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">

                <a href="http://iklimriau.bmkg.go.id/" class="navbar-brand p-0">
                <img src="<?= base_url('assets2/img/Terbaru_logo.png'); ?>" alt="Logo">
                </a>
                <div class="navbar-brand p-0">
                    <img src="<?= base_url('assets2/img/logo_akhlak.png'); ?>" alt="Logo">
                    <img src="<?= base_url('assets2/img/logo_bangga.png'); ?>" alt="Logo">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?php echo site_url('home/'); ?>" class="nav-item nav-link ">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= site_url('profile/profile_kantor'); ?>" class="dropdown-item">Kantor Administrasi</a>
                                <a href="<?= site_url('profile/profile_tambang'); ?>" class="dropdown-item">Kantor Operasional</a>
                                <a href="<?= site_url('profile/profile_visimisi'); ?>" class="dropdown-item">Visi Misi</a>
                                <a href="<?= base_url('profile/profile_sdm'); ?>" class="dropdown-item">Sumber Daya Manusia</a>
                                <a href="<?php echo site_url('profile/profile_organisasi'); ?>" class="dropdown-item">Struktur Organisasi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url('pengajuan/'); ?>" class="dropdown-item">Permintaan Data</a>
                                <a href="<?php echo site_url('service/service'); ?>" class="dropdown-item">Ketersediaan Data</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url('media/berita'); ?>" class="dropdown-item">Berita</a>
                                <a href="<?php echo site_url('media/buletin'); ?>" class="dropdown-item">Buletin</a>
                            </div>
                        </div>
                        <a href="<?php echo site_url('contact/'); ?>" class="nav-item nav-link">Kontak Kami</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
        <div class=" py-1 bg-dark headhead mb-5">
            <div class="text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Info Iklim Dasarian Riau</h1>
            </div>
        </div>

        <div class="container">


            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Informasi HTH</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Analisis</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                </div>
            </div>
        </div>