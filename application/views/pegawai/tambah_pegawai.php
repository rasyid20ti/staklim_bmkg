<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <center><?= $title; ?></center>
    </h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('pegawai/pegawaiAdd'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai (Gelar)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ttl" name="ttl">
                        <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nip" name="nip">
                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="golongan" name="golongan">
                        <?= form_error('golongan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="">Jabatan Pegawai</option>
                            <option value="Kepala Stasiun Kelas IV">Kepala Stasiun Klimatologi Kelas IV Riau</option>
                            <option value="SPT PMG Pertama">SPT PMG Pertama</option>
                            <option value="PMG Pertama">PMG Pertama</option>
                            <option value="PMG Muda">PMG Muda</option>
                            <option value="PMG Madya">PMG Madya</option>
                            <option value="PPNPN">PPNPN</option>
                            <option value="Alumni">Alumni</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kompetensi" class="col-sm-2 col-form-label">Kompetensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kompetensi" name="kompetensi">
                        <?= form_error('kompetensi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Alamat Surel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                        <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="publikasi" class="col-sm-2 col-form-label">Publikasi</label>
                    <div class="col-sm-10">
                        <textarea type="link" class="form-control" id="publikasi" name="publikasi"></textarea>
                        <?= form_error('publikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto" value="https://lh3.googleusercontent.com/d/">
                        <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Kepegawaian</button>
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