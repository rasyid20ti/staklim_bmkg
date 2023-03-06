<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $rapat['id']; ?>">
                <div class="form-group row">
                    <label for="rapat" class="col-sm-2 col-form-label">Judul Rapat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $rapat['rapat']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rapat" class="col-sm-2 col-form-label">Isi Rapat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $rapat['isi']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Dokumentasi</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <img src="<?= base_url('assets/img/rapat/') . $rapat['dokumentasi']; ?>" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <a href="<?= base_url('Pimpinan/export/') . $rapat['id']; ?>" class="btn btn-primary"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
                    </div>
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->