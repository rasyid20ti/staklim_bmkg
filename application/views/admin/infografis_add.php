<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="judul">Menu</label>
					<select name="menu" id="menu" class="form-control">
						<option value="">Pilih Menu Layanan</option>
						<?php foreach ($menuLayanan as $us) : ?>
							<option value="<?= $us['idMenu']; ?>"><?= $us['namaMenu'] ?></option>
						<?php endforeach; ?>
					</select>
					<?= form_error('menu', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="judul">Judul</label>
					<input name="judul" type="text" class="form-control" id="judul" placeholder="Judul"></input>
					<?= form_error('judul', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="isi">Isi</label>
					<textarea type="text" class="form-control" rows="10" data-form-field="Message" id="isi" name="isi"></textarea>
					<?= form_error('isi', '<small class="text-denger pl-3">', '</small>'); ?>

				</div>
				<div class="form-group">
					<label for="gambar1">Gambar Awal</label>
					<input name="gambar1" type="text" class="form-control" id="gambar1" placeholder="Gambar Awal">
				</div>
				<div class="form-group">
					<label for="gambar2">Gambar Infografis</label>
					<input name="gambar2" type="text" class="form-control" id="gambar2" placeholder="Gambar Infografis" value="https://lh3.googleusercontent.com/d/">
				</div>
				<div class="form-group">
					<label for="penulis">Penulis</label>
					<input name="penulis" type="text" class="form-control" id="penulis" placeholder="Penulis" value="Stasiun Klimatologi Riau">
				</div>
				<a href="<?= base_url('admin/infografis') ?>" class="btn btn-danger">Tutup</a>
				<button type="submit" href="<?= base_url('admin/infografis_add') ?>" name="tambah" class="btn btn-primary float-right">Simpan</button>
			</form>
		</div>
	</div>
</div>

<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('isi');
	CKEDITOR.editorConfig = function(config) {
		config.enterMode = 2;
		config.shiftenterMode = 1;
	};
</script>