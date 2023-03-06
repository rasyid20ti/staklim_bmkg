<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/addBuletin'); ?>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Judul Buletin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="image" name="image">
                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Alamat Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="link" name="link">
                    <?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <!-- <div class="form-group row">
                <div class="col-sm-2">PDF Upload</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file">
                                <label class="custom-file-label" for="file">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah Buletin</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->