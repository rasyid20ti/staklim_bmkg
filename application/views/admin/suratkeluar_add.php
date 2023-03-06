<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Surat Keluar
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/suratkeluar_submit') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="no_surat">Nomor Surat</label>
                            <input name="no_surat" type="text" value="<?= set_value('no_surat'); ?>" class="form-control" id="no_surat" placeholder="Nomor Surat ">

                        </div>
                        <div class="form-group">
                            <label for="klasifikasi">Klasifikasi</label>
                            <select name="klasifikasi" value="<?= set_value('klasifikasi'); ?>" id="klasifikasi" class="form-control">
                                <option value="">Pilih Klasifikasi</option>
                                <?php foreach ($klasifikasi as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="tanggal_surat">Tanggal Surat</label>
                            <input name="tanggal_surat" type="date" value="<?= set_value('tanggal_surat'); ?>" class="form-control" id="tanggal_surat" placeholder="Tanggal Surat">

                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input name="perihal" value="<?= set_value('perihal'); ?>" type="text" class="form-control" id="perihal" placeholder="Perihal">

                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input name="tujuan" value="<?= set_value('tujuan'); ?>" type="text" class="form-control" id="tujuan" placeholder="Tujuan">

                        </div>
                        <div class="form-group">
                            <label for="sifat">Sifat Surat</label>
                            <select name="sifat" value="<?= set_value('sifat'); ?>" id="sifat" class="form-control">
                                <option value="">Sifat Surat</option>
                                <option value="Sangat Segera">Sangat Segera</option>
                                <option value="Segera">Segera</option>
                                <option value="Penting">Penting</option>
                                <option value="Biasa">Biasa</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="scanning">Masukkan Soft File (Scanning)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="scanning" id="scanning">
                                <label for="scanning" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Surat_Keluar') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Surat</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>