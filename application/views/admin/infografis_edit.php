<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?= base_url() ?>admin/infografis_edit/<?= $infografis['idInfo'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idInfo" value="<?= $infografis['idInfo']; ?>">
                <div class="form-group">
                    <label for="judul">Menu</label>
                    <select name="menu" id="menu" class="form-control">
                        <option value="<?= $infografis['idMenu']; ?>"><?= $infografis['namaMenu']; ?></option>
                        <option value="" disabled>----</option>
                        <?php foreach ($menuLayanan as $us) : ?>
                            <option value="<?= $us['idMenu']; ?>"><?= $us['namaMenu'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('menu', '<small class="text-denger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul" value="<?= $infografis['judul']; ?>">
                    <?= form_error('judul', '<small class="text-denger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="isi" name="isi"><?= $infografis['isi']; ?></textarea>
                    <?= form_error('isi', '<small class="text-denger pl-3">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="gambar1">Gambar Awal</label>
                    <input name="gambar1" type="text" class="form-control" id="gambar1" placeholder="Gambar Awal" value="<?= $infografis['gambar1']; ?>">
                </div>
                <div class="form-group">
                    <label for="gambar2">Gambar Infografis</label>
                    <input name="gambar2" type="text" class="form-control" id="gambar2" placeholder="Gambar Infografis" value="<?= $infografis['gambar2']; ?>">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input name="penulis" type="text" class="form-control" id="penulis" placeholder="Penulis" value="<?= $infografis['penulis']; ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="<?= $infografis['status']; ?>"><?php if($infografis['status'] == 1) { echo 'Aktif'; } else { echo 'Tidak Aktif'; } ?></option>
                        <option value="" disabled>----</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-12">
                        <a href="<?= base_url('admin/infografis') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Update Infografis</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');
    CKEDITOR.editorConfig = function(config) {
        config.enterMode = 2;
        config.shiftenterMode = 1;
    };
</script>
<!-- End of Main Content -->