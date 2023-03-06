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
                    <a href="<?= base_url('admin/beritaAdd'); ?>" class="btn btn-primary mb-3">Tambah Berita Baru</a>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Judul Berita</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Tanggal Publish</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($berita as $b) : ?>
                                            <tr>
                                                <td> <?= $i; ?></td>
                                                <td><img src="<?= $b['foto']; ?>" width="128" height="128"></td>
                                                <td><b><?= $b['title']; ?></b></td>
                                                <td><?= $b['sub']; ?></td>
                                                <td><?= date('d M Y', strtotime($b['date_created'])); ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/beritaEdit/') . $b['id']; ?>" class="badge badge-warning">Edit</a>
                                                    <a href="<?= base_url('admin/beritaDelete/') . $b['id']; ?>" class="badge badge-danger">Hapus</a>
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