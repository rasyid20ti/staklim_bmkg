<body class=" ext-webkit ext-chrome ext-windows">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<form action="<?= base_url('Admin/iklim_tambah'); ?>" method="GET">
							<div class="form-group">
								<label for="date">Date</label>
								<input type="date" class="form-control" id="date" name="date" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Fetch</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="contrains">
			<h6>Lihat Data Tabel AGM1A & AGM1B</h6>
			<a href="/staklimkampar/admin/vw_agm1a" class="btn btn-success">Table's AGM1A</a> -|-
			<a href="/staklimkampar/admin/vw_agm1b" class="btn btn-success">Table's AGM1B</a>
		</div>
	</div>
</body>
<br>
