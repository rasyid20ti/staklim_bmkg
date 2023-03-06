<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Terbaru Pengajuan Mahasiswa</h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Informasi</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa_ajuan as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td><?= $us['informasi']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td>
                                <a href="<?= base_url('Mahasiswa_ajuan/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
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