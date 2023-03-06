<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('admin/beritaAdd'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Judul Berita</label>
                    <div class="col-sm-10">
                        <input type="hidden" value="<?= $user['name']; ?>" name="penulis">
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sub" class="col-sm-2 col-form-label">Sub Berita</label>
                    <div class="col-sm-10">
                        <select name="sub" id="sub" class="form-control">
                            <option value="">Pilih Sub Berita</option>
                            <option value="Siaran Pers" id="Siaran Pers" name="Siaran Pers">Siaran Pers</option>
                            <option value="Umum" id="Umum" name="Umum">Umum</option>
                            <!-- <option value="Diseminasi Informasi" id="Diseminasi Informasi" name="Diseminasi Informasi">Diseminasi Informasi</option> -->
                            <!-- <option value="Kerjasama" id="Kerjasama" name="Kerjasama">Kerjasama</option> -->
                            <!-- <option value="Sekolah Lapang Iklim" id="Sekolah Lapang Iklim" name="Sekolah Lapang Iklim">Sekolah Lapang Iklim</option> -->
                        </select>
                        <?= form_error('keperluan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi Berita</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="isi" name="isi"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">Link Foto (Google Drive)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto"></input>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Berita</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');
    CKEDITOR.editorConfig = function( config ) {
    config.enterMode = 2;
    config.shiftenterMode = 1;
    };
</script>
<!-- End of Main Content -->