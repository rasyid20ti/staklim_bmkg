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
                        <input type="text" class="form-control" id="rapat" name="rapat" value="<?= $rapat['rapat']; ?>">
                        <?= form_error('rapat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Notulensi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="isi" name="isi"></textarea>
                        <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data Rapat</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');
</script>
<!-- End of Main Content -->