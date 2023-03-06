<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('admin/addtamu'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Tamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Asal Tamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asal" name="asal"></input>
                        <?= form_error('asal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                        <select name="status" id="status" class="form-control">
                            <option value="">Pilih Keperluan Tamu</option>
                            <option value="Permintaan Data" id="Permintaan Data" name="Permintaan Data">Permintaan Data</option>
                            <option value="Kunjungan Internal" id="Kunjungan Internal" name="Kunjungan Internal">Kunjungan Internal</option>
                            <option value="Kunjungan Eksternal" id="Kunjungan Eksternal" name="Kunjungan Eksternal">Kunjungan Eksternal</option>
                            <option value="Kerjasama" id="Kerjasama" name="Kerjasama">Kerjasama</option>
                        </select>
                        <?= form_error('keperluan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-2 col-form-label">Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hp" name="hp"></input>
                        <?= form_error('hp', '<small class="text-danger pl-3">', '</small>'); ?>
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
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
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