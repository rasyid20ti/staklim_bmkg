<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('admin/mahasiswa') ?>" class="btn btn-secondary btn-sm">
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
                                <form action="<?= base_url('admin/submitMhs_detail/' . $mahasiswa_ajuan['id']) ?>" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" type="text" value="<?= $mahasiswa_ajuan['nama']; ?>" readonly="readonly" class="form-control" id="nama">
                                    </div>

                                    <div class="form-group">
                                        <label for="universitas">Universitas</label>
                                        <input name="universitas" value="<?= $mahasiswa_ajuan['universitas']; ?>" type="text" readonly="readonly" class="form-control" id="universitas">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" value="<?= $mahasiswa_ajuan['email']; ?>" type="text" readonly="readonly" class="form-control" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="hp">HP/WA</label>
                                        <input name="hp" value="<?= $mahasiswa_ajuan['hp']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>

                                    <div class="form-group">
                                        <label for="hp">Alamat</label>
                                        <input name="hp" value="<?= $mahasiswa_ajuan['alamat']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>

                                    <div class="form-group">
                                        <label for="hp">Peruntukan Data</label>
                                        <input name="hp" value="<?= $mahasiswa_ajuan['peruntukan_data']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>

                                    <div class="form-group">
                                        <label for="hp">Perolehan Data</label>
                                        <input name="hp" value="<?= $mahasiswa_ajuan['perolehan_data']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>

                                    <div class="form-group">
                                        <label for="hp">Bentuk Data</label>
                                        <input name="hp" value="<?= $mahasiswa_ajuan['bentuk']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <!-- 
                                    <div class="form-group">
                                        <b><a href="<?= $mahasiswa_ajuan['ktp']; ?>" target="_blank">Akses Foto KTP</a></b>
                                    </div>-->

                                    <div class="form-group">
                                        <b><a href="<?= base_url('Mahasiswa/filektp/') . $mahasiswa_ajuan['id']; ?>" target="_blank">Akses KTP</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['ktp']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= base_url('Mahasiswa/filektm/') . $mahasiswa_ajuan['id']; ?>" target="_blank">Akses KTM</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['ktm']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= base_url('Mahasiswa/fileproposal/') . $mahasiswa_ajuan['id']; ?>" target="_blank">Akses Proposal</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['proposal']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= base_url('Mahasiswa/filesurat0/') . $mahasiswa_ajuan['id']; ?>" target="_blank">Akses Surat 0 Rupiah</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['surat0']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= base_url('Mahasiswa/filepermohonan/') . $mahasiswa_ajuan['id']; ?>" target="_blank">Akses Surat Permohonan</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['surat_permohonan']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= base_url('Mahasiswa/filesurvey/') . $mahasiswa_ajuan['id']; ?>" target="_blank">Akses Bukti Survey</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['survey']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>
                                    <!-- <div class="form-group">
                                        <b><a href="<?= $mahasiswa_ajuan['proposal']; ?>" target="_blank">Akses Proposal</a></b>
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= $mahasiswa_ajuan['surat0']; ?>" target="_blank">Akses Surat Nol Rupiah</a></b>
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= $mahasiswa_ajuan['ktm']; ?>" target="_blank">Akses Foto KTM</a></b>
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= $mahasiswa_ajuan['survey']; ?>" target="_blank">Akses Bukti Survei</a></b>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="informasi">Informasi</label>
                                        <input name="informasi" value="<?= $mahasiswa_ajuan['informasi']; ?>" type="text" readonly="readonly" class="form-control" id="informasi">
                                    </div>

                                    <div class="form-group">
                                        <label for="informasi">Unsur</label>
                                        <input name="unsur" value="<?= $mahasiswa_ajuan['unsur']; ?>" type="text" readonly="readonly" class="form-control" id="unsur">
                                    </div>

                                    <div class="form-group">
                                        <label for="informasi">Lokasi</label>
                                        <input name="lokasi" value="<?= $mahasiswa_ajuan['lokasi']; ?>" type="text" readonly="readonly" class="form-control" id="lokasi">
                                    </div>

                                    <div class="form-group">
                                        <label for="waktu">Waktu</label>
                                        <input name="waktu" value="<?= $mahasiswa_ajuan['waktu']; ?>" type="text" readonly="readonly" class="form-control" id="waktu">
                                    </div>

                                    <div class="form-group">
                                        <label for="panjang">Panjang Data</label>
                                        <input name="panjang" value="<?= $mahasiswa_ajuan['panjang_data']; ?>" type="text" readonly="readonly" class="form-control" id="panjang_data">
                                    </div>

                                    <div class="form-group">
                                        <label for="panjang">Keterangan</label>
                                        <input name="keterangan" value="<?= $mahasiswa_ajuan['keterangan']; ?>" type="text" readonly="readonly" class="form-control" id="keterangan">
                                    </div>

                                    <div class="form-group">
                                        <label for="token">Token</label>
                                        <input name="token" value="<?= $mahasiswa_ajuan['token']; ?>" type="text" readonly="readonly" class="form-control" id="token">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="Berkas Lengkap" <?php if ($mahasiswa_ajuan['status'] == "Berkas Lengkap") {
                                                                                echo "selected";
                                                                            } ?>>Berkas Lengkap</option>
                                            <option value="Berkas Tidak Lengkap" <?php if ($mahasiswa_ajuan['status'] == "Berkas Tidak Lengkap") {
                                                                                        echo "selected";
                                                                                    } ?>>Berkas Tidak Lengkap</option>
                                            <option value="Data Tidak Lengkap" <?php if ($mahasiswa_ajuan['status'] == "Data Tidak Lengkap") {
                                                                                    echo "selected";
                                                                                } ?>>Data Tidak Lengkap</option>
                                            <option value="Dalam Proses" <?php if ($mahasiswa_ajuan['status'] == "Dalam Proses") {
                                                                                echo "selected";
                                                                            } ?>>Dalam Proses</option>
                                            <option value="Selesaikan Proses Pembayaran" <?php if ($mahasiswa_ajuan['status'] == "Selesaikan Proses Pembayaran") {
                                                                                                echo "selected";
                                                                                            } ?>>Selesaikan Proses Pembayaran</option>
                                            <option value="Permintaan Data Selesai" <?php if ($mahasiswa_ajuan['status'] == "Permintaan Data Selesai") {
                                                                                        echo "selected";
                                                                                    } ?>>Permintaan Data Selesai</option>
                                            <option value="Belum DiProses" <?php if ($mahasiswa_ajuan['status'] == "Belum DiProses") {
                                                                                echo "selected";
                                                                            } ?>>Belum DiProses</option>
                                            <option value="Permintaan Data Sudah Dikirim" <?php if ($mahasiswa_ajuan['status'] == "Permintaan Data Sudah Dikirim") {
                                                                                                echo "selected";
                                                                                            } ?>>Permintaan Data Sudah Dikirim</option>
                                            <option value="Disposisi" <?php if ($mahasiswa_ajuan['status'] == "Disposisi") {
                                                                            echo "selected";
                                                                        } ?>>Disposisi</option>
                                            <option value="Belum Isi Survey" <?php if ($mahasiswa_ajuan['status'] == "Belum Isi Survey") {
                                                                                    echo "selected";
                                                                                } ?>>Belum Isi Survey</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="klasifikasi">Pegawai Penanggungjawab</label>
                                        <select name="pengurus" id="pengurus" class="form-control">
                                            <?php foreach ($pengurus as $p) : ?>
                                                <option value="<?= $p['id']; ?>" <?= $mahasiswa_ajuan['pengurus'] == $p['id'] ? 'selected' : '' ?>><?= $p['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="token">Pesan</label>
                                        <input name="pesan" value="<?= $mahasiswa_ajuan['pesan']; ?>" class="form-control" type="text" id="pesan">
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Link</label>
                                        <input name="link" value="<?= $mahasiswa_ajuan['link']; ?>" class="form-control" type="text" id="link">
                                    </div>
                                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Ubah Status</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>