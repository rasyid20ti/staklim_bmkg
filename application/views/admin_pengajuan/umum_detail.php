<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Umum_ajuan') ?>" class="btn btn-secondary btn-sm">
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
                                <form action="<?= base_url('Admin/submit_detail_umum/' . $umum_ajuan['id']) ?>" method="POST">
                                    <div class="form-group">
                                        <label for="instansi_ajuan">Nama</label>
                                        <input name="nama" type="text" value="<?= $umum_ajuan['nama']; ?>" readonly class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">Instansi</label>
                                        <input name="instansi" value="<?= $umum_ajuan['instansi']; ?>" type="text" readonly class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" value="<?= $umum_ajuan['email']; ?>" type="text" readonly class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">HP/WA</label>
                                        <input name="hp" value="<?= $umum_ajuan['hp']; ?>" type="text" readonly class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Alamat</label>
                                        <input name="hp" value="<?= $umum_ajuan['alamat']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Peruntukan Data</label>
                                        <input name="hp" value="<?= $umum_ajuan['peruntukan_data']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Perolehan Data</label>
                                        <input name="hp" value="<?= $umum_ajuan['perolehan_data']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">Bentuk Data</label>
                                        <input name="hp" value="<?= $umum_ajuan['bentuk']; ?>" type="text" readonly="readonly" class="form-control" id="harga">
                                    </div>


                                    <div class="form-group">
                                        <b><a href="<?= base_url('Umum/filektp/') . $umum_ajuan['id']; ?>" target="_blank">Akses KTP</a></b>

                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= base_url('Umum/filepermohonan/') . $umum_ajuan['id']; ?>" target="_blank">Akses Surat Permohonan</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['surat_permohonan']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>

                                    <div class="form-group">
                                        <b><a href="<?= base_url('Umum/filesurvey/') . $umum_ajuan['id']; ?>" target="_blank">Akses Bukti Survey</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['survey']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= base_url('Umum/filebayar/') . $umum_ajuan['id']; ?>" target="_blank">Akses Bukti Bayar</a></b>
                                        <!-- <embed type="application/pdf" src="<?= base_url('assets2/folder/proposal/') . $mahasiswa_ajuan['survey']; ?>" frameborder="0" scrolling="auto" height="100%" width="100%"></embed> -->
                                    </div>



                                    <!-- <div class="form-group">
                                        <b><a href="<?= $umum_ajuan['surat_permohonan']; ?>" target="_blank">Akses Surat Permohonan</a></b>
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= $umum_ajuan['ktp']; ?>" target="_blank">Akses Foto KTP</a></b>
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= $umum_ajuan['bayar']; ?>" target="_blank">Akses Foto Bayar</a></b>
                                    </div>
                                    <div class="form-group">
                                        <b><a href="<?= $umum_ajuan['survey']; ?>" target="_blank">Akses Foto Survey</a></b>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="informasi">Informasi</label>
                                        <input name="informasi" value="<?= $umum_ajuan['informasi']; ?>" type="text" readonly class="form-control" id="informasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="periode">Periode</label>
                                        <input name="periode" value="<?= $umum_ajuan['periode']; ?>" type="text" readonly class="form-control" id="informasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="panjang">Panjang Waktu</label>
                                        <input name="panjang" value="<?= $umum_ajuan['panjang']; ?>" type="text" readonly class="form-control" id="informasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Token</label>
                                        <input name="token" value="<?= $umum_ajuan['token']; ?>" type="text" readonly class="form-control" id="token">
                                    </div>
                                    <!-- <div class="row">

                                        <div class="col-md-12 col-lg-12">
                                            <div id="tracking-pre"></div>
                                            <div id="tracking">
                                                <div class="text-center tracking-status-intransit">
                                                    <p class="tracking-status text-tight">Recording Status Instansi</p>
                                                </div>
                                                <div class="tracking-list">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($search_result as $row) { ?>
                                                        <div class="tracking-item">
                                                            <div class="tracking-icon status-intransit">
                                                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                                                </svg>
                                                                 <i class="fas fa-circle"></i> -->
                                    <!-- </div>
                                                            <div class="tracking-date"><?= $row->create_at ?></span></div>
                                                            <div class="tracking-content"><?= $row->status ?></span></div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="Status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="Berkas Lengkap" <?php if ($umum_ajuan['status'] == "Berkas Lengkap") {
                                                                                echo "selected";
                                                                            } ?>>Berkas Lengkap</option>
                                            <option value="Berkas Tidak Lengkap" <?php if ($umum_ajuan['status'] == "Berkas Tidak Lengkap") {
                                                                                        echo "selected";
                                                                                    } ?>>Berkas Tidak Lengkap</option>
                                            <option value="Data Tidak Lengkap" <?php if ($umum_ajuan['status'] == "Data Tidak Lengkap") {
                                                                                    echo "selected";
                                                                                } ?>>Data Tidak Lengkap</option>
                                            <option value="Dalam Proses" <?php if ($umum_ajuan['status'] == "Dalam Proses") {
                                                                                echo "selected";
                                                                            } ?>>Dalam Proses</option>
                                            <option value="Selesaikan Proses Pembayaran" <?php if ($umum_ajuan['status'] == "Selesaikan Proses Pembayaran") {
                                                                                                echo "selected";
                                                                                            } ?>>Selesaikan Proses Pembayaran</option>
                                            <option value="Permintaan Data Selesai. Silahkan tekan link Berikut Ini " <?php if ($umum_ajuan['status'] == "Permintaan Data Selesai. Silahkan tekan link Berikut Ini ") {
                                                                                        echo "selected";
                                                                                    } ?>>Permintaan Data Selesai</option>
                                            <option value="Belum DiProses" <?php if ($umum_ajuan['status'] == "Belum DiProses") {
                                                                                echo "selected";
                                                                            } ?>>Belum DiProses</option>
                                            <option value="Permintaan Data Sudah Dikirim" <?php if ($umum_ajuan['status'] == "Permintaan Data Sudah Dikirim") {
                                                                                                echo "selected";
                                                                                            } ?>>Permintaan Data Sudah Dikirim</option>
                                            <option value="Disposisi" <?php if ($umum_ajuan['status'] == "Disposisi") {
                                                                            echo "selected";
                                                                        } ?>>Disposisi</option>
                                            <option value="Belum Isi Survey" <?php if ($umum_ajuan['status'] == "Belum Isi Survey") {
                                                                                    echo "selected";
                                                                                } ?>>Belum Isi Survey</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="klasifikasi">Pegawai Penanggungjawab</label>
                                        <select name="pengurus" id="pengurus" class="form-control">
                                            <?php foreach ($pengurus as $p) : ?>
                                                <option value="<?= $p['id']; ?>" <?= $umum_ajuan['pengurus'] == $p['id'] ? 'selected' : '' ?>><?= $p['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="token">Pesan</label>
                                        <input name="pesan" value="<?= $umum_ajuan['pesan']; ?>" class="form-control" type="text" id="pesan">
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Link</label>
                                        <input name="link" value="<?= $umum_ajuan['link']; ?>" class="form-control" type="text" id="link">
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