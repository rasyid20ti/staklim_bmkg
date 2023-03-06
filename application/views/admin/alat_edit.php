<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id" value="<?= $alat['nomor_pos']; ?>"> -->
                <div class="form-group row">
                    <label for="nama_pos" class="col-sm-4 col-form-label">Nama Pos</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pos" name="nama_pos" value="<?= $alat['nama_pos']; ?>">
                        <?= form_error('nama_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_alat" class="col-sm-4 col-form-label">Jenis Alat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jenis_alat" name="jenis_alat" value="<?= $alat['jenis_alat']; ?>">
                        <?= form_error('jenis_alat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_pos" class="col-sm-4 col-form-label">Kode Pos</label>
                    <div class="col-sm-8">
                        <select name="kode_pos" id="kode_pos" class="form-control">
                            <option value="1" <?php if ($alat['kode_pos'] == "1") {
                                                    echo "selected";
                                                } ?>>1 - PHK</option>
                            <option value="2" <?php if ($alat['kode_pos'] == "2") {
                                                    echo "selected";
                                                } ?>>2 - ARG</option>
                            <option value="3" <?php if ($alat['kode_pos'] == "3") {
                                                    echo "selected";
                                                } ?>>3 - AWS</option>
                            <option value="4" <?php if ($alat['kode_pos'] == "4") {
                                                    echo "selected";
                                                } ?>>4 - AAWS</option>
                            <option value="5" <?php if ($alat['kode_pos'] == "5") {
                                                    echo "selected";
                                                } ?>>5 - ASRS</option>
                            <option value="6" <?php if ($alat['kode_pos'] == "6") {
                                                    echo "selected";
                                                } ?>>6 - IKRO</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_pos" class="col-sm-4 col-form-label">Nomor Pos</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nomor_pos" name="nomor_pos" value="<?= $alat['nomor_pos']; ?> " readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="lintang" class="col-sm-4 col-form-label">Lintang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lintang" name="lintang" value="<?= $alat['lintang']; ?>">
                        <?= form_error('lintang', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bujur" class="col-sm-4 col-form-label">Bujur</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="bujur" name="bujur" value="<?= $alat['bujur']; ?>">
                        <?= form_error('bujur', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="elevasi" class="col-sm-4 col-form-label">Elevasi (dpl)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="elevasi" name="elevasi" value="<?= $alat['elevasi']; ?>">
                        <?= form_error('elevasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desa" class="col-sm-4 col-form-label">Desa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="desa" name="desa" value="<?= $alat['desa']; ?>">
                        <?= form_error('desa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                    <div class="col-sm-8">
                        <select name="kecamatan" id="kecamatan" class="form-control">
                            <?php foreach ($kec as $p) : ?>
                                <option value="<?= $p['id']; ?>" <?php
                                                                    if ($alat['kecamatan'] == $p['id']) {
                                                                    ?> selected <?php } ?>>
                                                                    <?= $p['nama_kecamatan']; ?></option>
                            <?php endforeach?>
                        </select>
                        <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kabupaten" class="col-sm-4 col-form-label">Kabupaten</label>
                    <div class="col-sm-8">
                    <select name="kabupaten" id="kabupaten" class="form-control">
                            <?php foreach ($kab as $p) : ?>
                                <option value="<?= $p['id_kabupaten']; ?>" <?php
                                                                    if ($alat['kabupaten'] == $p['id_kabupaten']) {
                                                                    ?> selected <?php } ?>>
                                                                    <?= $p['nama_kabupaten']; ?></option>
                            <?php endforeach?>
                        </select>
                        <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="provinsi" name="provinsi" value="<?= $alat['provinsi']; ?>">
                        <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kondisi_alat" class="col-sm-4 col-form-label">Kondisi Alat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kondisi_alat" name="kondisi_alat" value="<?= $alat['kondisi_alat']; ?>">
                        <?= form_error('kondisi_alat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kepemilikan_alat" class="col-sm-4 col-form-label">Kepemilikan Alat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kepemilikan_alat" name="kepemilikan_alat" value="<?= $alat['kepemilikan_alat']; ?>">
                        <?= form_error('kepemilikan_alat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_penanggungjawab" class="col-sm-4 col-form-label">Nama Pengamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_penanggungjawab" name="nama_penanggungjawab" value="<?= $alat['nama_penanggungjawab']; ?>">
                        <?= form_error('nama_penanggungjawab', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan Pengamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $alat['jabatan']; ?>">
                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengiriman_data" class="col-sm-4 col-form-label">Status Pengiriman Data</label>
                    <div class="col-sm-8">
                        <select name="pengiriman_data" id="pengiriman_data" class="form-control">
                            <option value="Aktif" <?php if ($alat['pengiriman_data'] == "Aktif") {
                                                        echo "selected";
                                                    } ?>>Aktif</option>
                            <option value="Tidak Aktif" <?php if ($alat['pengiriman_data'] == "Tidak Aktif") {
                                                            echo "selected";
                                                        } ?>>Tidak Aktif</option>
                            <option value="Lainnya" <?php if ($alat['pengiriman_data'] == "Lainnya") {
                                                        echo "selected";
                                                    } ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ketersediaan_data" class="col-sm-4 col-form-label">Ketersediaan Data</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="ketersediaan_data" name="ketersediaan_data" value="<?= $alat['ketersediaan_data']; ?>">
                        <?= form_error('ketersediaan_data', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inspeksi" class="col-sm-4 col-form-label">Terakhir Inspeksi</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inspeksi" name="inspeksi" value="<?= $alat['inspeksi']; ?>">
                        <!-- <?= form_error('inspeksi', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_alat" class="col-sm-4 col-form-label">Keterangan Alat</label>
                    <div class="col-sm-8">
                        <textarea type="text" rows="10" class="form-control" data-form-field="Message" id="keterangan_alat" name="keterangan_alat"></textarea>
                        <!-- <?= form_error('keterangan_alat', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-4 col-form-label">Link Foto (Google Drive)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="foto" name="foto" value="<?= $alat['foto']; ?>"></input>
                        <!-- <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-8">
                        <!-- <?php
                        // $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
                        ?> -->
                        <a href="<?= base_url('admin/alat'); ?>" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary">Update Data Alat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- End of Main Content -->