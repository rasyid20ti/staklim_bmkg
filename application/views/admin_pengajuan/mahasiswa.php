<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="float-right">
            <a href="<?= base_url(); ?>Mahasiswa/export" class="btn btn-info mb-2">Export</a>
            <!-- <a href="https://docs.google.com/spreadsheets/d/1Y7DmcrRG3TyT66Q8Pi4AvY01su3hNVJ2hH-FSIQEGic/edit?resourcekey#gid=1048905035" class="btn btn-info mb-2">List Dokumen</a> -->
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
                            <td>Pengaturan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa_ajuan as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['tanggal']; ?></td>
                                <td><?= $us['nama']; ?></td>

                                <!--<img src="<?= base_url('/assets2/folder/surat_permohonan/') . $us['surat_permohonan']; ?>" style="width:100px" class="img-thumbnail"></td>
								<img src="<?= base_url('/assets2/folder/surat0/') . $us['surat0']; ?>" style="width:100px" class="img-thumbnail"></td>
								<img src="<?= base_url('/assets2/folder/proposal/') . $us['proposal']; ?>" style="width:100px" class="img-thumbnail"></td>
								<img src="<?= base_url('/assets2/folder/ktp/') . $us['ktp']; ?>" style="width:100px" class="img-thumbnail"></td>
								<img src="<?= base_url('/assets2/folder/ktm/') . $us['ktm']; ?>" style="width:100px" class="img-thumbnail"></td>-->
                                <td><?= $us['informasi']; ?></td>
                                <td><?= $us['unsur']; ?></td>
                                <td><?= $us['status']; ?></td>
                                <!--action-->
                                <td>
                                    <a href="<?= base_url('admin/mahasiswaDetail/') . $us['id']; ?>" class="badge badge-success">Detil Ajuan</a>
                                    <a href="<?= base_url('admin/mahasiswaDelete/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
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