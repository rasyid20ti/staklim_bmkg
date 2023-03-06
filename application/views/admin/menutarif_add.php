<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama_tarif">Nama Tarif</label>
					<input name="nama_tarif" type="text" class="form-control" id="nama_tarif" placeholder="Nama Tarif">
					<?= form_error('nama_tarif', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="jenis_tarif">Jenis Tarif</label><br>
					<select class="form-control" name="jenis_tarif">
						<option value="default">Pilih Jenis Tarif</option>
						<option value="Informasi Meteorologi, Klimatologi dan Geofisika">Informasi Meteorologi, Klimatologi dan Geofisika</option>
						<option value="Informasi Khusus Meteorologi, Klimatologi dan Geofisika Sesuai Permintaan">Informasi Khusus Meteorologi, Klimatologi dan Geofisika Sesuai Permintaan</option>
					</select>
					<?= form_error('jenis_tarif', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="satuan">Jumlah Satuan</label>
					<input name="satuan" type="text" class="form-control" id="satuan" placeholder="Contoh: per buku">
					<?= form_error('satuan', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="tarif">Jumlah Tarif</label>
					<input name="tarif" type="text" class="form-control" id="tarif" placeholder="Jumlah">
					<?= form_error('tarif', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="waktu">Waktu</label>
					<input name="waktu" type="text" class="form-control" id="waktu" placeholder="Waktu">
					<?= form_error('waktu', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<a href="<?= base_url('admin/menuTarif') ?>" class="btn btn-danger">Tutup</a>
				<button type="submit" href="<?= base_url('admin/menutarif_add') ?>" name="tambah" class="btn btn-primary float-right">Simpan</button>
			</form>
		</div>
	</div>
</div>
</div>