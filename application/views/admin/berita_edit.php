    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $berita['id']; ?>">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Judul Berita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" value="<?= $berita['title']; ?>">
                            <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
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
                        <label for="title" class="col-sm-2 col-form-label">Isi Berita Lama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="isi" value="<?= $berita['isi']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Isi Berita Baru</label>
                        <div class="col-sm-10">
                            <textarea type="text" rows="10" class="form-control" data-form-field="Message" id="isi" name="isi"> <?= $berita['isi']; ?></textarea>
                            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Link Foto (Google Drive)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="foto" name="foto" value="<?= $berita['foto']; ?>"></input>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" name="edit" class="btn btn-primary">Update Berita</button>
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
    </script>
    <!-- End of Main Content -->