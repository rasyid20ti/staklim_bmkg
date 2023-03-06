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
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal">Tambah Pegawai Baru</a>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Level User</th>
                                            <th scope="col">Status User</th>
                                            <th scope="col">Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($userdb as $u) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $u['name']; ?></td>
                                                <td><?= $u['email']; ?></td>
                                                <td><?= $u['role_id']; ?></td>
                                                <td><?= $u['is_active']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('pimpinan/resetUser/') . $u['id']; ?>" class="badge badge-success">Reset Akun</a>
                                                    <a href="<?= base_url('pimpinan/deleteUser/') . $u['id']; ?>" class="badge badge-danger">Hapus Akun</a>
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

                    <div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newUserModalLabel">Add New Sub Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('pimpinan/addUser'); ?>" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama pegawai beserta gelar">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email pegawai">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Buat Akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>