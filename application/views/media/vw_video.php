<link href="<?php echo base_url('assets2/'); ?>css/dasarian.css" rel="stylesheet">

<body>
    <div class="headerDasarian">
        <div class="container">
            <div class='row'>

                <div class='col' style="padding-top:30px; color:#73777B;">
                    <h5>Video</h5>
                    <p>Video adalah suatu media pengirim pesan yang dapat memperlihatkan suara serta gambar</p>
                    <?php echo form_open('media/searchVideo') ?>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input class='form-control ' name='keyword' placeholder="Cari Video">
                            <button type="submit" class="btn btn-success">Cari</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
                <div class='col'>
                    <img src="<?= base_url('assets2/images/icon/Groupvideo.png'); ?>"style=" padding-bottom:20px; margin-left:75px">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid isiDasarian" style="padding-bottom:3rem!important">
        <div class="row g-4">
            <?php foreach ($video as $us) : ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="kotakDasarian" style="padding-top:10px;">
                        <iframe class="embed-responsive-item" width="300" height="200" src="<?= $us['linkMedia'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>></iframe>
                        <a href="<?= $us['linkMedia'] ?>">
                            <h5><?= $us['judul']; ?></h5><br>
                        </a>
                        <div class="createdDasarian">
                            <!-- <i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i> <?= $us['sub']; ?><br> -->
                            <i class="fa-solid fa-user" style="padding-left: 10px; padding-right: 10px;padding-bottom: 10px;"></i> <?= $us['author']; ?><br>
                            <i class="fa-solid fa-calendar" style="padding-left: 10px; padding-right: 10px;"></i><?= date('d M Y', strtotime($us['created_at'])); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-lg-3 col-sm-6"></div>
        </div>
    </div>
</body>