<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?= base_url() ?>admin/menulayanan_edit/<?= $menu['idMenu'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idMenu" value="<?= $menu['idMenu']; ?>">
                <div class="form-group">
                    <label for="nama_menu">Nama Menu</label>
                    <input name="nama_menu" type="text" class="form-control" id="nama_menu" placeholder="Mama menu" value="<?= $menu['namaMenu']; ?>"></input>
                    <?= form_error('nama_menu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <a href="<?= base_url('admin/menuLayanan') ?>" class="btn btn-danger">Tutup</a>
                <button type="submit" name="edit" class="btn btn-primary float-right">Update Menu Layanan</button>
            </form>
        </div>
    </div>
</div>