<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('admin/kecamatan_add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Kecamatan
            </a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
						<tr>
							<td>No</td>
							<td>Nama Kabupaten</td>
							<td>Nama Kecamatan</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($kecamatan as $us) : ?>
							<tr>
								<td> <?= $i; ?>.</td>
								<td><?= $us['nama_kabupaten']; ?></td>
                                <td><?= $us['nama_kecamatan']; ?></td>
								<!--action-->
								<td>
									<a href="<?= base_url('admin/kecamatan_delete/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
									<a href="<?= base_url('admin/kecamatan_edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
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
