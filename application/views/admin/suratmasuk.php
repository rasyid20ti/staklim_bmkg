<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
        </div>
        <div class="float-right">
            <h1 class="h3 mb-4 text-gray 800">
                <a href="<?= base_url(); ?>admin/suratmasuk_tambah" class="btn btn-info mb-2">Tambah Surat Masuk</a>
                <a href="<?= base_url(); ?>admin/export_sm" class="btn btn-info mb-2">Export</a>
            </h1>
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
                            <td>Tanggal Surat</td>
                            <td>Perihal</td>
                            <td>Asal Surat</td>
                            <td>Sifat Surat</td>
                            <!-- <td>Link Surat</td> -->
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($surat_masuk as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['no_surat']; ?></td>
                                <td><?= $us['tanggal_surat']; ?></td>
                                <td><?= $us['perihal']; ?></td>
                                <td><?= $us['dari']; ?></td>
                                <td><?= $us['jenis']; ?></td>
                                <!-- <td><b><a href="<?= $us['scanning']; ?>" target="_blank"><?= $us['perihal']; ?></a></b></td> -->
                                <!--action-->
                                <td>
                                    <a href="<?= base_url('admin/suratmasuk_edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('admin/suratmasuk_file/') . $us['id']; ?>" class="badge badge-warning">File</a>
                                    <a href="<?= base_url('admin/suratmasuk_delete/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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