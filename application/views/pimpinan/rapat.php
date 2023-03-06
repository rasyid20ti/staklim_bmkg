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
                    <a href="<?= base_url('pimpinan/addRapat'); ?>" class="btn btn-primary mb-3">Data Rapat Baru</a>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Judul Rapat</th>
                                            <th scope="col">Notulen</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($rapat as $r) : ?>
                                            <tr>
                                                <td><?= date('d F Y', $r['tanggal']); ?></td>
                                                <td><b><?= $r['rapat']; ?></b></td>
                                                <td><b><a href="<?= base_url('pimpinan/export/') . $r['id']; ?>" target="_blank">Detail</b></a></td>
                                                <td>
                                                    <a href="<?= base_url('pimpinan/rapatEdit/') . $r['id']; ?>" class="badge badge-warning">Edit Data</a>
                                                    <a href="<?= base_url('pimpinan/rapatDelete/') . $r['id']; ?>" class="badge badge-danger">Hapus Data</a>
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