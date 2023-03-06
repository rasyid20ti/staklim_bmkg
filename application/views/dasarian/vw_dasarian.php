<script>
    var baseurl = "<?php echo base_url("dasarian/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
</script>
<script src="<?php echo base_url("assets2/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
<script src="<?php echo base_url("assets2/js/config.js"); ?>"></script> <!-- Load file process.js -->
<link href="<?php echo base_url('assets2/'); ?>css/dasarian.css" rel="stylesheet">

<body>
    <div class="headerDasarian">
        <div class="container">
            <div class='row'>
                <div class='col'>
                    <img src="<?= base_url('assets2/images/hth/das3.webp'); ?>">
                </div>
                <div class='col' style="padding-top:30px;color:#73777B;">
                    <h5>Informasi Iklim</h5>
                    <p>Cari dan lihat data informasi iklim tertentu <br>dalam bentuk grafik di Riau dengan cepat, <br>mudah, dan akurat.</p>
                    <?php echo form_open('dasarian/search') ?>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input class='form-control ' name='keyword' placeholder="Cari Dasarian">
                            <button type="submit" class="btn btn-success" style="text-transform:inherit">Cari</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid isiDasarian">
        <div class="row g-4">
            <?php foreach ($dasarian as $us) : ?>
                <div class="col-lg-3 col-sm-6">
                    <a href="<?= base_url('dasarian/detail/' . encrypt_url($us['id_dasarian'])); ?>">
                        <div class="kotakDasarian">
                            <img src="<?= $us['gambar'] ?>" class="mx-auto img-fluid">
                            <h5><?= $us['judul']; ?></h5><br>
                    </a>
                    <div class="createdDasarian">
                        <i class="fa-solid fa-list" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i><?= $us['kategori']; ?><br>
                        <i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i><?= $us['penulis']; ?><br>
                        <!-- <i class="fa-solid fa-calendar" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i><?= date('d M Y', strtotime($us['datetime'])); ?> -->
                    </div>
                </div>
        </div>
    <?php endforeach; ?>
    <div class="col-lg-3 col-sm-6"></div>
    </div>
    </div>
</body>