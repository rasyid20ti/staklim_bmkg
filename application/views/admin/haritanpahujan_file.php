<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="clearfix">
		<div class="float-left">
			<h1 class="h3 mb-4 text-gray 800"><?php echo $title; ?> </h1>
		</div>
		<div class="float-right">
			<h1 class="h3 mb-4 text-gray 800">
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
							<td>ID Stasiun</td>
							<td>Nama Pos</td>
							<td>Lintang</td>
							<td>Bujur</td>
							<td>HTH</td>
							<td>Ket</td>
							<!-- <td>Action</td> -->
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($hth as $us) : ?>
							<tr>
								<td> <?= $i; ?>.</td>
								<td><?= $us['id_stasiun']; ?></td>
								<td><?= $us['nama_pos']; ?></td>
								<td><?= $us['lintang']; ?></td>
								<td><?= $us['bujur']; ?></td>
								<td><?= $us['hth']; ?></td>
								<td><?= $us['ket']; ?></td>
								<!--action-->
								<!-- <td>
									<a href="<?= base_url('HTH/hapus/') . $us['id_periode']; ?>" class="badge badge-danger">Hapus</a>
								</td> -->
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
