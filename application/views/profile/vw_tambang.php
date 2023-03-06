<link href="<?php echo base_url('assets2/'); ?>css/administrasi.css" rel="stylesheet">

<body>
	<div class="headerAdministrasi">
		<div class="container-fluid">
			<div class='row'>
				<div class='col' style="padding-top:100px;">
					<h5>Kantor Pelayanan Operasional</h5>
					<p>Kantor Operasional berfungsi untuk mengumpulkan data-data Klimatologi. 
					<p>Unsur-Unsur Yang Diamati</p>
					</p>
					<br><br>
				</div>
				<div class='col' style="padding-left: 50px;">
					<img src="<?= base_url('assets2/img/tambang1.jpg'); ?>"style="width:500px; height:300px; border-radius:20px;">
				</div>
			</div>
		</div>
	</div>

	<div class="container-sm contentPengajuan" style="margin-bottom:40px;">
		<div class="row g-4">
			<!-- Analisis -->
			<div class="col-sm-3 col-md-3">
				<center><img src="<?= base_url('assets2/images/icon/suhu1.png'); ?>"style="width:100px; opacity:0.8"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Suhu</h4></center>
						<ul class="check-list">
							<li>Suhu Maksimum</li>
							<li>Suhu Minimum</li>
							<li>Suhu Rata-Rata</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Analisis -->
			<!-- Tekanan -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/tekanan.png'); ?>"style="width:100px"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Tekanan</h4></center>
						<ul class="check-list">
							<li>Barometer Digital</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Tekanan -->
			<!-- Angin -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/angin.png'); ?>"style="width:100px"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Angin</h4></center>
						<ul class="check-list">
						<li>Arah Angin Ketinggian (4 meter, 7 meter, 10 meter)</li>
						<li>Kecepatan Angin (0,5 meter, 2 meter, 4 meter, 7 meter, 10 meter)</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Angin -->
			<!-- Kelembapan -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/kelembapan.png'); ?>"style="width:100px"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Kelembaban</h4></center>
						<ul class="check-list">
							<li>Relative Humidity</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Kelembapan -->
			<!-- End of Angin -->
			<!-- Kelembapan -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/matahari.png'); ?> "style="width:100px; opacity:2"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Matahari</h4></center>
						<ul class="check-list">
							<li>Sunshine Duration</li>
							<li>Albedo </li>
							<li>Diffuse Radiation </li>
							<li>Normal Irradiation (DNI)</li>
							<li>Global Radiation </li>
							<li>Nett Radiation</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Kelembapan -->
			<!-- End of Angin -->
			<!-- Kelembapan -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/penguapan.png'); ?>"style="width:100px"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Penguapan</h4></center>
						<ul class="check-list">
							<li>Evaporasi </li>
							<li>Evapotranspirasi </li>
							<li>Evapotranspirasi Aktual </li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Kelembapan -->
			<!-- End of Angin -->
			<!-- Kelembapan -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/curahhujan.png'); ?>"style="width:100px"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Curah Hujan</h4></center>
						<ul class="check-list">
							<li>Standar BMKG (dalam satuan milimeter)</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Kelembapan -->
			<!-- End of Angin -->
			<!-- Kelembapan -->
			<div class="col-sm-3 col-md-3">
			<center><img src="<?= base_url('assets2/images/icon/kualitasudara.png'); ?>"style="width:100px"></center>
				<div class="text-block">
					<div class="kotak">
						<center><h4>Kualitas Udara</h4></center>
						<ul class="check-list">
							<li>pH Air Hujan </li>
							<li>PM2.5 </li>
							<li>TSP </li>
							<li>Kimia Air Hujan </li>
							<li>Daya Hantar Listrik</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End of Kelembapan -->
		</div>
	</div>
