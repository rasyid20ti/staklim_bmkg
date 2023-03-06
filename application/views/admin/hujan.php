<body class=" ext-webkit ext-chrome ext-windows">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<form action="<?= base_url('admin/form_hujan'); ?>" method="GET">
							<div class="form-group">
								<label for="stasiun">Stasiun</label>
								<output type="name" class="form-control" id="stasiun" name="stasiun">Stasiun Klimatologi Kampar</output>
							</div>
							<div class="form-group">
								<label for="bulan">Month</label>
								<input type="month" class="form-control" id="date" name="date">
							</div>
							<div class="form-group">
								<label for="sel1">Pos Hujan</label>
								<select name="kabupaten" id="kabupaten" class="form-control">
									<option value="">Pilih Kabupaten</option>
									<?php
									foreach ($hasil as $value) {
										echo "<option value='$value->nama_kabupaten'>$value->nama_kabupaten</option>";
									}
									?>
								</select>
								<label for="sel1"></label>
								<select name="alat" id="alat" class="form-control">
									<option value="">Pilih Stasiun</option>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Fetch </button>
							</div>
						</form>
						<script>
							$("#kabupaten").change(function() {

								// variabel dari nilai combo box kabupaten
								var kabupaten = $("#kabupaten").val();

								// Menggunakan ajax untuk mengirim dan dan menerima data dari server
								$.ajax({
									url: "<?php echo base_url(); ?>/Admin/get_alat",
									method: "POST",
									data: { kabupaten: kabupaten },
									async: false,
									dataType: 'json',
									success: function(data) {
										var html = '';
										var i;

										for (i = 0; i < data.length; i++) {
											html += '<option value=' + data[i].nomor_pos + '>' + data[i].nama_pos + ' (' + data[i].nomor_pos + ')</option>';
										}
										$('#alat').html(html);
									}
								});
							});
						</script>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="contrains">
			<h6>Lihat Data Tabel</h6>
			<h6><a href="/staklimkampar/admin/vw_hujan" class="btn btn-success">Tabel Pos Hujan</a></h6>
		</div>
	</div>
</body>
