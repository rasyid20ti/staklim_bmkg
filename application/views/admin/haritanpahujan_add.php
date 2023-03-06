<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
            <div class="card-header">
					Form Tambah HTH
				</div>
				<div class="card-body">
					<form action="<?= base_url('admin/hth_import') ?>" method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label for="scanning">Periode</label>
							<div class="custom-file">
								<input type="date" class="form-control" name="periode">
								
							</div>

						</div>
						<div class="form-group">
							<label for="scanning">Inputkan file Excel HTH</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="upload_file" id="file" accept=".csv,.xls,.xlsx">
								<label for="scanning" class="custom-file-label">Choose File</label>
							</div>

						</div>
						<a href="<?= base_url('admin/Hth') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit"  name="tambah" class="btn btn-primary float-right">Proses</button>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>