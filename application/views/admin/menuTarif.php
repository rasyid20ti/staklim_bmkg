<div class="container-fluid">
	<?= $this->session->flashdata('message'); ?>
	<div class="clearfix">
		<div class="float-left">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
		</div>
		<div class="float-right">
			<a href="<?= base_url('admin/menutarif_add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Menu Tarif</a>
		</div>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th width="150px">Nama Tarif</th>
							<th>Jenis Tarif</th>
							<th width="10px">Satuan</th>
							<th width="90px">Tarif</th>
							<th>Waktu</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($menuTarif as $us) : ?>
							<tr>
								<td> <?= $i; ?></td>
								<td><?= $us['namaTarif']; ?></td>
								<td><?= $us['jenis']; ?></td>
								<td><?= $us['satuan']; ?></td>
								<td><?= $us['tarif']; ?></td>
								<td><?= $us['waktu']; ?></td>
								<!-- <td><?php if ($us['statusSlider'] == 0) { ?>
									<div class="alert alert-success" role="alert">Aktif</div>
								<?php } else { ?>
									<div class="alert alert-danger" role="alert">Tidak Aktif</div>	
								<?php } ?>
								</td> -->
								<!--action-->
								<td>
									<a href="<?= base_url('admin/menutarif_edit/') . $us['idTarif']; ?>" class="badge badge-warning">Edit</a>
									<a href="<?= base_url('admin/tarifDelete/') . $us['idTarif']; ?>" class="badge badge-danger">Hapus</a>
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