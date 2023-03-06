<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url(); ?>admin/suratkeluar_tambah" class="btn btn-info mb-2">Tambah Surat Keluar</a>
            <a href="<?= base_url(); ?>admin/export_sk" class="btn btn-info mb-2">Export</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>No Surat</td>
                            <td>Klasifikasi</td>
                            <td>Tanggal Surat</td>
                            <td>Perihal</td>
                            <td>Tujuan</td>
                            <td>Sifat Surat</td>
                            <!-- <td>Link Surat</td> -->

                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($surat_keluar as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <!--<td><img src="<?= base_url('assets/folder/dosen/') . $us['scanning']; ?>" style="width:100px" class="img-thumbnail"></td>-->
                                <td><?= $us['no_surat']; ?></td>
                                <td><?= $us['klasifikasi']; ?></td>
                                <td><?= $us['tanggal_surat']; ?></td>
                                <td><?= $us['perihal']; ?></td>
                                <td><?= $us['tujuan']; ?></td>
                                <td><?= $us['sifat']; ?></td>
                                <!-- <td><a href="<?= $us['scanning']; ?>" target="_blank">Surat <?= $us['perihal']; ?></td> -->
                                <!--action-->
                                <td>
                                    <a href="<?= base_url('admin/suratkeluar_edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('admin/suratkeluar_file/') . $us['id']; ?>" class="badge badge-warning">File</a>
                                    <a href="<?= base_url('admin/suratkeluar_delete/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>

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