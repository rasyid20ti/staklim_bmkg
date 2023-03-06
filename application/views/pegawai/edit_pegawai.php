<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <center><?= $title; ?></center>
    </h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('pegawai/pegawaiEdit/') . $pegawai['id']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai (Gelar)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pegawai['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ttl" name="ttl" value="<?= $pegawai['ttl']; ?>" readonly>
                        <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nip" name="nip" value="<?= $pegawai['nip']; ?>" readonly>
                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="golongan" name="golongan" value="<?= $pegawai['golongan']; ?>" >
                        <?= form_error('golongan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="">Jabatan Pegawai</option>
                            <option value="Kepala Stasiun Klimatologi Kelas IV Riau">Kepala Stasiun Klimatologi Kelas IV Riau</option>
                            <option value="SPT PMG Pertama">SPT PMG Pertama</option>
                            <option value="PMG Pertama">PMG Pertama</option>
                            <option value="PMG Muda">PMG Muda</option>
                            <option value="PMG Madya">PMG Madya</option>
                            <option value="PPNPN">PPNPN</option>
                            <option value="Alumni">Alumni</option>
                        </select>
                    </div>
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="kompetensi" class="col-sm-2 col-form-label">Kompetensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kompetensi" name="kompetensi" value="<?= $pegawai['kompetensi']; ?>">
                        <?= form_error('kompetensi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Alamat Surel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $pegawai['email']; ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $pegawai['pendidikan']; ?>">
                        <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="publikasi" class="col-sm-2 col-form-label">Publikasi</label>
                    <div class="col-sm-10">
                        <textarea type="link" class="form-control" id="publikasi" name="publikasi"><?= $pegawai['publikasi']; ?></textarea>
                        <?= form_error('publikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="foto" name="foto" value="<?= $pegawai['foto']; ?>">
                        <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <img src="<?= $pegawai['foto']; ?>" width="256" height="256">
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data Kepegawaian</button>
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