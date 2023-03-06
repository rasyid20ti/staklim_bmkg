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
                    <div class="float-right">

                        <a href="<?= base_url(); ?>admin/export_bt" class="btn btn-info mb-2">Export</a>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <!-- <a href="<?= base_url('admin/addtamu'); ?>" class="btn btn-primary mb-3">Tambah Berita Baru</a> -->

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Asal Tamu</th>
                                            <th scope="col">Keperluan</th>
                                            <th scope="col">Nomor Handphone</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($bukutamu as $bt) : ?>
                                            <tr>
                                                <td><?= $bt['tanggal']; ?></td>
                                                <td><?= $bt['nama']; ?></td>
                                                <td><?= $bt['asal']; ?></td>
                                                <td><?= $bt['keperluan']; ?></td>
                                                <td><?= $bt['hp']; ?></td>
                                                <td><?= $bt['status']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/tamustatus/') . $bt['id']; ?>" class="badge badge-success">Ubah Status</a>
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