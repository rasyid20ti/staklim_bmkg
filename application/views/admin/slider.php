<div class="container-fluid">
	<?= $this->session->flashdata('message'); ?>
	<div class="clearfix">
		<div class="float-left">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
		</div>
		<div class="float-right">
			<a href="<?= base_url('admin/slider_add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Slider
			</a>
		</div>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width='30px'>No</th>
							<th width='250px'>Nama Slider</th>
							<th style='text-align:center;'>Foto Slider</th>
							<th width='100px'>Status Slider</th>
							<th width='100px'>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($slider as $us) : ?>
							<tr>
								<td> <?= $i; ?></td>
								<td><?= $us['namaSlider']; ?></td>
								<td style='text-align:center;'><img src='<?= $us['fotoSlider']; ?>' width="40%"></td>
								<td><?php if ($us['statusSlider'] == 0) { ?>
										<div class="alert alert-success" role="alert">Aktif</div>
									<?php } else { ?>
										<div class="alert alert-danger" role="alert">Tidak Aktif</div>
									<?php } ?>
								</td>
								<!--action-->
								<td>
									<a href="<?= base_url('admin/slider_edit/') . $us['idSlider']; ?>" class="badge badge-warning">Edit</a>
									<a href="<?= base_url('admin/slider_delete/') . $us['idSlider']; ?>" class="badge badge-danger">Hapus</a>
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