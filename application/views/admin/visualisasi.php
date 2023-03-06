<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('admin/visualisasi_add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Menu Visualisasi</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
						<tr>
							<th>No</th>
                            <th>Judul</th>
							<th>Menu</th>
							<!-- <th>Script</th> -->
							<th>Penjelasan</th>
							<th>Penulis</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($visualisasi as $us) : ?>
							<tr>
								<td> <?= $i; ?></td>
								<td><?= $us['judul']; ?></td>
								<td><?= $us['namaMenu']; ?></td>
								<!-- <td><pre><?= $us['script']; ?></pre></td> -->
								<td><?= substr($us['penjelasan'],0,100); ?>...</td>
								<td><?= $us['penulis']; ?></td>
                                <!-- <td><?php if($us['status'] == 0) { ?>
									<div class="alert alert-success" role="alert">Aktif</div>
								<?php } else { ?>
									<div class="alert alert-danger" role="alert">Tidak Aktif</div>	
								<?php } ?>
								</td> -->
								<!--action-->
								<td>
									<a href="<?= base_url('admin/visualisasi_edit/') . $us['idVisual']; ?>" class="badge badge-warning">Edit</a>
									<a href="<?= base_url('admin/visualisasi_delete/') . $us['idVisual']; ?>" class="badge badge-danger">Hapus</a>
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
