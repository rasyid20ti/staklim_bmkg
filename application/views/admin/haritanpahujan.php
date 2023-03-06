<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
        </div>
        <div class="float-right">
            <h1 class="h3 mb-4 text-gray 800">
                <a href="<?= base_url(); ?>admin/hth_add" class="btn btn-info mb-2">Tambah Hari Tanpa Hujan</a>
				<a href="<?= base_url(); ?>admin/narasihth" class="btn btn-info mb-2">Narasi Hari Tanpa Hujan</a>
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
							<td>Tanggal Update</td>
							<td>File</td>
							<td>Pengaturan</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($hth as $us) : ?>
							<tr>
								<td> <?= $i; ?>.</td>
								<td><?= $us['periode']; ?></td>
								<td><?= $us['file']; ?></td>
								<!--action-->
								<td>
									<a href="<?= base_url('admin/hthfile/') . $us['id_periode']; ?>" class="badge badge-info">Detail Data</a>
									<a href="<?= base_url('admin/hthhapus/') . $us['id_periode']; ?>" class="badge badge-danger">Hapus</a>
									<a href="<?= base_url('admin/hthdetail/') . $us['id_periode']; ?>" class="badge badge-warning">Peta</a>
									
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
