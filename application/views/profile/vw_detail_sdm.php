<!-- <link href="<?php echo base_url('assets2/'); ?>css/detail-sdm.css" rel="stylesheet"> -->
<body>
	
	<div class="container-fluid" style="background-color: #464242;">
		<div style="margin-top:40px;margin-left:40px;">
			<div class="row d-flex align-items-center h-100">
				<div class="col col-lg-9 col-xl-7">
					<div class="card" style="background-color:#464242">
						<div class="rounded-top d-flex flex-row" style="height:200px;">
							<div class="ms-4 mt-5 d-flex flex-column" style="width: 200px;">
								<img src="<?= $pegawai['foto']; ?>" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 200px;height: 343px; z-index: 1">
							</div>
							<div class="ms-3" style="color:white;margin-top: 120px;">
								<h5><?= $pegawai['nama']; ?></h5>
								<p><?= $pegawai['jabatan']; ?><br></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top:200px;margin-bottom:100px;">
		<hr>
		<div class="row g-4" style="margin-bottom: 40px;">
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Nama Lengkap</h4>
				<?= $pegawai['nama']; ?>
			</div>
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">NIP</h4>
				<?= $pegawai['nip']; ?>
			</div>
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Surel</h4>
				<a href="mailto:email@domain.com"><?= $pegawai['email']; ?></a> 
			</div>
		</div>
		<div class="row g-4" style="margin-bottom: 40px;">
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Tempat, Tanggal Lahir</h4>
				<?= $pegawai['ttl']; ?>
			</div>
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Golongan</h4>
				<?= $pegawai['golongan']; ?>
			</div>
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Jabatan</h4>
				<?= $pegawai['jabatan']; ?>
			</div>
		</div>
		<div class="row g-4">
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Kompetensi </h4>
				<?= $pegawai['kompetensi']; ?>
			</div>
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Pendidikan Terakhir</h4>
				<?= $pegawai['pendidikan']; ?>
			</div>
			<div class="col border-left">
				<h4 style="margin-bottom: 10px;">Publikasi</h4>
				<a href="<?= $pegawai['publikasi']; ?>" target="_blank"><?= $pegawai['publikasi']; ?></a><br>
			</div>
		</div>
	</div>
</body>