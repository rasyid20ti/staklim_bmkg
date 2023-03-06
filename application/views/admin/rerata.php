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
                    <a href="<?= base_url('admin/importRerata'); ?>" class="btn btn-primary mb-3">Upload Data</a>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nomor Pos</th>
                                            <th scope="col">Nama Pos</th>
                                            <th scope="col">Januari</th>
                                            <th scope="col">Februari</th>
                                            <th scope="col">Maret</th>
                                            <th scope="col">April</th>
                                            <th scope="col">Mei</th>
                                            <th scope="col">Juni</th>
                                            <th scope="col">Juli</th>
                                            <th scope="col">Agustus</th>
                                            <th scope="col">September</th>
                                            <th scope="col">Oktober</th>
                                            <th scope="col">November</th>
                                            <th scope="col">Desember</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($rerata as $b) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $b['id_pos']; ?></td>
                                                <td><?= $b['nama_pos']; ?></td>
                                                <td><?= $b['jan']; ?></td>
                                                <td><?= $b['feb']; ?></td>
                                                <td><?= $b['mar']; ?></td>
                                                <td><?= $b['apr']; ?></td>
                                                <td><?= $b['mei']; ?></td>
                                                <td><?= $b['jun']; ?></td>
                                                <td><?= $b['jul']; ?></td>
                                                <td><?= $b['ags']; ?></td>
                                                <td><?= $b['sept']; ?></td>
                                                <td><?= $b['okt']; ?></td>
                                                <td><?= $b['nov']; ?></td>
                                                <td><?= $b['desem']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/rerataDelete/') . $b['id_pos']; ?>" class="badge badge-danger">Hapus Data</a><br>
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