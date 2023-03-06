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

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tampilan Heading</th>
                                            <th scope="col">Link Foto</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($headline as $h) : ?>
                                            <tr>
                                                <td><img src="<?= $h['linkfoto']; ?>" width="128" height="128"></td>
                                                <td><b><?= $h['linkfoto']; ?></b></td>
                                                <td>
                                                    <a href="<?= base_url('admin/headlineEdit/') . $h['id']; ?>" class="badge badge-success">Ubah Header</a>
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