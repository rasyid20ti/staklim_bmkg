<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('admin/mediaDepan_add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Menu Media Footer</a>
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
							<th>Link Media</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($media as $us) : ?>
							<tr>
								<td> <?= $i; ?></td>
								<td><?= $us['judul']; ?></td>
								<td><?= $us['linkMedia']; ?></td>
								<action>
								<td>
									<a href="<?= base_url('admin/mediaDepan_edit/') . $us['idMedia']; ?>" class="badge badge-warning">Edit</a>
									<a href="<?= base_url('admin/mediaDepan_delete/') . $us['idMedia']; ?>" class="badge badge-danger">Hapus</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
				<p>Catatan: Hanya menampilkan Media yang terakhir kali di-inputkan. </p>
			</div>
		</div>
	</div>
</div>
