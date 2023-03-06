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
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <a href="<?= base_url('admin/alatAdd'); ?>" class="btn btn-primary mb-3">Tambah Data Alat Baru</a>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <!-- <th scope="col">Foto</th> -->
                                            <th scope="col">Nomor Pos</th>
                                            <th scope="col">Nama Pos</th>
                                            <th scope="col">Lintang</th>
                                            <th scope="col">Bujur</th>
                                            <th scope="col">Elevasi</th>
                                            <th scope="col">Jenis Alat</th>
                                            <th scope="col">Desa</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Kabupaten</th>
                                            <th scope="col">Kondisi Alat</th>
                                            <th scope="col">Kepemilikan Alat</th>
                                            <th scope="col">Nama Pengamat</th>
                                            <th scope="col">Status Pengiriman Data</th>
                                            <th scope="col">Ketersediaan Data</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($alat as $b) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <!-- <td><img src="<?php // $b['foto']; ?>" width="50" height="50"></td> -->
                                                <td><?= $b['nomor_pos']; ?></td>
                                                <td><b><?= $b['nama_pos']; ?></b></td>
                                                <td><?php echo $b['lintang']; ?></td>
                                                <td><?php echo $b['bujur']; ?></td>
                                                <td><?php echo $b['elevasi']; ?></td>
                                                <td><?= $b['jenis_alat']; ?></td>
                                                <td><?= $b['desa']; ?></td>
                                                <td><?= $b['kecamatan']; ?></td>
                                                <td><?= $b['kabupaten']; ?></td>
                                                <td><?= $b['kondisi_alat']; ?></td>
                                                <td><?= $b['kepemilikan_alat']; ?></td>
                                                <td><?= $b['nama_penanggungjawab']; ?></td>
                                                <td><?= $b['pengiriman_data']; ?></td>
                                                <td><?= $b['ketersediaan_data']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/alatEdit/') . $b['nomor_pos']; ?>" class="badge badge-warning">Edit Data</a>
                                                    <a href="<?= base_url('admin/alatDelete/') . $b['nomor_pos']; ?>" class="badge badge-danger">Hapus Data</a><br>
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