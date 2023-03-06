<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-8 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <form action="<?= base_url('admin/alatAdd'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama_pos" class="col-sm-4 col-form-label">Nama Pos</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pos" name="nama_pos" placeholder="Masukkan Nama Pos">
                        <?= form_error('nama_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_alat" class="col-sm-4 col-form-label">Jenis Alat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jenis_alat" name="jenis_alat" placeholder="Masukkan Jenis Alat">
                        <?= form_error('jenis_alat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_pos" class="col-sm-4 col-form-label">Kode Pos</label>
                    <div class="col-sm-8">
                        <select name="kode_pos" id="kode_pos" class="form-control">
                            <option value="1">1 - PHK</option>
                            <option value="2">2 - ARG</option>
                            <option value="3">3 - AWS</option>
                            <option value="4">4 - AAWS</option>
                            <option value="5">5 - ASRS</option>
                            <option value="6">6 - IKRO</option>
                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_pos" class="col-sm-4 col-form-label">Nomor Pos</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nomor_pos" name="nomor_pos" placeholder="Masukkan Nomor Pos">
                        <?= form_error('nomor_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lintang" class="col-sm-4 col-form-label">Lintang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lintang" name="lintang" placeholder="Masukkan Garis Lintang(Decimal Degree)">
                        <?= form_error('lintang', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bujur" class="col-sm-4 col-form-label">Bujur</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="bujur" name="bujur" placeholder="Masukkan Garis Bujur (Decimal Degree)">
                        <?= form_error('bujur', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="elevasi" class="col-sm-4 col-form-label">Elevasi (dpl)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="elevasi" name="elevasi" placeholder="Masukkan Elevasi (Numerik)">
                        <?= form_error('elevasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desa" class="col-sm-4 col-form-label">Desa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Masukkan Nama Desa">
                        <?= form_error('desa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                    <div class="col-sm-8">
                        <select name="kecamatan" id="kecamatan" class="form-control">
                            <option>Pilih Kecamatan</option>
                            <?php foreach ($kec as $p) : ?>
                                <option value="<?= $p['id'] ?>"><?= $p['nama_kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kabupaten" class="col-sm-4 col-form-label">Kabupaten</label>
                    <div class="col-sm-8">
                        <select name="kabupaten" id="kabupaten" class="form-control">
                            <option>Pilih Kabupaten</option>
                            <?php foreach ($kab as $p) : ?>
                                <option value="<?= $p['id_kabupaten'] ?>"><?= $p['nama_kabupaten']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="Riau" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kondisi_alat" class="col-sm-4 col-form-label">Kondisi Alat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kondisi_alat" name="kondisi_alat" placeholder="Masukkan Kondisi Alat">
                        <?= form_error('kondisi_alat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kepemilikan_alat" class="col-sm-4 col-form-label">Kepemilikan Alat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kepemilikan_alat" name="kepemilikan_alat" placeholder="Masukkan Kepemilikan Alat">
                        <?= form_error('kepemilikan_alat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_penanggungjawab" class="col-sm-4 col-form-label">Nama Pengamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_penanggungjawab" name="nama_penanggungjawab" placeholder="Masukkan Nama Pengamat">
                        <?= form_error('nama_penanggungjawab', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan Pengamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan Pengamat">
                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengiriman_data" class="col-sm-4 col-form-label">Status Pengiriman Data</label>
                    <div class="col-sm-8">
                        <select name="pengiriman_data" id="pengiriman_data" class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ketersediaan_data" class="col-sm-4 col-form-label">Ketersediaan Data</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="ketersediaan_data" name="ketersediaan_data" placeholder="Masukkan Ketersediaan Data">
                        <?= form_error('ketersediaan_data', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inpeksi" class="col-sm-4 col-form-label">Terakhir Inpeksi</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inspeksi" name="inspeksi">
                        <!-- <?= form_error('inspeksi', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan_alat" class="col-sm-4 col-form-label">Keterangan Alat</label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control" rows="10" data-form-field="Message" id="keterangan_alat" name="keterangan_alat" placeholder="Masukkan Keterangan"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-4 col-form-label">Link Foto (Google Drive)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="foto" name="foto" placeholder="Masukkan Link Foto"></input>
                        <!-- <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-8">
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
                    <div class="col-sm-8">
                        <!-- <?php
                        // $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
                        ?> -->
                        <a href="<?= base_url('admin/alat'); ?>" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah Alat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- <script>
    $(".").on("keyup", function(){
    var valid = /^d{0,15}(.d{0,10})?$/.test(this.value),
        val = this.value;
    
    if(!valid){
        console.log("Invalid input!");
        this.value = val.substring(0, val.length - 1);
    }
});
</script> -->

<!-- End of Main Content -->