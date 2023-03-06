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
					<label for="linkMedia">Link Youtube</label>
					<textarea name="linkMedia" type="text" class="form-control" id="linkMedia" placeholder="Link Youtube" rows='5'></textarea>
					<?= form_error('linkMedia', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="embed">ID Embed</label>
					<input name="embed" type="text" class="form-control" id="embed" placeholder="embed" rows='5'>
					<?= form_error('embed', '<small class="text-denger pl-3">', '</small>'); ?>
				</div>

				<a href="<?= base_url('admin/media') ?>" class="btn btn-danger">Tutup</a>
				<button type="submit" href="<?= base_url('admin/mediaDepan_add') ?>" name="tambah" class="btn btn-primary float-right">Simpan</button>
			</form>
		</div>
	</div>
</div>
</div>

<!-- <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('linkMedia');
	CKEDITOR.editorConfig = function(config) {
		config.enterMode = 2;
		config.shiftenterMode = 1;
	};
</script> -->