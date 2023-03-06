<!-- <div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">
		<center><?= $title; ?></center>
	</h1>
	<div class="row">
		<div class="col-lg-8">
			<form action="<?= base_url() ?>admin/dasarian_edit/<?= $dasarian['id_dasarian'] ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_dasarian" value="<?= $dasarian['id_dasarian']; ?>">
				<div class="form-group row">
					<label for="judul" class="col-sm-2 col-form-label">Judul</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?= $dasarian['judul']; ?>"></input>
						<?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori Lama</label>
					<input type="text" class="form-control" name="kategori" value="<?= $dasarian['kategori']; ?>" disabled>
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
					<label for="gambar">Gambar Awal</label>
					<input type="text" class="form-control" id="gambar" name="gambar" placeholder="Gambar Awal" value="<?= $dasarian['gambar']; ?>"></input>
					<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="gambar_dalam">Gambar Dasarian</label>
					<input name="gambar_dalam" type="text" class="form-control" id="gambar_dalam" placeholder="Gambar Dasarian" value="<?= $dasarian['gambar_dalam']; ?>"></input>
				</div>
				<div class="form-group">
					<label for="penjelasan">Penjelasan</label>
					<textarea name="penjelasan" type="text" class="form-control" id="penjelasan" placeholder="Penjelasan" rows='5'><?= $dasarian['penjelasan']; ?></textarea>
				</div>
				<div class="form-group row">
					<label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" value="<?= $dasarian['penulis']; ?>"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" class="form-control" id="status">
						<option value="1">Aktif</option>
						<option value="0">Non-aktif</option>
					</select>
				</div>
				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" name="edit" class="btn btn-primary">Update</button>
					</div>
				</div>
			</form>
		</div>
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
End of Main Content -->

<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="<?= base_url() ?>admin/dasarian_edit/<?= $dasarian['id_dasarian'] ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id_dasarian" value="<?= $dasarian['id_dasarian']; ?>">
				<div class="form-group">
					<label for="judul">Judul</label>
					<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?= $dasarian['judul']; ?>"></input>
					<?= form_error('judul', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori</label>
					<input type="text" class="form-control" name="kategori" value="<?= $dasarian['kategori']; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="gambar">Gambar</label>
					<input type="text" class="form-control" id="gambar" name="gambar" placeholder="Gambar Awal" value="<?= $dasarian['gambar']; ?>"></input>
					<?= form_error('gambar', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="gambar_dalam">Gambar Dasarian</label>
					<input name="gambar_dalam" type="text" class="form-control" id="gambar_dalam" placeholder="Gambar Dasarian" value="<?= $dasarian['gambar_dalam']; ?>"></input>
					<?= form_error('gambar_dalam', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="penjelasan">Penjelasan</label>
					<textarea name="penjelasan" type="text" class="form-control" id="penjelasan" placeholder="Penjelasan" rows='5'><?= $dasarian['penjelasan']; ?></textarea>
					<?= form_error('penjelasan', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="penulis">Penulis</label>
					<input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" value="<?= $dasarian['penulis']; ?>"></input>
					<?= form_error('penulis', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" class="form-control" id="status">
						<option value="1">Aktif</option>
						<option value="0">Non-aktif</option>
					</select>
				</div>
				<div class="form-group row justify-content-end">
					<div class="col-sm-12">
						<a href="<?= base_url('admin/dasarian') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="edit" class="btn btn-primary float-right">Update</button>
					</div>
				</div>
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