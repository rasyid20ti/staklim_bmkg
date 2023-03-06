<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="judul">Judul</label>
					<input name="judul" type="text" class="form-control" id="judul" placeholder="Judul">
					<?= form_error('judul', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori</label>
					<select name="kategori" id="kategori" class="form-control">
						<option value="">Pilih Kategori</option>
						<option value="Informasi Iklim Dasarian" id="Informasi Iklim Dasarian" name="Informasi Iklim Dasarian">Informasi Iklim Dasarian</option>
						<option value="Prakiraan Musim" id="Prakiraan Musim" name="Prakiraan Musim">Prakiraan Musim</option>
						<option value="Informasi Iklim Bulanan" id="Informasi Iklim Bulanan" name="Informasi Iklim Bulanan">Informasi Iklim Bulanan </option>
					</select>
					<?= form_error('kategori', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="gambar">Gambar</label>
					<input name="gambar" type="text" class="form-control" id="gambar" placeholder="Gambar">
					<?= form_error('gambar', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="gambar_dalam">Gambar Dasarian</label>
					<input name="gambar_dalam" type="text" class="form-control" id="gambar_dalam" placeholder="Gambar Dasarian" value="https://lh3.googleusercontent.com/d/">
					<?= form_error('gambar_dalam', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="penjelasan">Penjelasan</label>
					<textarea name="penjelasan" type="text" class="form-control" id="penjelasan" placeholder="Penjelasan" rows='5'></textarea>
					<?= form_error('penjelasan', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="penulis">Penulis</label>
					<input name="penulis" type="text" class="form-control" id="penulis" placeholder="Penulis" value="Stasiun Klimatologi Riau">
					<?= form_error('penulis', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<a href="<?= base_url('admin/dasarian') ?>" class="btn btn-danger">Tutup</a>
				<button type="submit" href="<?= base_url('admin/dasarian_add') ?>" name="tambah" class="btn btn-primary float-right">Simpan</button>
			</form>
		</div>
	</div>
</div>

<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('penjelasan');
	CKEDITOR.editorConfig = function(config) {
		config.enterMode = 2;
		config.shiftenterMode = 1;
	};
</script>