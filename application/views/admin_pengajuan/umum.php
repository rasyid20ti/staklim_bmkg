<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="float-right">
            <a href="<?= base_url(); ?>Umum/export" class="btn btn-info mb-2">Export</a>
            <!-- <a href=" https://docs.google.com/spreadsheets/d/16Ng6i-61oGPckK2eqTEXzMzEJkguFHHdUMavmOmT8A0/edit?resourcekey#gid=510585535" class="btn btn-info mb-2">List Dokumen</a>
            <a href="https://docs.google.com/spreadsheets/d/1gaRSwab-ZX3cTxSJHA8XH3JPkOIfQLp0V6kQAqrU7CY/edit?resourcekey#gid=1095128100" class="btn btn-info mb-2">List Pembayaran</a> -->
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tanggal</td>
                            <td>Nama</td>
                            <td>Informasi</td>
                            <td>Unsur</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($umum_ajuan as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['informasi']; ?></td>
                                <td><?= $us['unsur']; ?></td>
                                <td><?= $us['status']; ?></td>
                                <!--action-->
                                <td>
                                    <a href="<?= base_url('admin/umum_detail/') . $us['id']; ?>" class="badge badge-success">Detil Ajuan</a>
                                    <a href="<?= base_url('admin/hapus_umum/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>