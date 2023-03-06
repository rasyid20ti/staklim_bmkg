<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg">
                    <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="h3 mb-4 text-gray-800">
                        <center><?= $title; ?></center>
                    </h1>
                    <a href="<?= base_url('pegawai/pegawaiAdd'); ?>" class="btn btn-primary mb-3">Tambah Pegawai Baru</a>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th scope="col">NIP</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tempat Tanggal Lahir</th>
                                            <th scope="col">Golongan</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Kompetensi</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Pendidikan Terakhir</th>
                                            <th scope="col">Publikasi</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pegawai as $p) : ?>
                                            <tr>
                                                <td><b><?= $i; ?></b></td>
                                                <td><b><?= $p['nip']; ?></b></td>
                                                <td><b><?= $p['nama']; ?></b></td>
                                                <td><b><?= $p['ttl']; ?></b></td>
                                                <td><b><?= $p['golongan']; ?></b></td>
                                                <td><b><?= $p['jabatan']; ?></b></td>
                                                <td><b><?= $p['kompetensi']; ?></b></td>
                                                <td><b><?= $p['email']; ?></b></td>
                                                <td><b><?= $p['pendidikan']; ?></b></td>
                                                <td><b><?= $p['publikasi']; ?></b></td>
                                                <td>
                                                    <a href="<?= base_url('pegawai/pegawaiEdit/') . $p['id']; ?>" class="badge badge-warning">Ubah Data</a>
                                                    <a href="<?= base_url('pegawai/pegawaiDelete/') . $p['id']; ?>" class="badge badge-danger">Hapus Data</a><br>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->