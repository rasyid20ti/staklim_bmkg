<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Editing Kecamatan
				</div>
				<div class="card-body">
					<form action="<?= base_url() ?>admin/kecamatan_edit/<?= $kecamatan['id'] ?>" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $kecamatan['id']; ?>">
						<div class="form-group">
							<label for="nama_kabupaten">Nama Kabupaten</label>
							<select name="nama_kabupaten" id="nama_kabupaten" class="form-control">
								<option value="1">Bengkalis</option>
								<option value="2">Indragiri Hilir</option>
								<option value="3">Indragiri Hulu</option>
								<option value="4">Kampar</option>
								<option value="5">Kepulauan Meranti</option>
								<option value="6">Kota Dumai</option>
								<option value="7">Kota Pekanbaru</option>
								<option value="8">Kuantan Singingi</option>
								<option value="9">Pelalawan</option>
								<option value="10">Rokan Hilir</option>
								<option value="11">Rokan Hulu</option>
								<option value="12">Siak</option>
							</select>
						</div>
						<div class="form-group">
							<label for="id">Nama Kecamatan</label>
							
							<input value="<?= $kecamatan['nama_kecamatan']; ?>" name="nama_kecamatan" type="text" class="form-control" id="id_kecamatan" placeholder="Nama Kecamatan">
						</div>

						<a href="<?= base_url('admin/kecamatan') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>