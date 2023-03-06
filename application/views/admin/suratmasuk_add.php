<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Surat Masuk
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/suratmasuk_tambah') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="no_surat">Nomor Surat</label>
                            <input name="no_surat" type="text" value="<?= set_value('no_surat'); ?>" class="form-control" id="no_surat" placeholder="Nomor Surat ">
                            <?= form_error('no_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_surat">Tanggal Surat</label>
                            <input name="tanggal_surat" type="date" value="<?= set_value('tanggal_surat'); ?>" class="form-control" id="tanggal_surat" placeholder="Tanggal Surat">
                            <?= form_error('tanggal_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input name="perihal" value="<?= set_value('perihal'); ?>" type="text" class="form-control" id="perihal" placeholder="Perihal">
                            <?= form_error('perihal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dari">Asal Surat</label>
                            <input name="dari" value="<?= set_value('dari'); ?>" type="text" class="form-control" id="tujuan" placeholder="Asal Surat">
                            <?= form_error('dari', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Sifat Surat</label>
                            <select name="jenis" value="<?= set_value('jenis'); ?>" id="jenis" class="form-control">
                                <option value="">Sifat Surat</option>
                                <option value="Umum">Umum</option>
                                <option value="Rahasia">Rahasia</option>
                                <option value="Sangat Segera">Sangat Segera</option>
                                <option value="Segera">Segera</option>
                                <option value="Penting">Penting</option>
                                <option value="Biasa">Biasa</option>
                            </select>
                            <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <!--<div class="form-group">
							<label for="kompetensi">Kompetensi</label>
							<input name="kompetensi" value="<?= set_value('kompetensi'); ?>" type="text" class="form-control" id="kompetensi" placeholder="Kompetensi">
							<?= form_error('kompetensi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>-->
                        <div class="form-group">
                            <label for="dari">Scanning Surat Masuk</label>
                            <!-- <input name="scanning" value="<?= set_value('scanning'); ?>" type="text" class="form-control" id="scanning" placeholder="Link Drive Surat Masuk"> -->
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="scanning" name="scanning">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>

                        </div>
                        <a href="<?= base_url('admin/suratmasuk'); ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" href="<?= base_url('admin/suratmasuk_tambah') ?>" name="tambah" class="btn btn-primary float-right">Simpan Surat</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>