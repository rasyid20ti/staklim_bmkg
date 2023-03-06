<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="<?= base_url('assets2/img/pegawai/zia.jpg'); ?>" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <center>
                                    <h3 class="mb-5 text-uppercase">Selamat datang di Stasiun Klimatologi Riau</h3>
                                </center>
                                <p class="mb-4"><?= $this->session->flashdata('message'); ?></p>
                                <form action="<?= base_url('auth/guestinput'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group first">
                                        <label for="username">Tanggal Berkunjung</label>
                                        <input type="text" class="form-control form-control-user" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Nama Tamu</label>
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Asal Tamu</label>
                                        <input type="text" class="form-control form-control-user" id="asal" name="asal">
                                        <?= form_error('asal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Keperluan</label>
                                        <select name="keperluan" id="keperluan" class="form-control">
                                            <option value="">Pilih Keperluan Tamu</option>
                                            <option value="Permintaan Data" id="Permintaan Data" name="Permintaan Data">Permintaan Data</option>
                                            <option value="Kunjungan Internal" id="Kunjungan Internal" name="Kunjungan Internal">Kunjungan Internal</option>
                                            <option value="Kunjungan Eksternal" id="Kunjungan Eksternal" name="Kunjungan Eksternal">Kunjungan Eksternal</option>
                                        </select>
                                        <?= form_error('keperluan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password">Nomor Handphone</label>
                                        <input type="text" class="form-control form-control-user" id="hp" name="hp">
                                        <?= form_error('hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <input type="submit" value="Check In" class="btn btn-block btn-primary">
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>