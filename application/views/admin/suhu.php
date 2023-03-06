<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
		
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
			
        </div>
		<div class="float-right">
        </div>
       
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
		<a href="<?= base_url('admin/importSuhu'); ?>" class="btn btn-primary mb-3">Upload Data</a>
		<a href="<?= base_url('admin/suhu_datalengkap/'); ?>" class="btn btn-primary mb-3">Tabel Data</a>
            <div class="table-responsive">
			
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
						<tr>
							<td>No</td>
							<td>ID Pos</td>
							<td>Nama Pos</td>
							<td>Kabupaten</td>
							<td>Nama Kecamatan</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($suhu as $us) : ?>
							<tr>
								<td> <?= $i; ?>.</td>
								<td><?= $us['id_pos']; ?></td>
								<td><?= $us['nama_pos']; ?></td>
								<td><?= $us['kabupaten']; ?></td>
								<td><?= $us['nama_kecamatan']; ?></td>
								<!--action-->
								<td>
								    <a href="<?= base_url('admin/suhu_chart/') . $us['id_pos']; ?>" class="badge badge-info">Lihat Grafik</a>
									<a href="<?= base_url('admin/suhu_data/') . $us['id_pos']; ?>" class="badge badge-warning">Lihat Data</a>
									<a href="<?= base_url('admin/suhu_hapus/') . $us['id_pos']; ?>" class="badge badge-danger">Hapus</a>
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
