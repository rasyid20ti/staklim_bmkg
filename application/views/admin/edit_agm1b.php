<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Editing AGM1B
				</div>
				<form action="<?= base_url() ?>admin/agm1b_submit_edit/<?= $agm1b['id'] ?>" method="POST" enctype="multipart/form-data">
						<h4>Tabel Pertama</h4>
						<br>
						<input type="hidden" name="id" value="<?= $agm1b['id']; ?>">
						<label>Temperature Pada Tanah Gundul Derajat C I</label>
						<div class="form-group">
							<label for="temg15">5 cm</label>
							<input value="<?= $agm1b ['temg15']; ?>" name="temg15" type="text" class="form-control" id="temg15" placeholder="5 cm">
						</div>
						<div class="form-group">
							<label for="temg110">10 cm</label>
							<input value="<?= $agm1b ['temg110']; ?>" name="temg110" type="text" class="form-control" id="temg110" placeholder="10 cm">
						</div>
						<div class="form-group">
							<label for="temg120">20 cm</label>
							<input value="<?= $agm1b ['temg120']; ?>" name="temg120" type="text" class="form-control" id="temg120" placeholder="20 cm">
						</div>
						<label>Temperature Pada Tanah Gundul Derajat C II</label>
						<div class="form-group">
							<label for="temg25">5 cm</label>
							<input value="<?= $agm1b ['temg25']; ?>" name="temg25" type="text" class="form-control" id="temg25" placeholder="5 cm">
						</div>
						<div class="form-group">
							<label for="temg210">10 cm</label>
							<input value="<?= $agm1b ['temg210']; ?>" name="temg210" type="text" class="form-control" id="temg210" placeholder="10 cm">
						</div>
						<div class="form-group">
							<label for="temg220">20 cm</label>
							<input value="<?= $agm1b ['temg220']; ?>" name="temg220" type="text" class="form-control" id="temg220" placeholder="20 cm">
						</div>
						<label>Temperature Pada Tanah Gundul Derajat C III</label>
						<div class="form-group">
							<label for="temg35">5 cm</label>
							<input value="<?= $agm1b['temg35']; ?>" name="temg35" type="text" class="form-control" id="temg35" placeholder="5 cm">
						</div>
						<div class="form-group">
							<label for="temg310">10 cm</label>
							<input value="<?= $agm1b['temg310']; ?>" name="temg310" type="text" class="form-control" id="temg310" placeholder="10 cm">
						</div>
						<div class="form-group">
							<label for="temg320">20 cm</label>
							<input value="<?= $agm1b['temg320']; ?>" name="temg320" type="text" class="form-control" id="temg320" placeholder="20 cm">
						</div>
						<div class="form-group">
							<label for="temg350">50 cm</label>
							<input value="<?= $agm1b['temg350']; ?>" name="temg350" type="text" class="form-control" id="temg350" placeholder="50 cm">
						</div>
						<div class="form-group">
							<label for="temg3100">100 cm</label>
							<input value="<?= $agm1b['temg3100']; ?>" name="temg3100" type="text" class="form-control" id="temg3100" placeholder="100 cm">
						</div>
						<label>Temperature Pada Tanah Rumput Derajat C I</label>
						<div class="form-group">
							<label for="tempt15">5 cm</label>
							<input value="<?= $agm1b['tempt15']; ?>" name="tempt15" type="text" class="form-control" id="tempt15" placeholder="5 cm">
						</div>
						<div class="form-group">
							<label for="tempt110">10 cm</label>
							<input value="<?= $agm1b['tempt110']; ?>" name="tempt110" type="text" class="form-control" id="tempt110" placeholder="10 cm">
						</div>
						<div class="form-group">
							<label for="tempt120">20 cm</label>
							<input value="<?= $agm1b['tempt120']; ?>" name="tempt120" type="text" class="form-control" id="tempt120" placeholder="20 cm">
						</div>
						<label>Temperature Pada Tanah Rumput Derajat C II</label>
						<div class="form-group">
							<label for="tempt25">5 cm</label>
							<input value="<?= $agm1b['tempt25']; ?>" name="tempt25" type="text" class="form-control" id="tempt25" placeholder="5 cm">
						</div>
						<div class="form-group">
							<label for="tempt210">10 cm</label>
							<input value="<?= $agm1b['tempt210']; ?>" name="tempt210" type="text" class="form-control" id="tempt210" placeholder="10 cm">
						</div>
						<div class="form-group">
							<label for="tempt220">20 cm</label>
							<input value="<?= $agm1b['tempt220']; ?>" name="tempt220" type="text" class="form-control" id="tempt220" placeholder="20 cm">
						</div>
						<label>Temperature Pada Tanah Rumput Derajat C III</label>
						<div class="form-group">
							<label for="tempt35">5 cm</label>
							<input value="<?= $agm1b['tempt35']; ?>" name="tempt35" type="text" class="form-control" id="tempt35" placeholder="5 cm">
						</div>
						<div class="form-group">
							<label for="tempt310">10 cm</label>
							<input value="<?= $agm1b['tempt310']; ?>" name="tempt310" type="text" class="form-control" id="tempt310" placeholder="10 cm">
						</div>
						<div class="form-group">
							<label for="tempt320">20 cm</label>
							<input value="<?= $agm1b['tempt320']; ?>" name="tempt320" type="text" class="form-control" id="tempt320" placeholder="20 cm">
						</div>
						<div class="form-group">
							<label for="tempt350">50 cm</label>
							<input value="<?= $agm1b['tempt350']; ?>" name="tempt350" type="text" class="form-control" id="tempt350" placeholder="50 cm">
						</div>
						<div class="form-group">
							<label for="tempt3100">100 cm</label>
							<input value="<?= $agm1b['tempt3100']; ?>" name="tempt3100" type="text" class="form-control" id="tempt3100" placeholder="100 cm">
						</div>
						<h4>Tabel Kedua</h4>
						<br>
						<label>Jam 07.30 WS (I)</label>
						<div class="form-group">
							<label for="Ch1">CH</label>
							<input value="<?= $agm1b['Ch1']; ?>" name="Ch1" type="text" class="form-control" id="Ch1" placeholder="Hujan">
						</div>
						<label>Kecepatan Angin</label>
						<div class="form-group">
							<label for="ke1Angin0">0.5 m</label>
							<input value="<?= $agm1b['ke1Angin0']; ?>" name="ke1Angin0" type="text" class="form-control" id="ke1Angin0" placeholder="0.5 m">
						</div>
						<div class="form-group">
							<label for="ke1Angin10">10 m</label>
							<input value="<?= $agm1b['ke1Angin10']; ?>" name="ke1Angin10" type="text" class="form-control" id="ke1Angin10" placeholder="10 m">
						</div>
						<div class="form-group">
							<label for="suhuUdara1">Suhu Udara</label>
							<input value="<?= $agm1b['suhuUdara1']; ?>" name="suhuUdara1" type="text" class="form-control" id="suhuUdara1" placeholder="Suhu Udara">
						</div>
						<div class="form-group">
							<label for="Rh1">RH</label>
							<input value="<?= $agm1b['Rh1']; ?>" name="rh1" type="text" class="form-control" id="Rh1" placeholder="RH">
						</div>
						<br>						
						<div class="form-group">
							<label for="suhuAir1">Suhu Air</label>
							<input value="<?= $agm1b['suhuAir1']; ?>" name="suhuAir1" type="text" class="form-control" id="suhuAir1" placeholder="Suhu Air">
						</div>
						<div class="form-group">
							<label for="Eva1">Eva</label>
							<input value="<?= $agm1b['Eva1']; ?>" name="Eva1" type="text" class="form-control" id="Eva1" placeholder="Eva">
						</div>
						<label>Jam 13.30 WS (II)</label>
						<div class="form-group">
							<label for="Ch2">CH</label>
							<input value="<?= $agm1b['Ch2']; ?>" name="Ch2" type="text" class="form-control" id="Ch2" placeholder="Hujan">
						</div>
						<label>Kecepatan Angin</label>
						<div class="form-group">
							<label for="ke2Angin0">0.5 m</label>
							<input value="<?= $agm1b['ke2Angin0']; ?>" name="ke2Angin0" type="text" class="form-control" id="ke2Angin0" placeholder="0.5 m">
						</div>
						<div class="form-group">
							<label for="ke2Angin10">10 m</label>
							<input value="<?= $agm1b['ke2Angin10']; ?>" name="ke2Angin10" type="text" class="form-control" id="ke2Angin10" placeholder="10 m">
						</div>
						<div class="form-group">
							<label for="suhuUdara2">Suhu Udara</label>
							<input value="<?= $agm1b['suhuUdara2']; ?>" name="suhuUdara2" type="text" class="form-control" id="suhuUdara2" placeholder="Suhu Udara">
						</div>
						<div class="form-group">
							<label for="Rh2">RH</label>
							<input value="<?= $agm1b['Rh2']; ?>" name="Rh2" type="text" class="form-control" id="Rh2" placeholder="RH">
						</div>
						<div class="form-group">
							<label for="suhuAir2">Suhu Air</label>
							<input value="<?= $agm1b['suhuAir2']; ?>" name="suhuAir2" type="text" class="form-control" id="suhuAir2" placeholder="Suhu Air">
						</div>
						<div class="form-group">
							<label for="Eva2">Eva</label>
							<input value="<?= $agm1b['Eva2']; ?>" name="Eva2" type="text" class="form-control" id="Eva2" placeholder="Eva">
						</div>
						<label>Jam 18.30 WS (III)</label>
						<div class="form-group">
							<label for="Ch3">CH</label>
							<input value="<?= $agm1b['Ch3']; ?>" name="Ch3" type="text" class="form-control" id="Ch3" placeholder="Hujan">
						</div>
						<label>Kecepatan Angin</label>
						<div class="form-group">
							<label for="ke3Angin0">0.5 m</label>
							<input value="<?= $agm1b['ke3Angin0']; ?>" name="ke3Angin0" type="text" class="form-control" id="ke3Angin0" placeholder="0.5 m">
						</div>
						<div class="form-group">
							<label for="ke3Angin10">10 m</label>
							<input value="<?= $agm1b['ke3Angin10']; ?>" name="ke3Angin10" type="text" class="form-control" id="ke3Angin10" placeholder="10 m">
						</div>
						<div class="form-group">
							<label for="suhuUdara3">Suhu Udara</label>
							<input value="<?= $agm1b['suhuUdara3']; ?>" name="suhuUdara3" type="text" class="form-control" id="suhuUdara3" placeholder="Suhu Udara">
						</div>
						<div class="form-group">
							<label for="Rh3">RH</label>
							<input value="<?= $agm1b['Rh3']; ?>" name="Rh3" type="text" class="form-control" id="Rh3" placeholder="RH">
						</div>
						<div class="form-group">
							<label for="suhuAir3">Suhu Air</label>
							<input value="<?= $agm1b['suhuAir3']; ?>" name="suhuAir3" type="text" class="form-control" id="suhuAir3" placeholder="Suhu Air">
						</div>
						<div class="form-group">
							<label for="Eva3">Eva</label>
							<input value="<?= $agm1b['Eva3']; ?>" name="Eva3" type="text" class="form-control" id="Eva3" placeholder="Eva">
						</div>
						<label>Jumlah</label>
						<div class="form-group">
							<label for="Ch4">CH</label>
							<input value="<?= $agm1b['Ch4']; ?>" name="Ch4" type="text" class="form-control" id="Ch4" placeholder="Hujan">
						</div>
						<div class="form-group">
							<label for="Eva4">Eva</label>
							<input value="<?= $agm1b['Eva4']; ?>" name="Eva4" type="text" class="form-control" id="Eva4" placeholder="Eva">
						</div>
						<a href="<?= base_url('Admin/vw_agm1b') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah AGM1A</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
