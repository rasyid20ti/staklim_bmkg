<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama_menu">Nama Menu</label>
                    <input name="nama_menu" type="text" class="form-control" id="nama_menu" placeholder="Isi nama menu">
                    <?= form_error('nama_menu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <a href="<?= base_url('admin/menuLayanan') ?>" class="btn btn-danger">Tutup</a>
                <button type="submit" href="<?= base_url('admin/menulayanan_add') ?>" name="tambah" class="btn btn-primary float-right">Simpan Menu</button>
            </form>
        </div>
    </div>
</div>
