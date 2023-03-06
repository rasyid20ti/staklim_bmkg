<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Admin/instansi') ?>" class="btn btn-secondary btn-sm">
                <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali
            </a>
        </div>
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

                        <div class="col mr-2">
                            <div class="card-body">
                                <form action="<?= base_url('admin/submitInstansi_detail/' . $instansi_ajuan['id']) ?>" method="POST">
                                    <div class="form-group">
                                        <label for="instansi_ajuan">Nama</label>
                                        <input name="nama" type="text" value="<?= $instansi_ajuan['nama']; ?>" readonly class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">Instansi</label>
                                        <input name="instansi" value="<?= $instansi_ajuan['instansi']; ?>" type="text" readonly class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" value="<?= $instansi_ajuan['email']; ?>" type="text" readonly class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">HP/WA</label>
                                        <input name="hp" value="<?= $instansi_ajuan['hp']; ?>" type="text" readonly class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Alamat</label>
                                        <input name="hp" value="<?= $instansi_ajuan['alamat']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Peruntukan Data</label>
                                        <input name="hp" value="<?= $instansi_ajuan['peruntukan_data']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Perolehan Data</label>
                                        <input name="hp" value="<?= $instansi_ajuan['perolehan_data']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Bentuk Data</label>
                                        <input name="hp" value="<?= $instansi_ajuan['bentuk']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>


                                    <div class="form-group">
                                        <b><a href="<?= base_url('Instansi/filektp/') . $instansi_ajuan['id']; ?>" target="_blank">Akses KTP</a></b>
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= base_url('Instansi/filepermohonan/') . $instansi_ajuan['id']; ?>" target="_blank">Akses Surat Permohonan</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['surat_permohonan']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= base_url('Instansi/fileproposal/') . $instansi_ajuan['id']; ?>" target="_blank">Akses Proposal Kegiatan</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['proposal']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= base_url('Instansi/filesurvey/') . $instansi_ajuan['id']; ?>" target="_blank">Akses Bukti Survey</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['survey']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>

                                    <div class="form-group">
                                        <label for="informasi">Informasi</label>
                                        <input name="informasi" value="<?= $instansi_ajuan['informasi']; ?>" type="text" readonly class="form-control" id="informasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="informasi">Unsur</label>
                                        <input name="unsur" value="<?= $instansi_ajuan['unsur']; ?>" type="text" readonly class="form-control" id="unsur">
                                    </div>
                                    <div class="form-group">
                                        <label for="periode">Lokasi</label>
                                        <input name="lokasi" value="<?= $instansi_ajuan['lokasi']; ?>" type="text" readonly class="form-control" id="lokasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="periode">Periode</label>
                                        <input name="periode" value="<?= $instansi_ajuan['periode']; ?>" type="text" readonly class="form-control" id="informasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="panjang">Panjang Waktu</label>
                                        <input name="panjang" value="<?= $instansi_ajuan['panjang']; ?>" type="text" readonly class="form-control" id="informasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="panjang">Keterangan</label>
                                        <input name="keterangan" value="<?= $instansi_ajuan['keterangan']; ?>" type="text" readonly class="form-control" id="keterangan">
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Token</label>
                                        <input name="token" value="<?= $instansi_ajuan['token']; ?>" type="text" readonly class="form-control" id="token">
                                    </div>
                                    <div class="form-group">
                                        <label for="Status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="Berkas Lengkap" <?php if ($instansi_ajuan['status'] == "Berkas Lengkap") {
                                                                                echo "selected";
                                                                            } ?>>Berkas Lengkap</option>
                                            <option value="Berkas Tidak Lengkap" <?php if ($instansi_ajuan['status'] == "Berkas Tidak Lengkap") {
                                                                                        echo "selected";
                                                                                    } ?>>Berkas Tidak Lengkap</option>
                                            <option value="Data Tidak Lengkap" <?php if ($instansi_ajuan['status'] == "Data Tidak Lengkap") {
                                                                                    echo "selected";
                                                                                } ?>>Data Tidak Lengkap</option>
                                            <option value="Dalam Proses" <?php if ($instansi_ajuan['status'] == "Dalam Proses") {
                                                                                echo "selected";
                                                                            } ?>>Dalam Proses</option>
                                            <option value="Selesaikan Proses Pembayaran" <?php if ($instansi_ajuan['status'] == "Selesaikan Proses Pembayaran") {
                                                                                                echo "selected";
                                                                                            } ?>>Selesaikan Proses Pembayaran</option>
                                            <option value="Permintaan Data Selesai" <?php if ($instansi_ajuan['status'] == "Permintaan Data Selesai") {
                                                                                        echo "selected";
                                                                                    } ?>>Permintaan Data Selesai</option>
                                            <option value="Belum DiProses" <?php if ($instansi_ajuan['status'] == "Belum DiProses") {
                                                                                echo "selected";
                                                                            } ?>>Belum DiProses</option>
                                            <option value="Permintaan Data Sudah Dikirim" <?php if ($instansi_ajuan['status'] == "Permintaan Data Sudah Dikirim") {
                                                                                                echo "selected";
                                                                                            } ?>>Permintaan Data Sudah Dikirim</option>
                                            <option value="Disposisi" <?php if ($instansi_ajuan['status'] == "Disposisi") {
                                                                            echo "selected";
                                                                        } ?>>Disposisi</option>
                                            <option value="Belum Isi Survey" <?php if ($instansi_ajuan['status'] == "Belum Isi Survey") {
                                                                                    echo "selected";
                                                                                } ?>>Belum Isi Survey</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="klasifikasi">Pegawai Penanggungjawab</label>
                                        <select name="pengurus" id="pengurus" class="form-control">
                                            <?php foreach ($pengurus as $p) : ?>
                                                <option value="<?= $p['id']; ?>" <?= $instansi_ajuan['pengurus'] == $p['id'] ? 'selected' : '' ?>><?= $p['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="token">Pesan</label>
                                        <input name="pesan" value="<?= $instansi_ajuan['pesan']; ?>" class="form-control" type="text" id="pesan">
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Link</label>
                                        <input name="link" value="<?= $instansi_ajuan['link']; ?>" class="form-control" type="text" id="link">
                                    </div>
                                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Ubah Status</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!--<div class="col-auto">
                            <embed type="application/pdf" src="<?= base_url('assets2/folder/surat_permohonan/') . $instansi_ajuan['ktp']; ?>" width="600"  height="900"></embed>
                            <img src="<?= base_url('assets2/folder/ktp/') . $instansi_ajuan['ktp']; ?>" style="width:400px" class="img-thumbnail">-->
                </div>
            </div>
        </div>
    </div>
</div>