<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Slider
				</div>
				<div class="card-body">
					<form action="<?= base_url() ?>admin/slider_edit/<?= $slider['idSlider'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idSlider" value="<?= $slider['idSlider']; ?>">
						<div class="form-group">
							<label for="namaSlider">Nama Slider</label>
							<input name="namaSlider" type="text" class="form-control" id="namaSlider" placeholder="Isi nama slider" value="<?= $slider['namaSlider']; ?>">
							<?= form_error('namaSlider', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="fotoSlider">Link Foto Slider</label>
							<input name="fotoSlider" type="text" class="form-control" id="fotoSlider" placeholder="Isi link foto slider" value="<?= $slider['fotoSlider']; ?>">
							<?= form_error('fotoSlider', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="statusSlider">Status Slider</label>
							<select name="statusSlider" id="statusSlider" class="form-control">
								<option value="0">Aktif</option>
								<option value="1">Non-aktif</option>
							</select>
							<?= form_error('statusSlider', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('admin/slider') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" href="<?= base_url('admin/slider_add') ?>" name="tambah" class="btn btn-primary float-right">Simpan Slider</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>