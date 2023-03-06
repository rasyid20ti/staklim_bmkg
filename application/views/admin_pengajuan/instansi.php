<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="float-right">
            <a href="<?= base_url(); ?>Instansi/export" class="btn btn-info mb-2">Export</a>
            <!-- <a href="https://docs.google.com/spreadsheets/d/16Ng6i-61oGPckK2eqTEXzMzEJkguFHHdUMavmOmT8A0/edit?resourcekey#gid=510585535" class="btn btn-info mb-2">List Dokumen</a> -->

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
                            <td>Email</td>
                            <td>HP/WA</td>
                            <td>Informasi</td>
                            <td>Asal Instansi</td>
                            <td>Status</td>
                            <td>Pengaturan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($instansi_ajuan as $inst) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $inst['tanggal']; ?></td>
                                <td><?= $inst['nama']; ?></td>
                                <td><?= $inst['email']; ?></td>
                                <td><?= $inst['hp']; ?></td>
                                <!--<td><a href="<?= base_url('Pengajuan/file/') . $inst['id']; ?>" class="badge badge-info">File</a></td>
								<td><a href="<?= base_url('Pengajuan/file/') . $inst['id']; ?>" class="badge badge-info">File</a></td>
								<td><img src="<?= base_url('/assets2/folder/surat_permohonan/') . $inst['surat_permohonan']; ?>" style="width:100px" class="img-thumbnail"></td>
								<td><img src="<?= base_url('/assets2/folder/ktp/') . $inst['ktp']; ?>" style="width:100px" class="img-thumbnail"></td>-->
                                <td><?= $inst['informasi']; ?></td>
                                <td><?= $inst['instansi']; ?></td>
                                <td><?= $inst['status']; ?></td>
                                <!--action-->
                                <td>
                                    <a href="<?= base_url('admin/instansiDetail/') . $inst['id']; ?>" class="badge badge-success">Detil Ajuan</a>
                                    <a href="<?= base_url('admin/instansiDelete/') . $inst['id']; ?>" class="badge badge-danger">Hapus</a>
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