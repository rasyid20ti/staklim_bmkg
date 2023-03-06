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
                    <a href="<?= base_url('admin/addBuletin'); ?>" class="btn btn-primary mb-3">Tambah Buletin Baru</a>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th scope="col">Judul Buletin</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Tanggal Publish</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($buletin as $b) : ?>
                                            <tr>
                                                <td> <?= $i; ?></td>
                                                <td><b><a href="<?= $b['link']; ?>" target="_blank"><?= $b['title']; ?></a></b></td>
                                                <td><?= $b['author']; ?></td>
                                                <td><?= date('d M Y', strtotime($b['date_published'])); ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/editBuletin/') . $b['id']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('admin/buletinDelete/') . $b['id']; ?>" class="badge badge-danger">Hapus</a>
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