<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('admin/artikel_add'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Artikel</label>
                    <div class="col-sm-10">
                        <!-- <input type="hidden" value="<?= $user['name']; ?>" name="penulis"> -->
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sub" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select name="sub" id="sub" class="form-control">
                            <option value="">Pilih Kategori</option>
                            <option value="MKKuG" id="MKKuG" name="MKKuG">MKKuG</option>
                            <option value="Sekolah Lapang Iklim" id="Sekolah Lapang Iklim" name="Sekolah Lapang Iklim">Sekolah Lapang Iklim</option>
                        </select>
                    </div>
                    <?= form_error('sub', '<small class="text-denger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="isi" name="isi"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis"></input>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Artikel</button>
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