<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $buletin['id']; ?>">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Judul Buletin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $buletin['title']; ?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image" name="image" value="<?= $buletin['image']; ?>">
                        <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Alamat Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link" name="link" value="<?= $buletin['link']; ?>">
                        <?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Buletin</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->