<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><center><?= $title; ?></center></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="<?= base_url() ?>admin/mediaDepan_edit/<?= $media['idMedia'] ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="idMedia" value="<?= $media['idMedia']; ?>">
				<div class="form-group">
            		<label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $media['judul']; ?>"></input>
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                	<label for="linkMedia">Link Youtube</label>
                    <textarea type="text" class="form-control" id="linkMedia" name="linkMedia" rows="5"><?= $media['linkMedia']; ?></textarea>
                    <?= form_error('linkMedia', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
				<div class="form-group">
                	<label for="embed">ID Embed</label>
                    <input type="text" class="form-control" id="embed" name="embed" value="<?= $media['embed']; ?>">
                    <?= form_error('embed', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
				<center><button type="submit" name="edit" class="btn btn-primary">Update Media</button></center>
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

<!-- End of Main Content -->
