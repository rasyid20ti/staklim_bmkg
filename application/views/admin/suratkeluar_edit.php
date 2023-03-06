<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <!-- <div class="float-right">
            <a href="<?= base_url('Mahasiswa_ajuan') ?>" class="btn btn-secondary btn-sm">
                <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali
            </a>
        </div> -->
    </div>
    <div class="row">
        <?= $this->session->flashdata('message');
        ?>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <iframe src="<?= base_url('assets2/folder/surat0/') . $surat_keluar['scanning']; ?>" style="width:300px" class="img-thumbnail"></iframe>
                        </div>
                        <div class="col mr-2">
                            <div class="card-body">
                                <form action="<?= base_url() ?>admin/submitsuratkeluar_edit/<?= $surat_keluar['id'] ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $surat_keluar['id']; ?>">
                                    <div class="form-group">
                                        <label for="no_surat">Nomor Surat</label>
                                        <input value="<?= $surat_keluar['no_surat']; ?>" name="no_surat" type="text" class="form-control" id="no_surat" placeholder="Nomor Surat">

                                    </div>
                                    <div class="form-group">
                                        <label for="klasifikasi">Klasifikasi</label>
                                        <select name="klasifikasi" id="klasifikasi" class="form-control">
                                            <?php foreach ($klasifikasi as $p) : ?>
                                                <option value="<?= $p['id']; ?>" <?= $surat_keluar['klasifikasi'] == $p['id'] ? 'selected' : '' ?>><?= $p['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_surat">Tanggal Surat</label>
                                        <input value="<?= $surat_keluar['tanggal_surat']; ?>" name="tanggal_surat" type="date" class="form-control" id="tanggal_surat" placeholder="Tanggal Surat">

                                    </div>
                                    <div class="form-group">
                                        <label for="Perihal">Perihal</label>
                                        <input value="<?= $surat_keluar['perihal']; ?>" name="perihal" type="text" class="form-control" id="perihal" placeholder="Perihal">
                                    </div>
                                    <div class="form-group">
                                        <label for="Tujuan">Alamat Tujuan</label>
                                        <input value="<?= $surat_keluar['tujuan']; ?>" name="tujuan" type="text" class="form-control" id="tujuan" placeholder="Alamat">

                                    </div>
                                    <div class="form-group">
                                        <label for="sifat">Sifat Surat</label>
                                        <select name="sifat" id="sifat" class="form-control">
                                            <option value="Sangat Segera" <?php if ($surat_keluar['sifat'] == "Sangat Segera") {
                                                                                echo "selected";
                                                                            } ?>>Sangat Segera</option>
                                            <option value="Segera" <?php if ($surat_keluar['sifat'] == "Segera") {
                                                                        echo "selected";
                                                                    } ?>>Segera</option>
                                            <option value="Penting" <?php if ($surat_keluar['sifat'] == "Penting") {
                                                                        echo "selected";
                                                                    } ?>>Penting</option>
                                            <option value="Biasa" <?php if ($surat_keluar['sifat'] == "Biasa") {
                                                                        echo "selected";
                                                                    } ?>>Biasa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Perihal">Link Drive Surat Keluar</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="scanning" id="scanning">
                                            <label for="scanning" class="custom-file-label">Choose File</label>
                                        </div>
                                        <!-- <input value="<?= $surat_keluar['scanning']; ?>" name="scanning" type="text" class="form-control" id="scanning" placeholder="Link Drive Scanning"> -->
                                    </div>

                                    <a href="<?= base_url('Admin/suratkeluar') ?>" class="btn btn-danger">Tutup</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>