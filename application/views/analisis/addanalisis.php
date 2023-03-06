<!-- Begin Page Content -->
<div class="container-fluid">
    <center>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    </center>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('analisis/submitanalisis/') . $analisis['id']; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $analisis['id']; ?>">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Judul Analisa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $analisis['title']; ?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <hr>

                <!-- BAGIAN ANALISIS CURAH HUJAN -->

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian I</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Analisis Curah Hujan" readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="analisisch" class="col-sm-2 col-form-label">Drive Curah Hujan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="analisisch" name="analisisch" value="<?= $analisis['analisisch']; ?>">
                        <?= form_error('analisisch', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_ch" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_ch" name="keterangan_ch" value="<?= $analisis['keterangan_ch']; ?>"></textarea>
                    </div>
                </div>
                <hr>

                <!-- BAGIAN ANALISIS CURAH HUJAN -->

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian II</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Analisis Sifat Hujan" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="analisissh" class="col-sm-2 col-form-label">Drive Sifat Hujan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="analisissh" name="analisissh" value="<?= $analisis['analisissh']; ?>">
                        <?= form_error('analisissh', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_sh" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_sh" name="keterangan_sh" value="<?= $analisis['keterangan_sh']; ?>"></textarea>
                    </div>
                </div>
                <hr>

                <!-- BAGIAN PRAKIRAAN CURAH HUJAN DETERMINISTIK -->

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian III</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Prakiraan Curah Hujan Deterministik" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prakiraan_chd" class="col-sm-2 col-form-label">Drive Curah Hujan Deterministik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prakiraan_chd" name="prakiraan_chd" value="<?= $analisis['prakiraan_chd']; ?>">
                        <?= form_error('prakiraan_chd', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_chd" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_chd" name="keterangan_chd" value="<?= $analisis['keterangan_chd']; ?>"></textarea>
                    </div>
                </div>
                <hr>

                <!-- BAGIAN PRAKIRAAN SIFAT HUJAN DETERMINISTIK -->

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian IV</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Prakiraan Sifat Hujan Deterministik" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prakiraan_shd" class="col-sm-2 col-form-label">Drive Sifat Hujan Deterministik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prakiraan_shd" name="prakiraan_shd" value="<?= $analisis['prakiraan_shd']; ?>">
                        <?= form_error('prakiraan_shd', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_shd" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_shd" name="keterangan_shd" value="<?= $analisis['keterangan_shd']; ?>"></textarea>
                    </div>
                </div>
                <hr>

                <!-- BAGIAN PRAKIRAAN CURAH HUJAN PROBABILISTIK -->

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian V</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Prakiraan Curah Hujan Probabilistik" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prakiraan_chp" class="col-sm-2 col-form-label">Drive Curah Hujan Probabilistik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prakiraan_chp" name="prakiraan_chp" value="<?= $analisis['prakiraan_chp']; ?>">
                        <?= form_error('prakiraan_chp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_chp" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_chp" name="keterangan_chp" value="<?= $analisis['keterangan_chp']; ?>"></textarea>
                    </div>
                </div>
                <hr>

                <!-- BAGIAN PRAKIRAAN DAERAH POTENSI BANJIR -->

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian VI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Prakiraan Daerah Potensi Banjir" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prakiraan_dpb" class="col-sm-2 col-form-label">Drive Daerah Potensi Banjir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prakiraan_dpb" name="prakiraan_dpb" value="<?= $analisis['prakiraan_dpb']; ?>">
                        <?= form_error('prakiraan_dpb', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_dpb" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_dpb" name="keterangan_dpb" value="<?= $analisis['keterangan_dpb']; ?>"></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="petugas" class="col-sm-2 col-form-label">Petugas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="petugas" name="petugas" value="<?= $user['name']; ?>" readonly>
                        <?= form_error('petugas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <hr>

                <!-- TOMBOL SUBMIT -->

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data Analisis</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('keterangan_ch');
</script>
<script>
    CKEDITOR.replace('keterangan_sh');
</script>
<script>
    CKEDITOR.replace('keterangan_chd');
</script>
<script>
    CKEDITOR.replace('keterangan_shd');
</script>
<script>
    CKEDITOR.replace('keterangan_chp');
</script>
<script>
    CKEDITOR.replace('keterangan_dpb');
</script>
<!-- End of Main Content -->